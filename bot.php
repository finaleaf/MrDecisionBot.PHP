<?php

	use React\EventLoop\Factory;
	use Slack\Payload;
	use Slack\RealTimeClient;

	require_once __DIR__.'/vendor/autoload.php';
	require_once __DIR__."/sentences.php";
	require_once __DIR__."/token.php";

	class MrDecisionBot
	{
		public function __construct()
		{
			global $token, $irregularTable, $keywordList, $explicitCommands;
			$this->token = $token;
			$this->irregularTable = $irregularTable;
			$this->keywordList = $keywordList;
			$this->explicitCommands = $explicitCommands;
		}

		public function index()
		{
			$loop = Factory::create();

			$client = new RealTimeClient($loop);
			$client->setToken($this->token);

			$client->connect()
				   ->then(function () use ($client)
				   {
					   $client->on('message', function (Payload $payload) use ($client)
					   {
						   $client->getChannelGroupOrDMByID($payload["channel"])
								  ->then(function (\Slack\ChannelInterface $channel) use ($client, $payload)
								  {
									  $client->send($this->checkKeywordAndGetResponse($payload["text"]), $channel);
								  });
					   });
				   });

			$loop->run();
		}

		private function handleIrregulars($text)
		{
			print_r($text);
			for($i = 0; $i < count($this->irregularTable); $i++)
			{
				$regex = $this->irregularTable[$i]->pattern;
				$match = preg_match($regex, $text);
				if($match)
				{
					return $this->irregularTable[$i]->fix;
				}
			}

			return $text;
		}

		private function pickOne($matchResult, $list = [])
		{
			$response = str_replace("$", mb_substr($matchResult, 0, 1), $list[rand(0, count($list) - 1)]);

			return $this->handleIrregulars($response);
		}

		private function customPick($resultString)
		{
			$matchResult = explode(" ", trim($resultString));

			return $matchResult[rand(1, count($matchResult) - 1)];
		}

		private function fallback()
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

		private function checkKeywordAndGetResponse($text)
		{
			if(!trim($text))
			{
				return NULL;
			}
			// Check explicit commands first
			for($i = 0; $i < count($this->explicitCommands); $i++)
			{
				$match = preg_match_all($this->explicitCommands[$i]->command, $text, $matches);
				if($match)
				{
					return $this->{($this->explicitCommands[$i]->behavior)}(preg_replace($this->explicitCommands[$i]->command, "", $text));
				}
			}

			// Check keywords
			for($i = 0; $i < count($this->keywordList); $i++)
			{
				$match = preg_match_all($this->keywordList[$i]->keyword, $text, $matches);
				if($match)
				{
					if(property_exists($this->keywordList[$i], "parameter"))
					{
						return $this->{($this->keywordList[$i]->behavior)}(preg_replace("/".$this->keywordList[$i]->parameter[rand(0, count($this->keywordList[$i]->parameter) - 1)]."/", "", $text), $this->keywordList[$i]->parameter);
					}
					else
					{
						return $this->{($this->keywordList[$i]->behavior)}();
					}

				}
			}

			return NULL;
		}

	}

	$bot = new MrDecisionBot();
	$bot->__construct();
	$bot->index();
