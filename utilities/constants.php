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
    ],
    [
        'name' => "Handling Files",
        'description' => "Learn how to read and write to files.",
        'link' => BASE_URL . '/handle_files/'
    ],
    [
        'name' => "CV Generator",
        'description' => "Generate CVs based on user inputs",
        'link' => BASE_URL . '/cv_generator/'
    ],
    [
        'name' => "Restaurant Portal",
        'description' => "Restaurant portal for customers to reserve their tables.",
        'link' => BASE_URL . '/restaurant/'
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
