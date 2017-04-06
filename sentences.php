<?php
	/**
	 * Created by PhpStorm.
	 * User: Fil
	 * Date: 2017-04-06
	 * Time: 오전 10:11
	 */

	$explicitCommands = [
		(object)["command" => '/^김결정!+\s?/', "behavior" => 'customPick'],
		(object)["command" => '/^결정아!+\s?/', "behavior" => 'customPick'],
		(object)["command" => '/^김결쩡!+\s?/', "behavior" => 'customPick'],
		(object)["command" => '/^깅결정!+\s?/', "behavior" => 'customPick'],
		(object)["command" => '/^김결전!+\s?/', "behavior" => 'customPick'],
		(object)["command" => '/^심결정!+\s?/', "behavior" => 'customPick'],
		(object)["command" => '/^김굘정!+\s?/', "behavior" => 'customPick'],
		(object)["command" => '/^김경정!+\s?/', "behavior" => 'customPick'],
		(object)["command" => '/^김경전!+\s?/', "behavior" => 'customPick'],
		(object)["command" => '/^김결잔!+\s?/', "behavior" => 'customPick'],
	];

	$keywordList = [
		(object)[
			"keyword" => '/(\S*)해\s?말어\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$해', '말어', '$하자', '말자', '$해라', '$하지 마', '$해', '$하지 마'],
		],
		(object)[
			"keyword" => '/(\S*)해\s?말아\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$해', '말아', '$하자', '말자', '$해라', '$하지 마', '$해', '$하지 마'],
		],
		(object)[
			"keyword" => '/(\S*)사\s?말어\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$사', '말어', '$사자', '말자', '$사라', '$사지 마', '$사', '$사지 마'],
		],
		(object)[
			"keyword" => '/(\S*)사\s?말아\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$사', '말아', '$사자', '말자', '$사라', '$사지 마', '$사', '$사지 마'],
		],
		(object)[
			"keyword" => '/(\S*)싸\s?말어\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$싸', '말어', '$싸자', '말자', '$싸라', '$싸지 마', '$싸', '$싸지 마'],
		],
		(object)[
			"keyword" => '/(\S*)싸\s?말아\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$싸', '말아', '$싸자', '말자', '$싸라', '$싸지 마', '$싸', '$싸지 마'],
		],
		(object)[
			"keyword" => '/(\S+)아\s?말어\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$아', '말어', '$자', '말자', '$아라', '$지 마', '$아', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)아\s?말아\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$아', '말아', '$자', '말자', '$아라', '$지 마', '$아', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)어\s?말어\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$어', '말어', '$자', '말자', '$어라', '$지 마', '$어', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)어\s?말아\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$어', '말아', '$자', '말자', '$어라', '$지 마', '$어', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)여\s?말어\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$여', '말어', '$이자', '말자', '$여라', '$이지 마', '$여', '$이지 마'],
		],
		(object)[
			"keyword" => '/(\S+)여\s?말아\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$여', '말아', '$이자', '말자', '$여라', '$이지 마', '$여', '$이지 마'],
		],
		(object)[
			"keyword" => '/(\S+)려\s?말어\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$려', '말어', '$리자', '말자', '$려라', '$리지 마', '$려', '$리지 마'],
		],
		(object)[
			"keyword" => '/(\S+)려\s?말아\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$려', '말아', '$리자', '말자', '$려라', '$리지 마', '$려', '$리지 마'],
		],
		(object)[
			"keyword" => '/(\S+)켜\s?말어\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$켜', '말어', '$키자', '말자', '$켜라', '$키지 마', '$켜', '$키지 마'],
		],
		(object)[
			"keyword" => '/(\S+)켜\s?말아\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$켜', '말아', '$키자', '말자', '$켜라', '$키지 마', '$켜', '$키지 마'],
		],
		(object)[
			"keyword" => '/(\S+)워\s?말어\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$워', '말어', '$우자', '말자', '$워라', '$우지 마', '$워', '$우지 마'],
		],
		(object)[
			"keyword" => '/(\S+)워\s?말아\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$워', '말아', '$우자', '말자', '$워라', '$우지 마', '$워', '$우지 마'],
		],
		(object)[
			"keyword" => '/(\S+)숴\s?말어\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$숴', '말어', '$수자', '말자', '$숴라', '$수지 마', '$숴', '$수지 마'],
		],
		(object)[
			"keyword" => '/(\S+)숴\s?말아\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$숴', '말아', '$수자', '말자', '$숴라', '$수지 마', '$숴', '$수지 마'],
		],
		(object)[
			"keyword" => '/(\S+)둬\s?말어\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$둬', '말어', '$두자', '말자', '$둬라', '$두지 마', '$둬', '$두지 마'],
		],
		(object)[
			"keyword" => '/(\S+)둬\s?말아\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['$둬', '말아', '$두자', '말자', '$둬라', '$두지 마', '$둬', '$두지 마'],
		],

		(object)[
			"keyword" => '/(\S+)냐[^냐]*마냐/',
			"behavior" => 'pickOne',
			"parameter" => ['$', '말어', '$자', '말자', '$라', '$지 마', '$', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)까[^까]*말까/',
			"behavior" => 'pickOne',
			"parameter" => ['$', '말어', '$자', '말자', '$라', '$지 마', '$', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?돼[^돼]*말아야\s?돼/',
			"behavior" => 'pickOne',
			"parameter" => ['$', '말어', '$자', '말자', '$라', '$지 마', '$', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?하나[^나]*말아야\s?하나/',
			"behavior" => 'pickOne',
			"parameter" => ['$', '말어', '$자', '말자', '$라', '$지 마', '$', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?하냐[^냐]*말아야\s?하냐/',
			"behavior" => 'pickOne',
			"parameter" => ['$', '말어', '$자', '말자', '$라', '$지 마', '$', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?할까[^까]*말아야\s?할까/',
			"behavior" => 'pickOne',
			"parameter" => ['$', '말어', '$자', '말자', '$라', '$지 마', '$', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?되나[^나]*말아야\s?되나/',
			"behavior" => 'pickOne',
			"parameter" => ['$', '말어', '$자', '말자', '$라', '$지 마', '$', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?되냐[^냐]*말아야\s?되냐/',
			"behavior" => 'pickOne',
			"parameter" => ['$', '말어', '$자', '말자', '$라', '$지 마', '$', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?될까[^까]*말아야\s?될까/',
			"behavior" => 'pickOne',
			"parameter" => ['$', '말어', '$자', '말자', '$라', '$지 마', '$', '$지 마'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?돼\?/',
			"behavior" => 'pickOne',
			"parameter" => ['$야지', '$지 마', '$야 돼', '안 $도 돼', '$야 돼', '$지 말든지'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?해\?/',
			"behavior" => 'pickOne',
			"parameter" => ['$야지', '$지 마', '$야 돼', '안 $도 돼', '$야 돼', '$지 말든지'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?됨\?/',
			"behavior" => 'pickOne',
			"parameter" => ['$야지', '$지 마', '$야 돼', '안 $도 돼', '$야 돼', '$지 말든지'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?함\?/',
			"behavior" => 'pickOne',
			"parameter" => ['$야지', '$지 마', '$야 돼', '안 $도 돼', '$야 돼', '$지 말든지'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?되나\?/',
			"behavior" => 'pickOne',
			"parameter" => ['$야지', '$지 마', '$야 돼', '안 $도 돼', '$야 돼', '$지 말든지'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?하나\?/',
			"behavior" => 'pickOne',
			"parameter" => ['$야지', '$지 마', '$야 돼', '안 $도 돼', '$야 돼', '$지 말든지'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?되냐\?/',
			"behavior" => 'pickOne',
			"parameter" => ['$야지', '$지 마', '$야 돼', '안 $도 돼', '$야 돼', '$지 말든지'],
		],
		(object)[
			"keyword" => '/(\S+)야\s?하냐\?/',
			"behavior" => 'pickOne',
			"parameter" => ['$야지', '$지 마', '$야 돼', '안 $도 돼', '$야 돼', '$지 말든지'],
		],
		(object)[
			"keyword" => '/(\S+)야겠지\?/',
			"behavior" => 'pickOne',
			"parameter" => ['$야지', '$지 마', '$야 돼', '안 $도 돼', '$야 돼', '$지 말든지'],
		],
		(object)[
			"keyword" => '/(\S+)도\s?돼\?/',
			"behavior" => 'pickOne',
			"parameter" => ['돼', '안 돼', '$도 돼', '$면 안 되지', '$든지', 'ㄴㄴ'],
		],
		(object)[
			"keyword" => '/(\S+)도\s?됨\?/',
			"behavior" => 'pickOne',
			"parameter" => ['돼', '안 돼', '$도 돼', '$면 안 되지', '$든지', 'ㄴㄴ'],
		],
		(object)[
			"keyword" => '/(\S+)도\s?되나\?/',
			"behavior" => 'pickOne',
			"parameter" => ['돼', '안 돼', '$도 돼', '$면 안 되지', '$든지', 'ㄴㄴ'],
		],
		(object)[
			"keyword" => '/(\S+)도\s?되냐\?/',
			"behavior" => 'pickOne',
			"parameter" => ['돼', '안 돼', '$도 돼', '$면 안 되지', '$든지', 'ㄴㄴ'],
		],
		(object)[
			"keyword" => '/(\S+)도\s?될까\?/',
			"behavior" => 'pickOne',
			"parameter" => ['돼', '안 돼', '$도 돼', '$면 안 되지', '$든지', 'ㄴㄴ'],
		],

		(object)[
			"keyword" => '/콜\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['콜', '노콜', '콜', 'ㄴㄴ', '완전콜', '별로..'],
		],
		(object)[
			"keyword" => '/어때\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['굳', '노굳', '괜찮네', 'ㄴㄴ', '좋으다', '그닥..'],
		],
		(object)[
			"keyword" => '/어뗘\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['굳', '노굳', '괜찮네', 'ㄴㄴ', '좋으다', '그닥..'],
		],
		(object)[
			"keyword" => '/어떰\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['굳', '노굳', '괜찮네', 'ㄴㄴ', '좋으다', '그닥..'],
		],
		(object)[
			"keyword" => '/어떻냐\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['굳', '노굳', '괜찮네', 'ㄴㄴ', '좋으다', '그닥..'],
		],
		(object)[
			"keyword" => '/결정\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['결정', '안결정', '결ㅋ정ㅋ', 'ㄴㄴ', 'ㅇㅋ', '난 반댈세'],
		],
		(object)[
			"keyword" => '/괜춘\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['괜춘', '안괜춘', '콜', 'ㄴㄴ', '완전괜춘', '낫괜춘'],
		],
		(object)[
			"keyword" => '/괜춘한가\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['괜춘', '안괜춘', '콜', 'ㄴㄴ', '완전괜춘', '낫괜춘'],
		],
		(object)[
			"keyword" => '/갠춘\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['갠춘', '안갠춘', '콜', 'ㄴㄴ', '완전갠춘', '낫갠춘'],
		],
		(object)[
			"keyword" => '/갠춘한가\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['갠춘', '안갠춘', '콜', 'ㄴㄴ', '완전갠춘', '낫갠춘'],
		],
		(object)[
			"keyword" => '/괜찮아\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['괜찮아', '별로야', '콜', 'ㄴㄴ', '괜찮!', '안괜찮'],
		],
		(object)[
			"keyword" => '/괜찮나\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['괜찮아', '별로야', '콜', 'ㄴㄴ', '괜찮!', '안괜찮'],
		],
		(object)[
			"keyword" => '/괜찮냐\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['괜찮아', '별로야', '콜', 'ㄴㄴ', '괜찮!', '안괜찮'],
		],
		(object)[
			"keyword" => '/괜찮음\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['괜찮아', '별로야', '콜', 'ㄴㄴ', '괜찮!', '안괜찮'],
		],
		(object)[
			"keyword" => '/괜찮겠어\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['괜찮아', '별로야', '콜', 'ㄴㄴ', '괜찮!', '안괜찮'],
		],
		(object)[
			"keyword" => '/괜찮을까\?\S*$/',
			"behavior" => 'pickOne',
			"parameter" => ['괜찮아', '별로야', '콜', 'ㄴㄴ', '괜찮!', '안괜찮'],
		],

		(object)["keyword" => '/김결정/', "behavior" => 'fallback'],
		(object)["keyword" => '/결정아/', "behavior" => 'fallback'],
		(object)["keyword" => '/결정이/', "behavior" => 'fallback'],
	];

	$irregularTable = [
		/* ..하다 */
		/* 냐 */
		(object)["pattern" => '/하라$/', "fix" => '해라'],
		/* 까 */
		(object)["pattern" => '/할자$/', "fix" => '하자'],
		/* 까 */
		(object)["pattern" => '/할라$/', "fix" => '해라'],
		/* 까 */
		(object)["pattern" => '/할지 마$/', "fix" => '하지 마'],
		/* 야돼 */
		(object)["pattern" => '/해자$/', "fix" => '하자'],
		/* 야돼 */
		(object)["pattern" => '/해지 마$/', "fix" => '하지 마'],
		/* 야돼 */
		(object)["pattern" => '/해지 말든지$/', "fix" => '하지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/해면 안 되지$/', "fix" => '하면 안 되지'],
		/* 도 */
		(object)["pattern" => '/해든지$/', "fix" => '하든지'],
		/* 냐 */
		(object)["pattern" => '/하$/', "fix" => '해'],
		/* 까 */
		(object)["pattern" => '/할$/', "fix" => '해'],

		/* ..자다 */
		/* 냐 */
		(object)["pattern" => '/자라$/', "fix" => '자라'],
		/* 까 */
		(object)["pattern" => '/잘자$/', "fix" => '자자'],
		/* 까 */
		(object)["pattern" => '/잘라$/', "fix" => '자라'],
		/* 까 */
		(object)["pattern" => '/잘지 마$/', "fix" => '자지 마'],
		/* 야돼 */
		(object)["pattern" => '/자자$/', "fix" => '자자'],
		/* 야돼 */
		(object)["pattern" => '/자지 마$/', "fix" => '자지 마'],
		/* 야돼 */
		(object)["pattern" => '/자지 말든지$/', "fix" => '자지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/자면 안 되지$/', "fix" => '자면 안 되지'],
		/* 도 */
		(object)["pattern" => '/자든지$/', "fix" => '자든지'],
		/* 까 */
		(object)["pattern" => '/잘$/', "fix" => '자'],
		/* 냐 */
		(object)["pattern" => '/자$/', "fix" => '자'],

		/* ..짜다 */
		/* 냐 */
		(object)["pattern" => '/짜라$/', "fix" => '짜라'],
		/* 까 */
		(object)["pattern" => '/짤자$/', "fix" => '짜자'],
		/* 까 */
		(object)["pattern" => '/짤라$/', "fix" => '짜라'],
		/* 까 */
		(object)["pattern" => '/짤지 마$/', "fix" => '짜지 마'],
		/* 야돼 */
		(object)["pattern" => '/짜자$/', "fix" => '짜자'],
		/* 야돼 */
		(object)["pattern" => '/짜지 마$/', "fix" => '짜지 마'],
		/* 야돼 */
		(object)["pattern" => '/짜지 말든지$/', "fix" => '짜지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/짜면 안 되지$/', "fix" => '짜면 안 되지'],
		/* 도 */
		(object)["pattern" => '/짜든지$/', "fix" => '짜든지'],
		/* 까 */
		(object)["pattern" => '/짤$/', "fix" => '짜'],
		/* 냐 */
		(object)["pattern" => '/짜$/', "fix" => '짜'],

		/* ..주다 */
		/* 냐 */
		(object)["pattern" => '/주라$/', "fix" => '줘라'],
		/* 까 */
		(object)["pattern" => '/줄자$/', "fix" => '주자'],
		/* 까 */
		(object)["pattern" => '/줄라$/', "fix" => '줘라'],
		/* 까 */
		(object)["pattern" => '/줄지 마$/', "fix" => '주지 마'],
		/* 야돼 */
		(object)["pattern" => '/줘자$/', "fix" => '주자'],
		/* 야돼 */
		(object)["pattern" => '/줘지 마$/', "fix" => '주지 마'],
		/* 야돼 */
		(object)["pattern" => '/줘지 말든지$/', "fix" => '주지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/줘면 안 되지$/', "fix" => '주면 안 되지'],
		/* 도 */
		(object)["pattern" => '/줘든지$/', "fix" => '주든지'],
		/* 까 */
		(object)["pattern" => '/줄$/', "fix" => '줘'],
		/* 냐 */
		(object)["pattern" => '/주$/', "fix" => '줘'],

		/* ..놀다 */
		/* 냐 */
		(object)["pattern" => '/노라$/', "fix" => '놀아라'],
		/* 까 */
		(object)["pattern" => '/놀라$/', "fix" => '놀아라'],
		/* 야돼 */
		(object)["pattern" => '/놀아자$/', "fix" => '놀자'],
		/* 야돼 */
		(object)["pattern" => '/놀아지 마$/', "fix" => '놀지 마'],
		/* 야돼 */
		(object)["pattern" => '/놀아지 말든지$/', "fix" => '놀지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/놀아면 안 되지$/', "fix" => '놀면 안 되지'],
		/* 도 */
		(object)["pattern" => '/놀아든지$/', "fix" => '놀든지'],
		/* 까 */
		(object)["pattern" => '/놀$/', "fix" => '놀아'],
		/* 냐 */
		(object)["pattern" => '/노$/', "fix" => '놀아'],

		/* ..먹다 */
		/* 냐 */
		(object)["pattern" => '/먹라$/', "fix" => '먹어라'],
		/* 까 */
		(object)["pattern" => '/먹을$/', "fix" => '먹어'],
		/* 까 */
		(object)["pattern" => '/먹을자$/', "fix" => '먹자'],
		/* 까 */
		(object)["pattern" => '/먹을라$/', "fix" => '먹어라'],
		/* 까 */
		(object)["pattern" => '/먹을지 마$/', "fix" => '먹지 마'],
		/* 야돼 */
		(object)["pattern" => '/먹어자$/', "fix" => '먹자'],
		/* 야돼 */
		(object)["pattern" => '/먹어지 마$/', "fix" => '먹지 마'],
		/* 야돼 */
		(object)["pattern" => '/먹어지 말든지$/', "fix" => '먹지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/먹어면 안 되지$/', "fix" => '먹으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/먹어든지$/', "fix" => '먹든지'],
		/* 냐 */
		(object)["pattern" => '/먹$/', "fix" => '먹어'],

		/* 쏘다 */
		/* 냐 */
		(object)["pattern" => '/쏘라$/', "fix" => '쏴라'],
		/* 까 */
		(object)["pattern" => '/쏠자$/', "fix" => '쏘자'],
		/* 까 */
		(object)["pattern" => '/쏠라$/', "fix" => '쏴라'],
		/* 까 */
		(object)["pattern" => '/쏠지 마$/', "fix" => '쏘지 마'],
		/* 야돼 */
		(object)["pattern" => '/쏴자$/', "fix" => '쏘자'],
		/* 야돼 */
		(object)["pattern" => '/쏴지 마$/', "fix" => '쏘지 마'],
		/* 야돼 */
		(object)["pattern" => '/쏴지 말든지$/', "fix" => '쏘지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/쏴면 안 되지$/', "fix" => '쏘면 안 되지'],
		/* 도 */
		(object)["pattern" => '/쏴든지$/', "fix" => '쏘든지'],
		/* 까 */
		(object)["pattern" => '/쏠$/', "fix" => '쏴'],
		/* 냐 */
		(object)["pattern" => '/쏘$/', "fix" => '쏴'],

		/* ..이다 */
		/* 냐 */
		(object)["pattern" => '/이라$/', "fix" => '여라'],
		/* 까 */
		(object)["pattern" => '/일자$/', "fix" => '이자'],
		/* 까 */
		(object)["pattern" => '/일라$/', "fix" => '여라'],
		/* 까 */
		(object)["pattern" => '/일지 마$/', "fix" => '이지 마'],
		/* 야돼 */
		(object)["pattern" => '/여자$/', "fix" => '이자'],
		/* 야돼 */
		(object)["pattern" => '/여지 마$/', "fix" => '이지 마'],
		/* 야돼 */
		(object)["pattern" => '/여지 말든지$/', "fix" => '이지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/여면 안 되지$/', "fix" => '이면 안 되지'],
		/* 도 */
		(object)["pattern" => '/여든지$/', "fix" => '이든지'],
		/* 까 */
		(object)["pattern" => '/일$/', "fix" => '여'],
		/* 냐 */
		(object)["pattern" => '/이$/', "fix" => '여'],

		/* ..타다 */
		/* 까 */
		(object)["pattern" => '/탈자$/', "fix" => '타자'],
		/* 까 */
		(object)["pattern" => '/탈라$/', "fix" => '타라'],
		/* 까 */
		(object)["pattern" => '/탈지 마$/', "fix" => '타지 마'],
		/* 까 */
		(object)["pattern" => '/탈$/', "fix" => '타'],

		/* ..웃다 */
		/* 냐 */
		(object)["pattern" => '/웃라$/', "fix" => '웃어라'],
		/* 까 */
		(object)["pattern" => '/웃을$/', "fix" => '웃어'],
		/* 까 */
		(object)["pattern" => '/웃을자$/', "fix" => '웃자'],
		/* 까 */
		(object)["pattern" => '/웃을라$/', "fix" => '웃어라'],
		/* 까 */
		(object)["pattern" => '/웃을지 마$/', "fix" => '웃지 마'],
		/* 야돼 */
		(object)["pattern" => '/웃어자$/', "fix" => '웃자'],
		/* 야돼 */
		(object)["pattern" => '/웃어지 마$/', "fix" => '웃지 마'],
		/* 야돼 */
		(object)["pattern" => '/웃어지 말든지$/', "fix" => '웃지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/웃어면 안 되지$/', "fix" => '웃으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/웃어든지$/', "fix" => '웃든지'],
		/* 냐 */
		(object)["pattern" => '/웃$/', "fix" => '웃어'],

		/* ..굴다 */
		/* 냐 */
		(object)["pattern" => '/구라$/', "fix" => '굴어라'],
		/* 까 */
		(object)["pattern" => '/굴자$/', "fix" => '굴자'],
		/* 까 */
		(object)["pattern" => '/굴라$/', "fix" => '굴어라'],
		/* 야돼 */
		(object)["pattern" => '/굴러자$/', "fix" => '굴자'],
		/* 야돼 */
		(object)["pattern" => '/굴러지 마$/', "fix" => '굴지 마'],
		/* 야돼 */
		(object)["pattern" => '/굴러지 말든지$/', "fix" => '굴지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/굴러면 안 되지$/', "fix" => '굴면 안 되지'],
		/* 도 */
		(object)["pattern" => '/굴러든지$/', "fix" => '굴든지'],
		/* 까 */
		(object)["pattern" => '/굴$/', "fix" => '굴어'],
		/* 냐 */
		(object)["pattern" => '/구$/', "fix" => '굴어'],

		/* 울다 */
		/* 냐 */
		(object)["pattern" => '/(?:\s|^)우라$/', "fix" => '울어라'],
		/* 까 */
		(object)["pattern" => '/(?:\s|^)울라$/', "fix" => '울어라'],
		/* 야돼 */
		(object)["pattern" => '/(?:\s|^)울어자$/', "fix" => '울자'],
		/* 야돼 */
		(object)["pattern" => '/(?:\s|^)울어지 마$/', "fix" => '울지 마'],
		/* 야돼 */
		(object)["pattern" => '/(?:\s|^)울어지 말든지$/', "fix" => '울지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/(?:\s|^)울어면 안 되지$/', "fix" => '울면 안 되지'],
		/* 도 */
		(object)["pattern" => '/(?:\s|^)울어든지$/', "fix" => '울든지'],
		/* 까 */
		(object)["pattern" => '/(?:\s|^)울$/', "fix" => '울어'],
		/* 냐 */
		(object)["pattern" => '/(?:\s|^)우$/', "fix" => '울어'],

		/* ..우다 */
		/* 냐 */
		(object)["pattern" => '/(\S+)우라$/', "fix" => '워라'],
		/* 까 */
		(object)["pattern" => '/(\S+)울자$/', "fix" => '우자'],
		/* 까 */
		(object)["pattern" => '/(\S+)울라$/', "fix" => '워라'],
		/* 까 */
		(object)["pattern" => '/(\S+)울지 마$/', "fix" => '우지 마'],
		/* 야돼 */
		(object)["pattern" => '/(\S+)워자$/', "fix" => '우자'],
		/* 야돼 */
		(object)["pattern" => '/(\S+)워지 마$/', "fix" => '우지 마'],
		/* 야돼 */
		(object)["pattern" => '/(\S+)워지 말든지$/', "fix" => '우지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/(\S+)워면 안 되지$/', "fix" => '우면 안 되지'],
		/* 도 */
		(object)["pattern" => '/(\S+)워든지$/', "fix" => '우든지'],
		/* 까 */
		(object)["pattern" => '/(\S+)울$/', "fix" => '워'],
		/* 냐 */
		(object)["pattern" => '/(\S+)우$/', "fix" => '워'],

		/* ..가다 */
		/* 까 */
		(object)["pattern" => '/갈자$/', "fix" => '가자'],
		/* 까 */
		(object)["pattern" => '/갈라$/', "fix" => '가라'],
		/* 까 */
		(object)["pattern" => '/(갈지 마)$/', "fix" => '가지 마'],
		/* 까 */
		(object)["pattern" => '/갈$/', "fix" => '가'],

		/* ..있다 */
		/* 냐 */
		(object)["pattern" => '/있라$/', "fix" => '있어라'],
		/* 까 */
		(object)["pattern" => '/있을$/', "fix" => '있어'],
		/* 까 */
		(object)["pattern" => '/있을자$/', "fix" => '있자'],
		/* 까 */
		(object)["pattern" => '/있을라$/', "fix" => '있어라'],
		/* 까 */
		(object)["pattern" => '/있을지 마$/', "fix" => '있지 마'],
		/* 야돼 */
		(object)["pattern" => '/있어자$/', "fix" => '있자'],
		/* 야돼 */
		(object)["pattern" => '/있어지 마$/', "fix" => '있지 마'],
		/* 야돼 */
		(object)["pattern" => '/있어지 말든지$/', "fix" => '있지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/있어면 안 되지$/', "fix" => '있으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/있어든지$/', "fix" => '있든지'],
		/* 냐 */
		(object)["pattern" => '/있$/', "fix" => '있어'],

		/* ..없다 */
		/* 냐 */
		(object)["pattern" => '/없라$/', "fix" => '없어라'],
		/* 까 */
		(object)["pattern" => '/없을$/', "fix" => '없어'],
		/* 까 */
		(object)["pattern" => '/없을자$/', "fix" => '없자'],
		/* 까 */
		(object)["pattern" => '/없을라$/', "fix" => '없어라'],
		/* 까 */
		(object)["pattern" => '/없을지 마$/', "fix" => '없지 마'],
		/* 야돼 */
		(object)["pattern" => '/없어자$/', "fix" => '없자'],
		/* 야돼 */
		(object)["pattern" => '/없어지 마$/', "fix" => '없지 마'],
		/* 야돼 */
		(object)["pattern" => '/없어지 말든지$/', "fix" => '없지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/없어면 안 되지$/', "fix" => '없으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/없어든지$/', "fix" => '없든지'],
		/* 냐 */
		(object)["pattern" => '/없$/', "fix" => '없어'],

		/* ..살다 */
		/* 까 */
		(object)["pattern" => '/살자$/', "fix" => '살자'],
		/* 까 */
		(object)["pattern" => '/살라$/', "fix" => '살아라'],
		/* 까 */
		(object)["pattern" => '/살지 마$/', "fix" => '살지 마'],
		/* 야돼 */
		(object)["pattern" => '/살아자$/', "fix" => '살자'],
		/* 야돼 */
		(object)["pattern" => '/살아지 마$/', "fix" => '살지 마'],
		/* 야돼 */
		(object)["pattern" => '/살아지 말든지$/', "fix" => '살지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/살아면 안 되지$/', "fix" => '살면 안 되지'],
		/* 도 */
		(object)["pattern" => '/살아든지$/', "fix" => '살든지'],
		/* 까 */
		(object)["pattern" => '/살$/', "fix" => '살아'],

		/* ..리다 */
		/* 냐 */
		(object)["pattern" => '/리라$/', "fix" => '려라'],
		/* 까 */
		(object)["pattern" => '/릴자$/', "fix" => '리자'],
		/* 까 */
		(object)["pattern" => '/릴라$/', "fix" => '려라'],
		/* 까 */
		(object)["pattern" => '/릴지 마$/', "fix" => '리지 마'],
		/* 야돼 */
		(object)["pattern" => '/려자$/', "fix" => '리자'],
		/* 야돼 */
		(object)["pattern" => '/려지 마$/', "fix" => '리지 마'],
		/* 야돼 */
		(object)["pattern" => '/려지 말든지$/', "fix" => '리지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/려면 안 되지$/', "fix" => '리면 안 되지'],
		/* 도 */
		(object)["pattern" => '/려든지$/', "fix" => '리든지'],
		/* 까 */
		(object)["pattern" => '/릴$/', "fix" => '려'],
		/* 냐 */
		(object)["pattern" => '/리$/', "fix" => '려'],

		/* ..죽다 */
		/* 냐 */
		(object)["pattern" => '/죽라$/', "fix" => '죽어라'],
		/* 까 */
		(object)["pattern" => '/죽을$/', "fix" => '죽어'],
		/* 까 */
		(object)["pattern" => '/죽을자$/', "fix" => '죽자'],
		/* 까 */
		(object)["pattern" => '/죽을라$/', "fix" => '죽어라'],
		/* 까 */
		(object)["pattern" => '/죽을지 마$/', "fix" => '죽지 마'],
		/* 야돼 */
		(object)["pattern" => '/죽어자$/', "fix" => '죽자'],
		/* 야돼 */
		(object)["pattern" => '/죽어지 마$/', "fix" => '죽지 마'],
		/* 야돼 */
		(object)["pattern" => '/죽어지 말든지$/', "fix" => '죽지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/죽어면 안 되지$/', "fix" => '죽으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/죽어든지$/', "fix" => '죽든지'],
		/* 냐 */
		(object)["pattern" => '/죽$/', "fix" => '죽어'],

		/* ..사다 */
		/* 냐 */
		(object)["pattern" => '/사우$/', "fix" => '사'],
		/* 냐 */
		(object)["pattern" => '/사우라$/', "fix" => '사라'],
		/* 까 */
		(object)["pattern" => '/살자$/', "fix" => '사자'],
		/* 까 */
		(object)["pattern" => '/살라$/', "fix" => '사라'],
		/* 까 */
		(object)["pattern" => '/살지 마$/', "fix" => '사지 마'],
		/* 까 */
		(object)["pattern" => '/살$/', "fix" => '사'],

		/* ..팔다 */
		/* 냐 */
		(object)["pattern" => '/파라$/', "fix" => '팔아라'],
		/* 까 */
		(object)["pattern" => '/팔라$/', "fix" => '팔아라'],
		/* 야돼 */
		(object)["pattern" => '/팔아자$/', "fix" => '팔자'],
		/* 야돼 */
		(object)["pattern" => '/팔아지 마$/', "fix" => '팔지 마'],
		/* 야돼 */
		(object)["pattern" => '/팔아지 말든지$/', "fix" => '팔지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/팔아면 안 되지$/', "fix" => '팔면 안 되지'],
		/* 도 */
		(object)["pattern" => '/팔아든지$/', "fix" => '팔든지'],
		/* 까 */
		(object)["pattern" => '/팔$/', "fix" => '팔아'],
		/* 냐 */
		(object)["pattern" => '/파$/', "fix" => '팔아'],

		/* ..보다 */
		/* 냐 */
		(object)["pattern" => '/보라$/', "fix" => '봐라'],
		/* 까 */
		(object)["pattern" => '/볼자$/', "fix" => '보자'],
		/* 까 */
		(object)["pattern" => '/볼라$/', "fix" => '봐라'],
		/* 까 */
		(object)["pattern" => '/볼지 마$/', "fix" => '보지 마'],
		/* 야돼 */
		(object)["pattern" => '/봐자$/', "fix" => '보자'],
		/* 야돼 */
		(object)["pattern" => '/봐지 마$/', "fix" => '보지 마'],
		/* 야돼 */
		(object)["pattern" => '/봐지 말든지$/', "fix" => '보지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/봐면 안 되지$/', "fix" => '보면 안 되지'],
		/* 도 */
		(object)["pattern" => '/봐든지$/', "fix" => '보든지'],
		/* 까 */
		(object)["pattern" => '/볼$/', "fix" => '봐'],
		/* 냐 */
		(object)["pattern" => '/보$/', "fix" => '봐'],

		/* ..듣다 */
		/* 냐 */
		(object)["pattern" => '/듣라$/', "fix" => '들어라'],
		/* 까 */
		(object)["pattern" => '/들을$/', "fix" => '들어'],
		/* 까 */
		(object)["pattern" => '/들을자$/', "fix" => '듣자'],
		/* 까 */
		(object)["pattern" => '/들을라$/', "fix" => '들어라'],
		/* 까 */
		(object)["pattern" => '/들을지 마$/', "fix" => '듣지 마'],
		/* 야돼 */
		(object)["pattern" => '/들어자$/', "fix" => '듣자'],
		/* 야돼 */
		(object)["pattern" => '/들어지 마$/', "fix" => '듣지 마'],
		/* 야돼 */
		(object)["pattern" => '/들어지 말든지$/', "fix" => '듣지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/들어면 안 되지$/', "fix" => '들으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/들어든지$/', "fix" => '듣든지'],
		/* 냐 */
		(object)["pattern" => '/듣$/', "fix" => '들어'],

		/* ..내다 */

		/* 냐 */
		(object)["pattern" => '/내라$/', "fix" => '내라'],
		/* 까 */
		(object)["pattern" => '/낼자$/', "fix" => '내자'],
		/* 까 */
		(object)["pattern" => '/낼라$/', "fix" => '내라'],
		/* 까 */
		(object)["pattern" => '/낼지 마$/', "fix" => '내지 마'],
		/* 냐 */
		(object)["pattern" => '/내$/', "fix" => '내'],
		/* 까 */
		(object)["pattern" => '/낼$/', "fix" => '내'],

		/* ..대다 */
		/* 냐 */
		(object)["pattern" => '/대라$/', "fix" => '대라'],
		/* 까 */
		(object)["pattern" => '/댈자$/', "fix" => '대자'],
		/* 까 */
		(object)["pattern" => '/댈라$/', "fix" => '대라'],
		/* 까 */
		(object)["pattern" => '/댈지 마$/', "fix" => '대지 마'],
		/* 냐 */
		(object)["pattern" => '/대$/', "fix" => '대'],
		/* 까 */
		(object)["pattern" => '/댈$/', "fix" => '대'],

		/* ..이르다 */
		/* 냐 */
		(object)["pattern" => '/이르라$/', "fix" => '일러라'],
		/* 까 */
		(object)["pattern" => '/이를$/', "fix" => '일러'],
		/* 까 */
		(object)["pattern" => '/이를자$/', "fix" => '이르자'],
		/* 까 */
		(object)["pattern" => '/이를라$/', "fix" => '일러라'],
		/* 까 */
		(object)["pattern" => '/이를지 마$/', "fix" => '이르지 마'],
		/* 냐 */
		(object)["pattern" => '/이르$/', "fix" => '일러'],
		/* 야돼 */
		(object)["pattern" => '/일러자$/', "fix" => '이르자'],
		/* 야돼 */
		(object)["pattern" => '/일러지 마$/', "fix" => '이르지 마'],
		/* 야돼 */
		(object)["pattern" => '/일러지 말든지$/', "fix" => '이르지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/일러면 안 되지$/', "fix" => '이르면 안 되지'],
		/* 도 */
		(object)["pattern" => '/일러든지$/', "fix" => '이르든지'],

		/* ..일르다 (비표준어) */
		/* 냐 */
		(object)["pattern" => '/일르라$/', "fix" => '일러라'],
		/* 까 */
		(object)["pattern" => '/일를$/', "fix" => '일러'],
		/* 까 */
		(object)["pattern" => '/일를자$/', "fix" => '이르자'],
		/* 까 */
		(object)["pattern" => '/일를라$/', "fix" => '일러라'],
		/* 까 */
		(object)["pattern" => '/일를지 마$/', "fix" => '이르지 마'],
		/* 냐 */
		(object)["pattern" => '/일르$/', "fix" => '일러'],

		/* ..치르다 */
		/* 냐 */
		(object)["pattern" => '/치르라$/', "fix" => '치러라'],
		/* 까 */
		(object)["pattern" => '/치를$/', "fix" => '치러'],
		/* 까 */
		(object)["pattern" => '/치를자$/', "fix" => '치르자'],
		/* 까 */
		(object)["pattern" => '/치를라$/', "fix" => '치러라'],
		/* 까 */
		(object)["pattern" => '/치를지 마$/', "fix" => '치르지 마'],
		/* 냐 */
		(object)["pattern" => '/치르$/', "fix" => '치러'],
		/* 야돼 */
		(object)["pattern" => '/치러자$/', "fix" => '치르자'],
		/* 야돼 */
		(object)["pattern" => '/치러지 마$/', "fix" => '치르지 마'],
		/* 야돼 */
		(object)["pattern" => '/치러지 말든지$/', "fix" => '치르지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/치러면 안 되지$/', "fix" => '치르면 안 되지'],
		/* 도 */
		(object)["pattern" => '/치러든지$/', "fix" => '치르든지'],

		/* ..부르다 */
		/* 냐 */
		(object)["pattern" => '/부르라$/', "fix" => '불러라'],
		/* 까 */
		(object)["pattern" => '/부를자$/', "fix" => '부르자'],
		/* 까 */
		(object)["pattern" => '/부를라$/', "fix" => '불러라'],
		/* 까 */
		(object)["pattern" => '/부를지 마$/', "fix" => '부르지 마'],
		/* 냐 */
		(object)["pattern" => '/부르$/', "fix" => '불러'],
		/* 까 */
		(object)["pattern" => '/부를$/', "fix" => '불러'],
		/* 야돼 */
		(object)["pattern" => '/불러자$/', "fix" => '부르자'],
		/* 야돼 */
		(object)["pattern" => '/불러지 마$/', "fix" => '부르지 마'],
		/* 야돼 */
		(object)["pattern" => '/불러지 말든지$/', "fix" => '부르지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/불러면 안 되지$/', "fix" => '부르면 안 되지'],
		/* 도 */
		(object)["pattern" => '/불러든지$/', "fix" => '부르든지'],

		/* ..구르다 */
		/* 냐 */
		(object)["pattern" => '/구르라$/', "fix" => '굴러라'],
		/* 까 */
		(object)["pattern" => '/구를자$/', "fix" => '구르자'],
		/* 까 */
		(object)["pattern" => '/구를라$/', "fix" => '굴러라'],
		/* 까 */
		(object)["pattern" => '/구를지 마$/', "fix" => '구르지 마'],
		/* 냐 */
		(object)["pattern" => '/구르$/', "fix" => '굴러'],
		/* 까 */
		(object)["pattern" => '/구를$/', "fix" => '굴러'],
		/* 야돼 */
		(object)["pattern" => '/굴러자$/', "fix" => '구르자'],
		/* 야돼 */
		(object)["pattern" => '/굴러지 마$/', "fix" => '구르지 마'],
		/* 야돼 */
		(object)["pattern" => '/굴러지 말든지$/', "fix" => '구르지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/굴러면 안 되지$/', "fix" => '구르면 안 되지'],
		/* 도 */
		(object)["pattern" => '/굴러든지$/', "fix" => '구르든지'],

		/* ..오르다 */
		/* 냐 */
		(object)["pattern" => '/오르라$/', "fix" => '올라라'],
		/* 까 */
		(object)["pattern" => '/오를자$/', "fix" => '오르자'],
		/* 까 */
		(object)["pattern" => '/오를라$/', "fix" => '올라라'],
		/* 까 */
		(object)["pattern" => '/오를지 마$/', "fix" => '오르지 마'],
		/* 냐 */
		(object)["pattern" => '/오르$/', "fix" => '올라'],
		/* 까 */
		(object)["pattern" => '/오를$/', "fix" => '올라'],
		/* 야돼 */
		(object)["pattern" => '/올라자$/', "fix" => '오르자'],
		/* 야돼 */
		(object)["pattern" => '/올라지 마$/', "fix" => '오르지 마'],
		/* 야돼 */
		(object)["pattern" => '/올라지 말든지$/', "fix" => '오르지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/올라면 안 되지$/', "fix" => '오르면 안 되지'],
		/* 도 */
		(object)["pattern" => '/올라든지$/', "fix" => '오르든지'],

		/* 머물다 */

		/* 냐 */
		(object)["pattern" => '/머무라$/', "fix" => '머물어라'],
		/* 까 */
		(object)["pattern" => '/머물자$/', "fix" => '머물자'],
		/* 까 */
		(object)["pattern" => '/머물라$/', "fix" => '머물어라'],
		/* 까 */
		(object)["pattern" => '/머물지 마$/', "fix" => '머물자'],
		/* 냐 */
		(object)["pattern" => '/머무$/', "fix" => '머물어'],
		/* 야돼 */
		(object)["pattern" => '/머물러지 마$/', "fix" => '머물지 마'],
		/* 야돼 */
		(object)["pattern" => '/머물러지 말든지$/', "fix" => '머물지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/머물러면 안 되지$/', "fix" => '머물면 안 되지'],
		/* 도 */
		(object)["pattern" => '/머물러든지$/', "fix" => '머물든지'],
		/* 까 */
		(object)["pattern" => '/머물$/', "fix" => '머물어'],

		/* 머무르다 */
		/* 냐 */
		(object)["pattern" => '/머무르라$/', "fix" => '머물러라'],
		/* 까 */
		(object)["pattern" => '/머무를$/', "fix" => '머물러'],
		/* 까 */
		(object)["pattern" => '/머무를자$/', "fix" => '머무르자'],
		/* 까 */
		(object)["pattern" => '/머무를라$/', "fix" => '머물러라'],
		/* 까 */
		(object)["pattern" => '/머무를지 마$/', "fix" => '머무르지 마'],
		/* 냐 */
		(object)["pattern" => '/머무르$/', "fix" => '머물러'],
		/* 야돼 */
		(object)["pattern" => '/머물러자$/', "fix" => '머무르자'],
		/* 야돼 */
		(object)["pattern" => '/머물러지 마$/', "fix" => '머무르지 마'],
		/* 야돼 */
		(object)["pattern" => '/머물러지 말든지$/', "fix" => '머무르지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/머물러면 안 되지$/', "fix" => '머무르면 안 되지'],
		/* 도 */
		(object)["pattern" => '/머물러든지$/', "fix" => '머무르든지'],

		/* 자르다 */

		/* 냐 */
		(object)["pattern" => '/자르라$/', "fix" => '잘라라'],
		/* 까 */
		(object)["pattern" => '/자를자$/', "fix" => '자르자'],
		/* 까 */
		(object)["pattern" => '/자를라$/', "fix" => '잘라라'],
		/* 까 */
		(object)["pattern" => '/자를지 마$/', "fix" => '자르지 마'],
		/* 냐 */
		(object)["pattern" => '/자르$/', "fix" => '잘라'],
		/* 까 */
		(object)["pattern" => '/자를$/', "fix" => '잘라'],
		/* 야돼 */
		(object)["pattern" => '/잘라자$/', "fix" => '자르자'],
		/* 야돼 */
		(object)["pattern" => '/잘라지 마$/', "fix" => '자르지 마'],
		/* 야돼 */
		(object)["pattern" => '/잘라지 말든지$/', "fix" => '자르지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/잘라면 안 되지$/', "fix" => '자르면 안 되지'],
		/* 도 */
		(object)["pattern" => '/잘라든지$/', "fix" => '자르든지'],

		/* 짜르다 */

		/* 냐 */
		(object)["pattern" => '/짜르라$/', "fix" => '짤라라'],
		/* 까 */
		(object)["pattern" => '/짜를자$/', "fix" => '짜르자'],
		/* 까 */
		(object)["pattern" => '/짜를라$/', "fix" => '짤라라'],
		/* 까 */
		(object)["pattern" => '/짜를지 마$/', "fix" => '짜르지 마'],
		/* 야돼 */
		(object)["pattern" => '/짤라자$/', "fix" => '짜르자'],
		/* 야돼 */
		(object)["pattern" => '/짤라지 마$/', "fix" => '짜르지 마'],
		/* 냐 */
		(object)["pattern" => '/짜르$/', "fix" => '짤라'],
		/* 까 */
		(object)["pattern" => '/짜를$/', "fix" => '짤라'],
		/* 야돼 */
		(object)["pattern" => '/짤라지 말든지$/', "fix" => '짜르지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/짤라면 안 되지$/', "fix" => '짜르면 안 되지'],
		/* 도 */
		(object)["pattern" => '/짤라든지$/', "fix" => '짜르든지'],

		/* 누르다 */

		/* 냐 */
		(object)["pattern" => '/누르라$/', "fix" => '눌러라'],
		/* 까 */
		(object)["pattern" => '/누를자$/', "fix" => '누르자'],
		/* 까 */
		(object)["pattern" => '/누를라$/', "fix" => '눌러라'],
		/* 까 */
		(object)["pattern" => '/누를지 마$/', "fix" => '누르지 마'],
		/* 냐 */
		(object)["pattern" => '/누르$/', "fix" => '눌러'],
		/* 까 */
		(object)["pattern" => '/누를$/', "fix" => '눌러'],
		/* 야돼 */
		(object)["pattern" => '/눌러자$/', "fix" => '누르자'],
		/* 야돼 */
		(object)["pattern" => '/눌러지 마$/', "fix" => '누르지 마'],
		/* 야돼 */
		(object)["pattern" => '/눌러지 말든지$/', "fix" => '누르지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/눌러면 안 되지$/', "fix" => '누르면 안 되지'],
		/* 도 */
		(object)["pattern" => '/눌러든지$/', "fix" => '누르든지'],

		/* 꺾다 */

		/* 냐 */
		(object)["pattern" => '/꺾라$/', "fix" => '꺾어라'],
		/* 까 */
		(object)["pattern" => '/꺾을$/', "fix" => '꺾어'],
		/* 까 */
		(object)["pattern" => '/꺾을자$/', "fix" => '꺾자'],
		/* 까 */
		(object)["pattern" => '/꺾을라$/', "fix" => '꺾어라'],
		/* 까 */
		(object)["pattern" => '/꺾을지 마$/', "fix" => '꺾지 마'],
		/* 야돼 */
		(object)["pattern" => '/꺾어자$/', "fix" => '꺾자'],
		/* 야돼 */
		(object)["pattern" => '/꺾어지 마$/', "fix" => '꺾지 마'],
		/* 야돼 */
		(object)["pattern" => '/꺾어지 말든지$/', "fix" => '꺾지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/꺾어면 안 되지$/', "fix" => '꺾으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/꺾어든지$/', "fix" => '꺾든지'],
		/* 냐 */
		(object)["pattern" => '/꺾$/', "fix" => '꺾어'],

		/* 달다 */
		/* 냐 */
		(object)["pattern" => '/다라$/', "fix" => '달아라'],
		/* 까 */
		(object)["pattern" => '/달자$/', "fix" => '달자'],
		/* 까 */
		(object)["pattern" => '/달라$/', "fix" => '달아라'],
		/* 야돼 */
		(object)["pattern" => '/달아자$/', "fix" => '달자'],
		/* 야돼 */
		(object)["pattern" => '/달아지 마$/', "fix" => '달지 마'],
		/* 야돼 */
		(object)["pattern" => '/달아지 말든지$/', "fix" => '달지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/달아면 안 되지$/', "fix" => '달면 안 되지'],
		/* 도 */
		(object)["pattern" => '/달아든지$/', "fix" => '달든지'],
		/* 까 */
		(object)["pattern" => '/달$/', "fix" => '달아'],
		/* 냐 */
		(object)["pattern" => '/다$/', "fix" => '달아'],

		/* 심다 */
		/* 냐 */
		(object)["pattern" => '/심라$/', "fix" => '심어라'],
		/* 까 */
		(object)["pattern" => '/심을$/', "fix" => '심어'],
		/* 까 */
		(object)["pattern" => '/심을자$/', "fix" => '심자'],
		/* 까 */
		(object)["pattern" => '/심을라$/', "fix" => '심어라'],
		/* 까 */
		(object)["pattern" => '/심을지 마$/', "fix" => '심지 마'],
		/* 야돼 */
		(object)["pattern" => '/심어자$/', "fix" => '심자'],
		/* 야돼 */
		(object)["pattern" => '/심어지 마$/', "fix" => '심지 마'],
		/* 야돼 */
		(object)["pattern" => '/심어지 말든지$/', "fix" => '심지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/심어면 안 되지$/', "fix" => '심으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/심어든지$/', "fix" => '심든지'],
		/* 냐 */
		(object)["pattern" => '/심$/', "fix" => '심어'],

		/* 입다 */
		/* 냐 */
		(object)["pattern" => '/입라$/', "fix" => '입어라'],
		/* 까 */
		(object)["pattern" => '/입을$/', "fix" => '입어'],
		/* 까 */
		(object)["pattern" => '/입을자$/', "fix" => '입자'],
		/* 까 */
		(object)["pattern" => '/입을라$/', "fix" => '입어라'],
		/* 까 */
		(object)["pattern" => '/입을지 마$/', "fix" => '입지 마'],
		/* 야돼 */
		(object)["pattern" => '/입어자$/', "fix" => '입자'],
		/* 야돼 */
		(object)["pattern" => '/입어지 마$/', "fix" => '입지 마'],
		/* 야돼 */
		(object)["pattern" => '/입어지 말든지$/', "fix" => '입지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/입어면 안 되지$/', "fix" => '입으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/입어든지$/', "fix" => '입든지'],
		/* 냐 */
		(object)["pattern" => '/입$/', "fix" => '입어'],

		/* ..치다 */
		/* 냐 */
		(object)["pattern" => '/치라$/', "fix" => '쳐라'],
		/* 까 */
		(object)["pattern" => '/칠자$/', "fix" => '치자'],
		/* 까 */
		(object)["pattern" => '/칠라$/', "fix" => '쳐라'],
		/* 까 */
		(object)["pattern" => '/칠지 마$/', "fix" => '치지 마'],
		/* 야돼 */
		(object)["pattern" => '/쳐자$/', "fix" => '치자'],
		/* 야돼 */
		(object)["pattern" => '/쳐지 마$/', "fix" => '치지 마'],
		/* 야돼 */
		(object)["pattern" => '/쳐지 말든지$/', "fix" => '치지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/쳐면 안 되지$/', "fix" => '치면 안 되지'],
		/* 도 */
		(object)["pattern" => '/쳐든지$/', "fix" => '치든지'],
		/* 까 */
		(object)["pattern" => '/칠$/', "fix" => '쳐'],
		/* 냐 */
		(object)["pattern" => '/치$/', "fix" => '쳐'],

		/* ..추다 */
		/* 냐 */
		(object)["pattern" => '/추라$/', "fix" => '춰라'],
		/* 까 */
		(object)["pattern" => '/출자$/', "fix" => '추자'],
		/* 까 */
		(object)["pattern" => '/출라$/', "fix" => '춰라'],
		/* 까 */
		(object)["pattern" => '/출지 마$/', "fix" => '추지 마'],
		/* 야돼 */
		(object)["pattern" => '/춰자$/', "fix" => '추자'],
		/* 야돼 */
		(object)["pattern" => '/춰지 마$/', "fix" => '추지 마'],
		/* 야돼 */
		(object)["pattern" => '/춰지 말든지$/', "fix" => '추지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/춰면 안 되지$/', "fix" => '추면 안 되지'],
		/* 도 */
		(object)["pattern" => '/춰든지$/', "fix" => '추든지'],
		/* 냐 */
		(object)["pattern" => '/추$/', "fix" => '춰'],
		/* 까 */
		(object)["pattern" => '/출$/', "fix" => '춰'],

		/* ..닫다 */
		/* 냐 */
		(object)["pattern" => '/닫라$/', "fix" => '닫아라'],
		/* 까 */
		(object)["pattern" => '/닫을$/', "fix" => '닫아'],
		/* 까 */
		(object)["pattern" => '/닫을자$/', "fix" => '닫자'],
		/* 까 */
		(object)["pattern" => '/닫을라$/', "fix" => '닫아라'],
		/* 까 */
		(object)["pattern" => '/닫을지 마$/', "fix" => '닫지 마'],
		/* 야돼 */
		(object)["pattern" => '/닫아자$/', "fix" => '닫자'],
		/* 야돼 */
		(object)["pattern" => '/닫아지 마$/', "fix" => '닫지 마'],
		/* 야돼 */
		(object)["pattern" => '/닫아지 말든지$/', "fix" => '닫지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/닫아면 안 되지$/', "fix" => '닫으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/닫아든지$/', "fix" => '닫든지'],
		/* 냐 */
		(object)["pattern" => '/닫$/', "fix" => '닫아'],

		/* ..담다 */
		/* 냐 */
		(object)["pattern" => '/담라$/', "fix" => '담아라'],
		/* 까 */
		(object)["pattern" => '/담을$/', "fix" => '담아'],
		/* 까 */
		(object)["pattern" => '/담을자$/', "fix" => '담자'],
		/* 까 */
		(object)["pattern" => '/담을라$/', "fix" => '담아라'],
		/* 까 */
		(object)["pattern" => '/담을지 마$/', "fix" => '담지 마'],
		/* 야돼 */
		(object)["pattern" => '/담아자$/', "fix" => '담자'],
		/* 야돼 */
		(object)["pattern" => '/담아지 마$/', "fix" => '담지 마'],
		/* 야돼 */
		(object)["pattern" => '/담아지 말든지$/', "fix" => '담지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/담아면 안 되지$/', "fix" => '담으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/담아든지$/', "fix" => '담든지'],
		/* 냐 */
		(object)["pattern" => '/담$/', "fix" => '담아'],

		/* ..그다 */
		/* 냐 */
		(object)["pattern" => '/그라$/', "fix" => '가라'],
		/* 까 */
		(object)["pattern" => '/글자$/', "fix" => '그자'],
		/* 까 */
		(object)["pattern" => '/글라$/', "fix" => '가라'],
		/* 까 */
		(object)["pattern" => '/글지 마$/', "fix" => '그지 마'],
		/* 야돼 */
		(object)["pattern" => '/가자$/', "fix" => '그자'],
		/* 야돼 */
		(object)["pattern" => '/가지 마$/', "fix" => '그지 마'],
		/* 야돼 */
		(object)["pattern" => '/가지 말든지$/', "fix" => '그지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/가면 안 되지$/', "fix" => '그면 안 되지'],
		/* 도 */
		(object)["pattern" => '/가든지$/', "fix" => '그든지'],
		/* 냐 */
		(object)["pattern" => '/그$/', "fix" => '가'],
		/* 까 */
		(object)["pattern" => '/글$/', "fix" => '가'],

		/* ..읽다 */
		/* 냐 */
		(object)["pattern" => '/읽라$/', "fix" => '읽어라'],
		/* 까 */
		(object)["pattern" => '/읽을$/', "fix" => '읽어'],
		/* 까 */
		(object)["pattern" => '/읽을자$/', "fix" => '읽자'],
		/* 까 */
		(object)["pattern" => '/읽을라$/', "fix" => '읽어라'],
		/* 까 */
		(object)["pattern" => '/읽을지 마$/', "fix" => '읽지 마'],
		/* 야돼 */
		(object)["pattern" => '/읽어자$/', "fix" => '읽자'],
		/* 야돼 */
		(object)["pattern" => '/읽어지 마$/', "fix" => '읽지 마'],
		/* 야돼 */
		(object)["pattern" => '/읽어지 말든지$/', "fix" => '읽지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/읽어면 안 되지$/', "fix" => '읽으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/읽어든지$/', "fix" => '읽든지'],
		/* 냐 */
		(object)["pattern" => '/읽$/', "fix" => '읽어'],
		/* ..졸다 */
		/* 냐 */
		(object)["pattern" => '/조라$/', "fix" => '졸아라'],
		/* 까 */
		(object)["pattern" => '/졸자$/', "fix" => '졸자'],
		/* 까 */
		(object)["pattern" => '/졸라$/', "fix" => '졸아라'],
		/* 야돼 */
		(object)["pattern" => '/졸아자$/', "fix" => '졸자'],
		/* 야돼 */
		(object)["pattern" => '/졸아지 마$/', "fix" => '졸지 마'],
		/* 야돼 */
		(object)["pattern" => '/졸아지 말든지$/', "fix" => '졸지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/졸아면 안 되지$/', "fix" => '졸면 안 되지'],
		/* 도 */
		(object)["pattern" => '/졸아든지$/', "fix" => '졸든지'],
		/* 냐 */
		(object)["pattern" => '/조$/', "fix" => '졸아'],
		/* 까 */
		(object)["pattern" => '/졸$/', "fix" => '졸아'],

		/* 건너다 */
		/* 냐 */
		(object)["pattern" => '/건너라$/', "fix" => '건너라'],
		/* 까 */
		(object)["pattern" => '/건널$/', "fix" => '건너'],
		/* 까 */
		(object)["pattern" => '/건널자$/', "fix" => '건너자'],
		/* 까 */
		(object)["pattern" => '/건널라$/', "fix" => '건너라'],
		/* 까 */
		(object)["pattern" => '/건널지 마$/', "fix" => '건너지 마'],
		/* 야돼 */
		(object)["pattern" => '/건너자$/', "fix" => '건너자'],
		/* 야돼 */
		(object)["pattern" => '/건너지 마$/', "fix" => '건너지 마'],
		/* 야돼 */
		(object)["pattern" => '/건너지 말든지$/', "fix" => '건너지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/건너면 안 되지$/', "fix" => '건너면 안 되지'],
		/* 도 */
		(object)["pattern" => '/건너든지$/', "fix" => '건너든지'],
		/* 냐 */
		(object)["pattern" => '/건너$/', "fix" => '건너'],

		/* ..렇다 */
		/* 냐 */
		(object)["pattern" => '/렇라$/', "fix" => '래라'],
		/* 까 */
		(object)["pattern" => '/럴자$/', "fix" => '러자'],
		/* 까 */
		(object)["pattern" => '/럴라$/', "fix" => '래라'],
		/* 까 */
		(object)["pattern" => '/럴지 마$/', "fix" => '러지 마'],
		/* 야돼 */
		(object)["pattern" => '/래자$/', "fix" => '러자'],
		/* 야돼 */
		(object)["pattern" => '/래지 마$/', "fix" => '러지 마'],
		/* 야돼 */
		(object)["pattern" => '/래지 말든지$/', "fix" => '러지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/래면 안 되지$/', "fix" => '러면 안 되지'],
		/* 도 */
		(object)["pattern" => '/래든지$/', "fix" => '러든지'],
		/* 냐 */
		(object)["pattern" => '/렇$/', "fix" => '래'],
		/* 까 */
		(object)["pattern" => '/럴$/', "fix" => '래'],

		/* 널다 */

		/* 냐 */
		(object)["pattern" => '/너라$/', "fix" => '널어라'],
		/* 까 */
		(object)["pattern" => '/널자$/', "fix" => '널자'],
		/* 까 */
		(object)["pattern" => '/널라$/', "fix" => '널어라'],
		/* 야돼 */
		(object)["pattern" => '/널어자$/', "fix" => '널자'],
		/* 야돼 */
		(object)["pattern" => '/널어지 마$/', "fix" => '널지 마'],
		/* 야돼 */
		(object)["pattern" => '/널어지 말든지$/', "fix" => '널지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/널어면 안 되지$/', "fix" => '널면 안 되지'],
		/* 도 */
		(object)["pattern" => '/널어든지$/', "fix" => '널든지'],
		/* 냐 */
		(object)["pattern" => '/너$/', "fix" => '널어'],
		/* 까 */
		(object)["pattern" => '/널$/', "fix" => '널어'],

		/* 묵다 */
		/* 냐 */
		(object)["pattern" => '/묵너라$/', "fix" => '묵어라'],
		/* 까 */
		(object)["pattern" => '/묵을자$/', "fix" => '묵어자'],
		/* 까 */
		(object)["pattern" => '/묵을라$/', "fix" => '묵어라'],
		/* 까 */
		(object)["pattern" => '/묵을지 마$/', "fix" => '묵지 마'],
		/* 야돼 */
		(object)["pattern" => '/묵어자$/', "fix" => '묵자'],
		/* 야돼 */
		(object)["pattern" => '/묵어지 마$/', "fix" => '묵지 마'],
		/* 야돼 */
		(object)["pattern" => '/묵어지 말든지$/', "fix" => '묵지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/묵어면 안 되지$/', "fix" => '묵으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/묵어든지$/', "fix" => '묵든지'],
		/* 냐 */
		(object)["pattern" => '/묵너$/', "fix" => '묵어'],
		/* 까 */
		(object)["pattern" => '/묵을$/', "fix" => '묵어'],

		/* ..찍다 */
		/* 냐 */
		(object)["pattern" => '/찍라$/', "fix" => '찍어라'],
		/* 까 */
		(object)["pattern" => '/찍을$/', "fix" => '찍어'],
		/* 까 */
		(object)["pattern" => '/찍을자$/', "fix" => '찍자'],
		/* 까 */
		(object)["pattern" => '/찍을라$/', "fix" => '찍어라'],
		/* 까 */
		(object)["pattern" => '/찍을지 마$/', "fix" => '찍지 마'],
		/* 야돼 */
		(object)["pattern" => '/찍어자$/', "fix" => '찍자'],
		/* 야돼 */
		(object)["pattern" => '/찍어지 마$/', "fix" => '찍지 마'],
		/* 야돼 */
		(object)["pattern" => '/찍어지 말든지$/', "fix" => '찍지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/찍어면 안 되지$/', "fix" => '찍으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/찍어든지$/', "fix" => '찍든지'],
		/* 냐 */
		(object)["pattern" => '/찍$/', "fix" => '찍어'],

		/* ..풀다 */
		/* 냐 */
		(object)["pattern" => '/푸라$/', "fix" => '풀어라'],
		/* 까 */
		(object)["pattern" => '/풀자$/', "fix" => '풀자'],
		/* 까 */
		(object)["pattern" => '/풀라$/', "fix" => '풀어라'],
		/* 야돼 */
		(object)["pattern" => '/풀어자$/', "fix" => '풀자'],
		/* 야돼 */
		(object)["pattern" => '/풀어지 마$/', "fix" => '풀지 마'],
		/* 야돼 */
		(object)["pattern" => '/풀어지 말든지$/', "fix" => '풀지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/풀어면 안 되지$/', "fix" => '풀면 안 되지'],
		/* 도 */
		(object)["pattern" => '/풀어든지$/', "fix" => '풀든지'],
		/* 냐 */
		(object)["pattern" => '/푸$/', "fix" => '풀어'],
		/* 까 */
		(object)["pattern" => '/풀$/', "fix" => '풀어'],

		/* ..묶다 */
		/* 냐 */
		(object)["pattern" => '/묶라$/', "fix" => '묶어라'],
		/* 까 */
		(object)["pattern" => '/묶을$/', "fix" => '묶어'],
		/* 까 */
		(object)["pattern" => '/묶을자$/', "fix" => '묶자'],
		/* 까 */
		(object)["pattern" => '/묶을라$/', "fix" => '묶어라'],
		/* 까 */
		(object)["pattern" => '/묶을지 마$/', "fix" => '묶지 마'],
		/* 야돼 */
		(object)["pattern" => '/묶어자$/', "fix" => '묶자'],
		/* 야돼 */
		(object)["pattern" => '/묶어지 마$/', "fix" => '묶지 마'],
		/* 야돼 */
		(object)["pattern" => '/묶어지 말든지$/', "fix" => '묶지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/묶어면 안 되지$/', "fix" => '묶으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/묶어든지$/', "fix" => '묶든지'],
		/* 냐 */
		(object)["pattern" => '/묶$/', "fix" => '묶어'],

		/* ..쓰다 */
		/* 냐 */
		(object)["pattern" => '/쓰라$/', "fix" => '써라'],
		/* 까 */
		(object)["pattern" => '/쓸자$/', "fix" => '쓰자'],
		/* 까 */
		(object)["pattern" => '/쓸라$/', "fix" => '써라'],
		/* 까 */
		(object)["pattern" => '/쓸지 마$/', "fix" => '쓰지 마'],
		/* 야돼 */
		(object)["pattern" => '/써자$/', "fix" => '쓰자'],
		/* 야돼 */
		(object)["pattern" => '/써지 마$/', "fix" => '쓰지 마'],
		/* 야돼 */
		(object)["pattern" => '/써지 말든지$/', "fix" => '쓰지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/써면 안 되지$/', "fix" => '쓰면 안 되지'],
		/* 도 */
		(object)["pattern" => '/써든지$/', "fix" => '쓰든지'],
		/* 냐 */
		(object)["pattern" => '/쓰$/', "fix" => '써'],
		/* 까 */
		(object)["pattern" => '/쓸$/', "fix" => '써'],

		/* ..싸다 */
		/* 까 */
		(object)["pattern" => '/쌀자$/', "fix" => '싸자'],
		/* 까 */
		(object)["pattern" => '/쌀라$/', "fix" => '싸라'],
		/* 까 */
		(object)["pattern" => '/쌀지 마$/', "fix" => '싸지 마'],
		/* 까 */
		(object)["pattern" => '/쌀$/', "fix" => '싸'],

		/* ..맞다 */
		/* 냐 */
		(object)["pattern" => '/맞라$/', "fix" => '맞아라'],
		/* 까 */
		(object)["pattern" => '/맞을$/', "fix" => '맞아'],
		/* 까 */
		(object)["pattern" => '/맞을자$/', "fix" => '맞자'],
		/* 까 */
		(object)["pattern" => '/맞을라$/', "fix" => '맞아라'],
		/* 까 */
		(object)["pattern" => '/맞을지 마$/', "fix" => '맞지 마'],
		/* 야돼 */
		(object)["pattern" => '/맞아자$/', "fix" => '맞자'],
		/* 야돼 */
		(object)["pattern" => '/맞아지 마$/', "fix" => '맞지 마'],
		/* 야돼 */
		(object)["pattern" => '/맞아지 말든지$/', "fix" => '맞지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/맞아면 안 되지$/', "fix" => '맞으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/맞아든지$/', "fix" => '맞든지'],
		/* 냐 */
		(object)["pattern" => '/맞$/', "fix" => '맞아'],

		/* ..기다 */
		/* 냐 */
		(object)["pattern" => '/기라$/', "fix" => '겨라'],
		/* 까 */
		(object)["pattern" => '/길자$/', "fix" => '기자'],
		/* 까 */
		(object)["pattern" => '/길라$/', "fix" => '겨라'],
		/* 까 */
		(object)["pattern" => '/길지 마$/', "fix" => '기지 마'],
		/* 야돼 */
		(object)["pattern" => '/겨자$/', "fix" => '기자'],
		/* 야돼 */
		(object)["pattern" => '/겨지 마$/', "fix" => '기지 마'],
		/* 야돼 */
		(object)["pattern" => '/겨지 말든지$/', "fix" => '기지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/겨면 안 되지$/', "fix" => '기면 안 되지'],
		/* 도 */
		(object)["pattern" => '/겨든지$/', "fix" => '기든지'],
		/* 냐 */
		(object)["pattern" => '/기$/', "fix" => '겨'],
		/* 까 */
		(object)["pattern" => '/길$/', "fix" => '겨'],

		/* ..지다 */
		/* 냐 */
		(object)["pattern" => '/지라$/', "fix" => '져라'],
		/* 까 */
		(object)["pattern" => '/질자$/', "fix" => '지자'],
		/* 까 */
		(object)["pattern" => '/질라$/', "fix" => '져라'],
		/* 까 */
		(object)["pattern" => '/질지 마$/', "fix" => '지지 마'],
		/* 야돼 */
		(object)["pattern" => '/져자$/', "fix" => '지자'],
		/* 야돼 */
		(object)["pattern" => '/져지 마$/', "fix" => '지지 마'],
		/* 야돼 */
		(object)["pattern" => '/져지 말든지$/', "fix" => '지지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/져면 안 되지$/', "fix" => '지면 안 되지'],
		/* 도 */
		(object)["pattern" => '/져든지$/', "fix" => '지든지'],
		/* 냐 */
		(object)["pattern" => '/지$/', "fix" => '져'],
		/* 까 */
		(object)["pattern" => '/질$/', "fix" => '져'],

		/* ..시다 */
		/* 냐 */
		(object)["pattern" => '/시라$/', "fix" => '셔라'],
		/* 까 */
		(object)["pattern" => '/실자$/', "fix" => '시자'],
		/* 까 */
		(object)["pattern" => '/실라$/', "fix" => '셔라'],
		/* 까 */
		(object)["pattern" => '/실지 마$/', "fix" => '시지 마'],
		/* 야돼 */
		(object)["pattern" => '/셔자$/', "fix" => '시자'],
		/* 야돼 */
		(object)["pattern" => '/셔지 마$/', "fix" => '시지 마'],
		/* 야돼 */
		(object)["pattern" => '/셔지 말든지$/', "fix" => '시지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/셔면 안 되지$/', "fix" => '시면 안 되지'],
		/* 도 */
		(object)["pattern" => '/셔든지$/', "fix" => '시든지'],
		/* 냐 */
		(object)["pattern" => '/시$/', "fix" => '셔'],
		/* 까 */
		(object)["pattern" => '/실$/', "fix" => '셔'],

		/* ..수다 */
		/* 냐 */
		(object)["pattern" => '/수라$/', "fix" => '숴라'],
		/* 까 */
		(object)["pattern" => '/술자$/', "fix" => '수자'],
		/* 까 */
		(object)["pattern" => '/술라$/', "fix" => '숴라'],
		/* 까 */
		(object)["pattern" => '/술지 마$/', "fix" => '수지 마'],
		/* 야돼 */
		(object)["pattern" => '/숴자$/', "fix" => '수자'],
		/* 야돼 */
		(object)["pattern" => '/숴지 마$/', "fix" => '수지 마'],
		/* 야돼 */
		(object)["pattern" => '/숴지 말든지$/', "fix" => '수지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/숴면 안 되지$/', "fix" => '수면 안 되지'],
		/* 도 */
		(object)["pattern" => '/숴든지$/', "fix" => '수든지'],
		/* 냐 */
		(object)["pattern" => '/수$/', "fix" => '숴'],
		/* 까 */
		(object)["pattern" => '/술$/', "fix" => '숴'],

		/* ..들다 */
		/* 냐 */
		(object)["pattern" => '/드라$/', "fix" => '들어라'],
		/* 까 */
		(object)["pattern" => '/들자$/', "fix" => '들자'],
		/* 까 */
		(object)["pattern" => '/들라$/', "fix" => '들어라'],
		/* 까 */
		(object)["pattern" => '/들지 마$/', "fix" => '들지 마'],
		/* 야돼 */
		(object)["pattern" => '/들어자$/', "fix" => '들자'],
		/* 야돼 */
		(object)["pattern" => '/들어지 마$/', "fix" => '들지 마'],
		/* 야돼 */
		(object)["pattern" => '/들어지 말든지$/', "fix" => '들지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/들어면 안 되지$/', "fix" => '들면 안 되지'],
		/* 도 */
		(object)["pattern" => '/들어든지$/', "fix" => '들든지'],
		/* 냐 */
		(object)["pattern" => '/드$/', "fix" => '들어'],
		/* 까 */
		(object)["pattern" => '/들$/', "fix" => '들어'],

		/* ..나다 */
		/* 까 */
		(object)["pattern" => '/날자$/', "fix" => '나자'],
		/* 까 */
		(object)["pattern" => '/날라$/', "fix" => '나라'],
		/* 까 */
		(object)["pattern" => '/날지 마$/', "fix" => '나지 마'],
		/* 까 */
		(object)["pattern" => '/날$/', "fix" => '나'],

		/* ..오다 */

		/* 냐 */
		(object)["pattern" => '/오라$/', "fix" => '와라'],
		/* 까 */
		(object)["pattern" => '/올자$/', "fix" => '오자'],
		/* 까 */
		(object)["pattern" => '/올라$/', "fix" => '와라'],
		/* 까 */
		(object)["pattern" => '/올지 마$/', "fix" => '오지 마'],
		/* 야돼 */
		(object)["pattern" => '/와자$/', "fix" => '오자'],
		/* 야돼 */
		(object)["pattern" => '/와지 마$/', "fix" => '오지 마'],
		/* 야돼 */
		(object)["pattern" => '/와지 말든지$/', "fix" => '오지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/와면 안 되지$/', "fix" => '오면 안 되지'],
		/* 도 */
		(object)["pattern" => '/와든지$/', "fix" => '오든지'],
		/* 냐 */
		(object)["pattern" => '/오$/', "fix" => '와'],
		/* 까 */
		(object)["pattern" => '/올$/', "fix" => '와'],

		/* ..히다 */
		/* 냐 */
		(object)["pattern" => '/히라$/', "fix" => '혀라'],
		/* 까 */
		(object)["pattern" => '/힐자$/', "fix" => '히자'],
		/* 까 */
		(object)["pattern" => '/힐라$/', "fix" => '혀라'],
		/* 까 */
		(object)["pattern" => '/힐지 마$/', "fix" => '히지 마'],
		/* 야돼 */
		(object)["pattern" => '/혀자$/', "fix" => '히자'],
		/* 야돼 */
		(object)["pattern" => '/혀지 마$/', "fix" => '히지 마'],
		/* 야돼 */
		(object)["pattern" => '/혀지 말든지$/', "fix" => '히지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/혀면 안 되지$/', "fix" => '히면 안 되지'],
		/* 도 */
		(object)["pattern" => '/혀든지$/', "fix" => '히든지'],
		/* 냐 */
		(object)["pattern" => '/히$/', "fix" => '혀'],
		/* 까 */
		(object)["pattern" => '/힐$/', "fix" => '혀'],

		/* ..키다 */
		/* 냐 */
		(object)["pattern" => '/키라$/', "fix" => '켜라'],
		/* 까 */
		(object)["pattern" => '/킬자$/', "fix" => '키자'],
		/* 까 */
		(object)["pattern" => '/킬라$/', "fix" => '켜라'],
		/* 까 */
		(object)["pattern" => '/킬지 마$/', "fix" => '키지 마'],
		/* 야돼 */
		(object)["pattern" => '/켜자$/', "fix" => '키자'],
		/* 야돼 */
		(object)["pattern" => '/켜지 마$/', "fix" => '키지 마'],
		/* 야돼 */
		(object)["pattern" => '/켜지 말든지$/', "fix" => '키지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/켜면 안 되지$/', "fix" => '키면 안 되지'],
		/* 도 */
		(object)["pattern" => '/켜든지$/', "fix" => '키든지'],
		/* 냐 */
		(object)["pattern" => '/키$/', "fix" => '켜'],
		/* 까 */
		(object)["pattern" => '/킬$/', "fix" => '켜'],

		/* ..빌다 */
		/* 냐 */
		(object)["pattern" => '/비라$/', "fix" => '빌어라'],
		/* 까 */
		(object)["pattern" => '/빌자$/', "fix" => '빌자'],
		/* 까 */
		(object)["pattern" => '/빌라$/', "fix" => '빌어라'],
		/* 야돼 */
		(object)["pattern" => '/빌어자$/', "fix" => '빌자'],
		/* 야돼 */
		(object)["pattern" => '/빌어지 마$/', "fix" => '빌지 마'],
		/* 야돼 */
		(object)["pattern" => '/빌어지 말든지$/', "fix" => '빌지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/빌어면 안 되지$/', "fix" => '빌면 안 되지'],
		/* 도 */
		(object)["pattern" => '/빌어든지$/', "fix" => '빌든지'],
		/* 냐 */
		(object)["pattern" => '/비$/', "fix" => '빌어'],
		/* 까 */
		(object)["pattern" => '/빌$/', "fix" => '빌어'],

		/* ..찌다 */
		/* 냐 */
		(object)["pattern" => '/찌라$/', "fix" => '쪄라'],
		/* 까 */
		(object)["pattern" => '/찔자$/', "fix" => '찌자'],
		/* 까 */
		(object)["pattern" => '/찔라$/', "fix" => '쪄라'],
		/* 까 */
		(object)["pattern" => '/찔지 마$/', "fix" => '찌지 마'],
		/* 야돼 */
		(object)["pattern" => '/쪄자$/', "fix" => '찌자'],
		/* 야돼 */
		(object)["pattern" => '/쪄지 마$/', "fix" => '찌지 마'],
		/* 야돼 */
		(object)["pattern" => '/쪄지 말든지$/', "fix" => '찌지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/쪄면 안 되지$/', "fix" => '찌면 안 되지'],
		/* 도 */
		(object)["pattern" => '/쪄든지$/', "fix" => '찌든지'],
		/* 냐 */
		(object)["pattern" => '/찌$/', "fix" => '쪄'],
		/* 까 */
		(object)["pattern" => '/찔$/', "fix" => '쪄'],

		/* ..차다 */
		/* 까 */
		(object)["pattern" => '/찰자$/', "fix" => '차자'],
		/* 까 */
		(object)["pattern" => '/찰라$/', "fix" => '차라'],
		/* 까 */
		(object)["pattern" => '/찰지 마$/', "fix" => '차지 마'],
		/* 까 */
		(object)["pattern" => '/찰$/', "fix" => '차'],

		/* ..쉬다 */
		/* 냐 */
		(object)["pattern" => '/쉬라$/', "fix" => '쉬어라'],
		/* 까 */
		(object)["pattern" => '/쉴자$/', "fix" => '쉬자'],
		/* 까 */
		(object)["pattern" => '/쉴라$/', "fix" => '쉬어라'],
		/* 까 */
		(object)["pattern" => '/쉴지 마$/', "fix" => '쉬지 마'],
		/* 야돼 */
		(object)["pattern" => '/쥐어자$/', "fix" => '쉬자'],
		/* 야돼 */
		(object)["pattern" => '/쥐어지 마$/', "fix" => '쉬지 마'],
		/* 야돼 */
		(object)["pattern" => '/쥐어지 말든지$/', "fix" => '쉬지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/쥐어면 안 되지$/', "fix" => '쉬면 안 되지'],
		/* 도 */
		(object)["pattern" => '/쥐어든지$/', "fix" => '쉬든지'],
		/* 냐 */
		(object)["pattern" => '/쉬$/', "fix" => '쉬어'],
		/* 까 */
		(object)["pattern" => '/쉴$/', "fix" => '쉬어'],

		/* ..빼다 */
		/* 까 */
		(object)["pattern" => '/뺄자$/', "fix" => '빼자'],
		/* 까 */
		(object)["pattern" => '/뺄라$/', "fix" => '빼라'],
		/* 까 */
		(object)["pattern" => '/뺄지 마$/', "fix" => '빼지 마'],
		/* 까 */
		(object)["pattern" => '/뺄$/', "fix" => '빼'],

		/* ..누다 */
		/* 냐 */
		(object)["pattern" => '/누라$/', "fix" => '눠라'],
		/* 까 */
		(object)["pattern" => '/눌자$/', "fix" => '누자'],
		/* 까 */
		(object)["pattern" => '/눌라$/', "fix" => '눠라'],
		/* 까 */
		(object)["pattern" => '/눌지 마$/', "fix" => '누지 마'],
		/* 야돼 */
		(object)["pattern" => '/눠자$/', "fix" => '누자'],
		/* 야돼 */
		(object)["pattern" => '/눠지 마$/', "fix" => '누지 마'],
		/* 야돼 */
		(object)["pattern" => '/눠지 말든지$/', "fix" => '누지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/눠면 안 되지$/', "fix" => '누면 안 되지'],
		/* 도 */
		(object)["pattern" => '/눠든지$/', "fix" => '누든지'],
		/* 냐 */
		(object)["pattern" => '/누$/', "fix" => '눠'],
		/* 까 */
		(object)["pattern" => '/눌$/', "fix" => '눠'],

		/* ..으다 */
		/* 냐 */
		(object)["pattern" => '/으라$/', "fix" => '아라'],
		/* 까 */
		(object)["pattern" => '/을자$/', "fix" => '으자'],
		/* 까 */
		(object)["pattern" => '/을라$/', "fix" => '아라'],
		/* 까 */
		(object)["pattern" => '/을지 마$/', "fix" => '으지 마'],
		/* 야돼 */
		(object)["pattern" => '/아자$/', "fix" => '으자'],
		/* 야돼 */
		(object)["pattern" => '/아지 마$/', "fix" => '으지 마'],
		/* 야돼 */
		(object)["pattern" => '/아지 말든지$/', "fix" => '으지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/아면 안 되지$/', "fix" => '으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/아든지$/', "fix" => '으든지'],
		/* 냐 */
		(object)["pattern" => '/으$/', "fix" => '아'],
		/* 까 */
		(object)["pattern" => '/을$/', "fix" => '아'],

		/* ..넣다 */
		/* 냐 */
		(object)["pattern" => '/넣라$/', "fix" => '넣어라'],
		/* 까 */
		(object)["pattern" => '/넣을$/', "fix" => '넣어'],
		/* 까 */
		(object)["pattern" => '/넣을자$/', "fix" => '넣자'],
		/* 까 */
		(object)["pattern" => '/넣을라$/', "fix" => '넣어라'],
		/* 까 */
		(object)["pattern" => '/넣을지 마$/', "fix" => '넣지 마'],
		/* 야돼 */
		(object)["pattern" => '/넣어자$/', "fix" => '넣자'],
		/* 야돼 */
		(object)["pattern" => '/넣어지 마$/', "fix" => '넣지 마'],
		/* 야돼 */
		(object)["pattern" => '/넣어지 말든지$/', "fix" => '넣지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/넣어면 안 되지$/', "fix" => '넣으면 안 되지'],
		/* 도 */
		(object)["pattern" => '/넣어든지$/', "fix" => '넣든지'],
		/* 냐 */
		(object)["pattern" => '/넣$/', "fix" => '넣어'],

		/* ..눕다 */
		/* 냐 */
		(object)["pattern" => '/눕라$/', "fix" => '누워라'],
		/* 까 */
		(object)["pattern" => '/누울$/', "fix" => '누워'],
		/* 까 */
		(object)["pattern" => '/누울자$/', "fix" => '눕자'],
		/* 까 */
		(object)["pattern" => '/누울라$/', "fix" => '누워라'],
		/* 까 */
		(object)["pattern" => '/누울지 마$/', "fix" => '눕지 마'],
		/* 야돼 */
		(object)["pattern" => '/누워자$/', "fix" => '눕자'],
		/* 야돼 */
		(object)["pattern" => '/누워지 마$/', "fix" => '눕지 마'],
		/* 야돼 */
		(object)["pattern" => '/누워지 말든지$/', "fix" => '눕지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/누워면 안 되지$/', "fix" => '누우면 안 되지'],
		/* 도 */
		(object)["pattern" => '/누워든지$/', "fix" => '눕든지'],
		/* 냐 */
		(object)["pattern" => '/눕$/', "fix" => '누워'],

		/* ..피다 */
		/* 냐 */
		(object)["pattern" => '/피라$/', "fix" => '펴라'],
		/* 까 */
		(object)["pattern" => '/피울$/', "fix" => '펴'],
		/* 까 */
		(object)["pattern" => '/피울자$/', "fix" => '피자'],
		/* 까 */
		(object)["pattern" => '/피울라$/', "fix" => '펴라'],
		/* 까 */
		(object)["pattern" => '/피울지 마$/', "fix" => '피지 마'],
		/* 야돼 */
		(object)["pattern" => '/피워자$/', "fix" => '피자'],
		/* 야돼 */
		(object)["pattern" => '/피워지 마$/', "fix" => '피지 마'],
		/* 야돼 */
		(object)["pattern" => '/피워지 말든지$/', "fix" => '피지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/피워면 안 되지$/', "fix" => '피면 안 되지'],
		/* 도 */
		(object)["pattern" => '/피워든지$/', "fix" => '피든지'],
		/* 냐 */
		(object)["pattern" => '/피$/', "fix" => '펴'],

		/* ..끄다 */
		/* 냐 */
		(object)["pattern" => '/끄라$/', "fix" => '꺼라'],
		/* 까 */
		(object)["pattern" => '/끌자$/', "fix" => '끄자'],
		/* 까 */
		(object)["pattern" => '/끌라$/', "fix" => '꺼라'],
		/* 까 */
		(object)["pattern" => '/끌지 마$/', "fix" => '끄지 마'],
		/* 야돼 */
		(object)["pattern" => '/꺼자$/', "fix" => '끄자'],
		/* 야돼 */
		(object)["pattern" => '/꺼지 마$/', "fix" => '끄지 마'],
		/* 야돼 */
		(object)["pattern" => '/꺼지 말든지$/', "fix" => '끄지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/꺼면 안 되지$/', "fix" => '끄면 안 되지'],
		/* 도 */
		(object)["pattern" => '/꺼든지$/', "fix" => '끄든지'],
		/* 냐 */
		(object)["pattern" => '/끄$/', "fix" => '꺼'],
		/* 까 */
		(object)["pattern" => '/끌$/', "fix" => '꺼'],

		/* ..애다 */
		/* 냐 */
		(object)["pattern" => '/애라$/', "fix" => '애라'],
		/* 까 */
		(object)["pattern" => '/앨자$/', "fix" => '애자'],
		/* 까 */
		(object)["pattern" => '/앨라$/', "fix" => '애라'],
		/* 까 */
		(object)["pattern" => '/앨지 마$/', "fix" => '애지 마'],
		/* 냐 */
		(object)["pattern" => '/애$/', "fix" => '애'],
		/* 까 */
		(object)["pattern" => '/앨$/', "fix" => '애'],

		/* ..매다 */
		/* 냐 */
		(object)["pattern" => '/매라$/', "fix" => '매라'],
		/* 까 */
		(object)["pattern" => '/맬자$/', "fix" => '매자'],
		/* 까 */
		(object)["pattern" => '/맬라$/', "fix" => '매라'],
		/* 까 */
		(object)["pattern" => '/맬지 마$/', "fix" => '매지 마'],
		/* 냐 */
		(object)["pattern" => '/매$/', "fix" => '매'],
		/* 까 */
		(object)["pattern" => '/맬$/', "fix" => '매'],

		/* ..캐다 */
		/* 냐 */
		(object)["pattern" => '/캐라$/', "fix" => '캐라'],
		/* 까 */
		(object)["pattern" => '/캘자$/', "fix" => '캐자'],
		/* 까 */
		(object)["pattern" => '/캘라$/', "fix" => '캐라'],
		/* 까 */
		(object)["pattern" => '/캘지 마$/', "fix" => '캐지 마'],
		/* 냐 */
		(object)["pattern" => '/캐$/', "fix" => '캐'],
		/* 까 */
		(object)["pattern" => '/캘$/', "fix" => '캐'],

		/* ..메다 */
		/* 냐 */
		(object)["pattern" => '/메라$/', "fix" => '메라'],
		/* 까 */
		(object)["pattern" => '/멜자$/', "fix" => '메자'],
		/* 까 */
		(object)["pattern" => '/멜라$/', "fix" => '메라'],
		/* 까 */
		(object)["pattern" => '/멜지 마$/', "fix" => '메지 마'],
		/* 냐 */
		(object)["pattern" => '/메$/', "fix" => '메'],
		/* 까 */
		(object)["pattern" => '/멜$/', "fix" => '메'],

		/* ..베다 */
		/* 냐 */
		(object)["pattern" => '/베라$/', "fix" => '베라'],
		/* 까 */
		(object)["pattern" => '/벨자$/', "fix" => '베자'],
		/* 까 */
		(object)["pattern" => '/벨라$/', "fix" => '베라'],
		/* 까 */
		(object)["pattern" => '/벨지 마$/', "fix" => '베지 마'],
		/* 냐 */
		(object)["pattern" => '/베$/', "fix" => '베'],
		/* 까 */
		(object)["pattern" => '/벨$/', "fix" => '베'],

		/* ..열다 */
		/* 냐 */
		(object)["pattern" => '/여라$/', "fix" => '열어라'],
		/* 까 */
		(object)["pattern" => '/열자$/', "fix" => '열자'],
		/* 까 */
		(object)["pattern" => '/열라$/', "fix" => '열어라'],
		/* 야돼 */
		(object)["pattern" => '/열어자$/', "fix" => '열자'],
		/* 야돼 */
		(object)["pattern" => '/열어지 마$/', "fix" => '열지 마'],
		/* 야돼 */
		(object)["pattern" => '/열어지 말든지$/', "fix" => '열지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/열어면 안 되지$/', "fix" => '열면 안 되지'],
		/* 도 */
		(object)["pattern" => '/열어든지$/', "fix" => '열든지'],
		/* 냐 */
		(object)["pattern" => '/여$/', "fix" => '열어'],
		/* 까 */
		(object)["pattern" => '/열$/', "fix" => '열어'],

		/* ..켜다 */
		/* 냐 */
		(object)["pattern" => '/켜라$/', "fix" => '켜라'],
		/* 까 */
		(object)["pattern" => '/켤자$/', "fix" => '켜자'],
		/* 까 */
		(object)["pattern" => '/켤라$/', "fix" => '켜라'],
		/* 까 */
		(object)["pattern" => '/켤지 마$/', "fix" => '켜지 마'],
		/* 냐 */
		(object)["pattern" => '/켜$/', "fix" => '켜'],
		/* 까 */
		(object)["pattern" => '/켤$/', "fix" => '켜'],

		/* ..꾸다 */
		/* 냐 */
		(object)["pattern" => '/꾸라$/', "fix" => '꿔라'],
		/* 까 */
		(object)["pattern" => '/꿀자$/', "fix" => '꾸자'],
		/* 까 */
		(object)["pattern" => '/꿀라$/', "fix" => '꿔라'],
		/* 까 */
		(object)["pattern" => '/꿀지 마$/', "fix" => '꾸지 마'],
		/* 야돼 */
		(object)["pattern" => '/꿔자$/', "fix" => '꾸자'],
		/* 야돼 */
		(object)["pattern" => '/꿔지 마$/', "fix" => '꾸지 마'],
		/* 야돼 */
		(object)["pattern" => '/꿔지 말든지$/', "fix" => '꾸지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/꿔면 안 되지$/', "fix" => '꾸면 안 되지'],
		/* 도 */
		(object)["pattern" => '/꿔든지$/', "fix" => '꾸든지'],
		/* 냐 */
		(object)["pattern" => '/꾸$/', "fix" => '꿔'],
		/* 까 */
		(object)["pattern" => '/꿀$/', "fix" => '꿔'],

		/* ..말다 */
		/* 냐 */
		(object)["pattern" => '/마라$/', "fix" => '말아라'],
		/* 까 */
		(object)["pattern" => '/말라$/', "fix" => '말아라'],
		/* 야돼 */
		(object)["pattern" => '/말아자$/', "fix" => '말자'],
		/* 야돼 */
		(object)["pattern" => '/말아지 마$/', "fix" => '말지 마'],
		/* 야돼 */
		(object)["pattern" => '/말아지 말든지$/', "fix" => '말지 말든지'],
		/* 야겠지 */
		(object)["pattern" => '/말아면 안 되지$/', "fix" => '말면 안 되지'],
		/* 도 */
		(object)["pattern" => '/말아든지$/', "fix" => '말든지'],
		/* 냐 */
		(object)["pattern" => '/마$/', "fix" => '말아'],
		/* 까 */
		(object)["pattern" => '/말$/', "fix" => '말아'],
	];

	$token = "xoxb-...";
