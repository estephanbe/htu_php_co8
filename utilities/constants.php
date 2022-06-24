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
    ]
]);

define('USERS', Array(
    [
        'name' => 'khalid',
        'username' => 'khalid19',
        'email' => 'khalid@example.com',
        'password' => 'test@123'
    ],
    [
        'name' => 'ahmad',
        'username' => 'ahmad19',
        'email' => 'ahmad@example.com',
        'password' => 'test@123'
    ],
    [
        'name' => 'suhaib',
        'username' => 'suhaib19',
        'email' => 'suhaib@example.com',
        'password' => 'test@123'
    ]
));
