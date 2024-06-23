<?php
return [
	'updated_at'=>"2024-04-01 16:26:52",
	'description'=>"\\u3147\\u313b\\u3134\\u3147\\u313b\\u3134\\u3139",
	'auth'=>[
		'enable'=>"1",
		'auto'=>"1"
	],
	'register'=>"1",
	'agreement'=>"1",
	'view'=>[
		'register'=>"jinyauth::register",
		'agreement'=>"jinyauth::agreement",
		'forget'=>"jinyauth::password.forget"
	],
	'login'=>[
		'enable'=>"1"
	],
	'view_login'=>"",
	'view_regist'=>"",
	'logout'=>"/",
	'dashboard'=>"/",
	'remember'=>"1",
	'password_period'=>"3",
	'password'=>"1",
	'home'=>"/",
	'agree'=>[
		'enable'=>""
	],
	'success'=>[
		'enable'=>"1"
	],
	'regist'=>[
		'enable'=>"1",
		'mail'=>"1",
		'verified'=>"1"
    ],
    'verified' => [
        'view' => "jinyauth::verified.verified"
    ]
];
