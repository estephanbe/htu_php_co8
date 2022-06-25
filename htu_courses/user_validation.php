<?php 
session_start();
require '../utilities/constants.php';

$error_msgs = null;
$error = false;

$email = null;
$password = null;

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)){

    // validate incoming email address
        // isset[email]
        // empty(email)
        // filter_var(email)
    if(isset($_POST['email'])){
        if(!empty($_POST['email'])){
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $error_msgs['email_incorrect_pattern'] = 'Please enter a valid pattern for your email address!';
                $error = true;
            }
        } else {
            $error_msgs['email_empty'] = 'Please enter a value for your email address!';
            $error = true;
        }
    } else {
        $error_msgs['email_not_available'] = 'Please submit your email address!';
        $error = true;
    }

    // validate incoming password
        // isset[password]
        // empty(password)
        // filter_var(password)
        if(isset($_POST['password'])){
            if(!empty($_POST['password'])){
                if(strlen($_POST['password']) < 5 || strlen($_POST['password']) > 15){
                    $error_msgs['password_incorrect_pattern'] = 'Please enter a password between 5 and 15 charecters!';
                    $error = true;
                }
            } else {
                $error_msgs['password_empty'] = 'Please enter a value for your password!';
                $error = true;
            }
        } else {
            $error_msgs['password_not_available'] = 'Please submit your password!';
            $error = true;
        }

} else {
    $error_msgs['invalid_post_method'] = 'Invalid form submission!';
    $error = true;
}

// Validate User Info
if(!$error) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $found_user = null;
    foreach (USERS as $user_from_database) {
        if($user_from_database['email'] == $email && $user_from_database['password'] == $password){
            $found_user = $user_from_database;
        }
    }

    if(empty($found_user)){
        $error_msgs['invalid_user'] = 'Incorrect email or password!';
        $error = true;
    }
} 

if(!$error){
    $_SESSION['user'] = $found_user;
    header('Location: ' . BASE_URL . '/htu_courses/home.php');
} else {
    $_SESSION['errors'] = $error_msgs;
    $_SESSION['invalid_user_info'] = Array(
        'email' => $email,
        'password' => $password
    );
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}


