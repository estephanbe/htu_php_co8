<?php
session_start();
require '../../utilities/constants.php';

// Making sure that the request is post
// Making sure that the $_POST is not empty
// Making sure that the name attribute is set correctly in the HTML
// Making sure that the value of the html input is not empty
// Making sure the pattern of the value is correct
// Making sure that user exists
// Making sure that data matched
// if all the above is true
    // redirect to the home page
// else
    // redirect back to the login page with error messages

$error_msgs = array();
$error = false;

$name = null;
$username = null;
$email = null;
$password = null;

$_SESSION['login_erros'] = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)){ // Check if request method is post or $_POST is not empty


    if ( !isset($_POST['username']) ){ // check if username was submitted through name attribute
        $error_msgs['username_not_found'] = 'You didn\'t submit username!';
        $error = true;
    } else {
        if (empty($_POST['username'])) { // check if username is empty
            $error_msgs['username_no_value'] = 'Username empty!';
            $error = true;
        } else {
            // check if username length between 3 and 10
            if(strlen($_POST['username']) < 3 || strlen($_POST['username']) > 10){
                $error_msgs['username_not_valid'] = 'Please make sure the username length is between 3 and 10!';
                $error = true;
            }

        }
    }

    if ( !isset($_POST['name']) ){ // check if name was submitted through name attribute
        $error_msgs['name_not_found'] = 'You didn\'t submit name!';
        $error = true;
    } else {
        if (empty($_POST['name'])) { // check if name is empty
            $error_msgs['name_no_value'] = 'Name empty!';
            $error = true;
        } else {
            // check if name contains anything other than letters.
            // please search for numbers. if 0,1,2,3,4,5,6,7,8,9 send error!
            // https://regex101.com/

            $pattern = "/[0-9]/";
            $regex = preg_match($pattern, $_POST['name']);

            if($regex == 1){
                $error_msgs['name_has_numbers'] = 'Please make sure that your name doesn\'s contains numbers!';
                $error = true;
            }
            
        }
    }

    if ( !isset($_POST['email']) ){ // validate email
        $error_msgs['email_not_found'] = 'You didn\'t submit email!';
        $error = true;
    } else {
        if (empty($_POST['email'])) {
            $error_msgs['email_no_value'] = 'Email empty!';
            $error = true;
        } else {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ // check if email follows the email pattern
                $error_msgs['email_not_valid'] = 'Email not valid, please enter valid email address!';
                $error = true;
        
            }
        }
    }

    if ( !isset($_POST['password']) ){ // validate password
        $error_msgs['password_not_found'] = 'You didn\'t submit password!';
        $error = true;
    } else {
        if (empty($_POST['password'])) {
            $error_msgs['password_no_value'] = 'Password empty!';
            $error = true;
        } else {
            // check if password length between 5 and 15
            if(strlen($_POST['password']) < 5 || strlen($_POST['password']) > 15){
                $error_msgs['password_not_valid'] = 'Please make sure the password length is between 5 and 10!';
                $error = true;
            }

        }
    }
} else {
    // array_push($error_msgs, ['request_method' => 'You used a wrong request method']);
    $error_msgs['request_error'] = 'You used a wrong request method or you didn\'t submit data!';
    $error = true;
}


// var_dump(USERS);

// to check if user exists in our database
// proceed to another page

if(!$error) { // validate user
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = null;

    foreach (USERS as $user_to_be_validated) { // check each user if exists. 
        if($user_to_be_validated['username'] == strtolower($username)){
            $user = $user_to_be_validated;
            break;
        }
    }

    if($user != null) { // validate user information
        if(strtolower($name) != $user['name']){ // validate user name
            $error_msgs['name_not_valid'] = 'Name doesn\'t match!';
            $error = true;
        }
        if($email != $user['email']){ // validate user email
            $error_msgs['email_not_found'] = 'Email doesn\'t match!';
            $error = true;
        }
        if($password != $user['password']){ // validate user password
            $error_msgs['password_not_found'] = 'Password doesn\'t match!';
            $error = true;
        }
    } else {
        $error_msgs['user_not_found'] = 'Username was not found!';
        $error = true;
    }
}




// We are checking if there was no errors so we can let the user login. 
if(!$error) {
    // let user login!
    $_SESSION['user'] = $user;
    header("Location: " . $_SERVER['HTTP_REFERER'] . 'home.php') ;
} else {
    // do not let user login!
    $_SESSION['login_erros'] = $error_msgs;
    header("Location: " . $_SERVER['HTTP_REFERER']);
}