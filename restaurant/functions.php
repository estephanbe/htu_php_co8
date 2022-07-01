<?php 
session_start();

$error_msgs = array();
$error = false;


/**
 * Push error messages to the $error_msgs based on errors array. 
 *
 * @param [String] $error
 * @return void
 */
function push_error_msg($error){
    $error_msgs = array(
        'incorrct_submission' => 'You need to submit the data through POST method, or you need to make sure that data were filled in!',
        'name_not_submitted' => 'Please submit your full name!',
        'name_empty' => 'Please enter a value for your full name!',
        'email_not_submitted' => 'Please submit your email address!',
        'email_empty' => 'Please enter a value for your email address!',
        'email_incorrect_pattern' => 'Please enter a valid pattern for your email address!',
        'password_not_submitted' => 'Please submit your password!',
        'password_empty' => 'Please enter a value for your password!',
        'password_incorrect_pattern' => 'Please enter a valid pattern for your password!',
        'invalid_user' => 'Incorrect email or password!',
        'customer_existed' => 'Customer already existed!',
    );

    // if(!isset($error_msgs[$error])) return;
    if(!isset($error_msgs[$error])) 
        return;

    $GLOBALS['error_msgs'][] = $error_msgs[$error];
    $GLOBALS['error'] = true;
    $_SESSION['errors'] = $GLOBALS['error_msgs'];
}

/**
 * Check Post Data: this function will validate the $_POST global variable and return the validation value
 *
 * @param [String] $data $_POST variable data
 * @return Boolean
 */
function check_post_data($data){ // email, password, fullName
    // Valid method
    if($_SERVER['REQUEST_METHOD'] != 'POST' && empty($_POST)){
        push_error_msg('incorrct_submission');
        return false;
    }

    // check if data isset
    if(!isset($_POST[$data])){
        switch ($data) {
            case 'name':
                push_error_msg('name_not_submitted');
                break;
            case 'email':
                push_error_msg('email_not_submitted');
                break;
            case 'password':
                push_error_msg('password_not_submitted');
                break;
        }
        return false;
    }

    // check if data is empty
    if(empty($_POST[$data])){
        switch ($data) {
            case 'name':
                push_error_msg('name_empty');
                break;
            case 'email':
                push_error_msg('email_empty');
                break;
            case 'password':
                push_error_msg('password_empty');
                break;
        }
        return false;
    }

    // check data pattern
    switch($data){
        case 'email':
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                push_error_msg('email_incorrect_pattern');
            break;
        case 'password':
            if(strlen($_POST['password']) < 1 || strlen($_POST['password']) > 20)
                push_error_msg('password_incorrect_pattern');
            break;
    }

    return true;
}

function get_customers(){
    $raw_customers = json_decode(file_get_contents('./data/customers.json'));
    if(empty($raw_customers)){
        return array();
    } else {
        return $raw_customers;
    }
}

function get_customer($email){
    $customer = null;
    if (!validate_customer($email)) {
        push_error_msg('invalid_user');
        return $customer;
    }

    $customers = get_customers();
    foreach($customers as $customer){
        if($customer->email == $email){
            return $customer;
        }
    }
}

function validate_customer($email){
    $validation = false;

    // user validation
    $customers = get_customers();
    if(empty($customers))
        return $validation;
    
    foreach($customers as $customer){
        if($customer->email == $email){
            $validation = true;
            break;
        }
    }

    return $validation;
}

function echo_errors(){
    if(!isset($_SESSION['errors'])) return;
    if(empty($_SESSION['errors'])) return;

    echo "<div class='my-5'>";
        foreach ( $_SESSION['errors'] as $error) :
            echo <<<EOD
            <div class="alert alert-danger" role="alert">
                $error
            </div>
            EOD;
        endforeach;
    echo "</div>";
}

// create htu_auth function
    // check if user is in $_SESSION
    // if user has email 
    // if user exis
        // false
            // redirect to ./

function htu_auth(){
    
    if(!isset($_SESSION['user']))
        header('Location: ./');
    if(empty($_SESSION['user']))
        header('Location: ./');
    if(empty($_SESSION['user']->email))
        header('Location: ./');
        
    foreach (get_customers() as $customer) {
        if($customer->email == $_SESSION['user']->email){
            return;
        }
    }
    header('Location: ./');
}

function get_tables(){
    $raw_tables = json_decode(file_get_contents('./data/tables.json'));
    if(empty($raw_tables)){
        return array();
    } else {
        return $raw_tables;
    }
}

function get_table($id){
    $tables = get_tables();
    if(empty($tables)){
        return null;
    }

    foreach ($tables as $table) {
        if($table->id == $id){
            return $table;
        }
    }

    return null;
}