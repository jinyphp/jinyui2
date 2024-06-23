<?php

return [
    'urls'=>[
        'home' => "/", // 로그인호 홈으로 이동
        'logout_back' => "/" // 로그아웃후 이동되는 경로
    ],
    'views'=>[
        'login'=> "jinyauth::login",
        'regist'=>"jinyauth::register",
        'password'=>"jinyauth::forgot-password"
    ]
];
