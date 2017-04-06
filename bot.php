<?php
	use React\EventLoop\Factory;
	use Slack\Payload;
	use Slack\RealTimeClient;

	require_once __DIR__.'/vendor/autoload.php';
	require_once __DIR__."/sentences.php";

	$loop = Factory::create();

	$client = new RealTimeClient($loop);
	$client->setToken($token);

	$client->connect()
		   ->then(function () use ($client)
		   {
			   $client->on('message', function (Payload $payload) use ($client)
			   {
				   $client->getChannelGroupOrDMByID($payload["channel"])
						  ->then(function (\Slack\ChannelInterface $channel) use ($client, $payload)
						  {
							  $client->send(checkKeywordAndGetResponse($payload["text"]), $channel);
						  });
			   });
		   });

	$loop->run();

	function handleIrregulars($text)
	{
		print_r($text);
		global $irregularTable;
		for($i = 0; $i < count($irregularTable); $i++)
		{
			$regex = $irregularTable[$i]->pattern;
			$match = preg_match($regex, $text);
			if($match)
			{
				return $irregularTable[$i]->fix;
			}
		}

		return $text;
	}

	function pickOne($matchResult, $list = [])
	{
		$response = str_replace("$", mb_substr($matchResult, 0, 1), $list[rand(0, count($list) - 1)]);

		return handleIrregulars($response);
	}

	function customPick($resultString)
	{
		$matchResult = explode(" ", trim($resultString));

		return $matchResult[rand(1, count($matchResult) - 1)];
	}

	function fallback()
	{
		$fallbackTexts = [
			'귀찮으니깐 말 좀 그만 걸어',
			'그만해라',
			'오빠 바쁘다',
			'하아..',
			'---- 먹금 ----',
			'나는 결정을 도와주는 거지 네 말상대를 해 주는 게 아니야',
			'구질구질하게 왜 이래?',
			'오빠 나한테 왜 자꾸 이래?',
		];

		return rand(0, 100) < 20 ? $fallbackTexts[rand(0, (count($fallbackTexts) - 1))] : NULL;
	}

	function checkKeywordAndGetResponse($text)
	{
		if(!trim($text))
		{
			return NULL;
		}

		global $explicitCommands;

		// Check explicit commands first
		for($i = 0; $i < count($explicitCommands); $i++)
		{
			$match = preg_match_all($explicitCommands[$i]->command, $text, $matches);
			if($match)
			{
				return ($explicitCommands[$i]->behavior)(preg_replace($explicitCommands[$i]->command, "", $text));
			}
		}

		global $keywordList;
		// Check keywords
		for($i = 0; $i < count($keywordList); $i++)
		{
			$match = preg_match_all($keywordList[$i]->keyword, $text, $matches);
			if($match)
			{
				if(property_exists($keywordList[$i], "parameter"))
				{
					return ($keywordList[$i]->behavior)(preg_replace("/".$keywordList[$i]->parameter[rand(0, count($keywordList[$i]->parameter) - 1)]."/", "", $text), $keywordList[$i]->parameter);
				}
				else
				{
					return ($keywordList[$i]->behavior)();
				}

			}
		}

		return NULL;
	}
