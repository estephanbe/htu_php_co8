<?php
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST']);

define('LESSONS', [
    [
        'name' => "PHP Syntax",
        'description' => "This lesson contains PHP syntax and how we can use PHP through out the entir course.",
        'link' => BASE_URL . '/php_syntax/php_syntax.php'
    ],
    [
        'name' => "PHP Forms",
        'description' => "How to deal with forms using PHP",
        'link' => BASE_URL . '/php_forms/'
    ],
    [
        'name' => "HTU Courses",
        'description' => "Bulding a website using PHP. Note: this website is not connected to the DB yet.",
        'link' => BASE_URL . '/htu_courses/'
    ]
]);

define('USERS', Array(
    [
        'name' => 'khalid',
        'username' => 'khalid19',
        'email' => 'khalid@htu.com',
        'password' => '123456'
    ],
    [
        'name' => 'ahmad',
        'username' => 'ahmad19',
        'email' => 'ahmad@htu.com',
        'password' => '123456'
    ],
    [
        'name' => 'suhaib',
        'username' => 'suhaib19',
        'email' => 'suhaib@htu.com',
        'password' => '123456'
    ]
));
