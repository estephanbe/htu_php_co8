<?php 
include './functions.php';
// method is POST and $_POST is not empty
// check if post data exists
// check according to each pattern

if(
    check_post_data('fullName') && 
    check_post_data('email') &&
    check_post_data('password')
){
    if(!validate_customer($_POST['email'])){
        $customers = get_customers();
        $customers[] = array(
            'name' => $_POST['fullName'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        );
        file_put_contents('./data/customers.json', json_encode($customers));
    } else {
        push_error_msg('customer_existed');
    }

}

if(!$GLOBALS['error']){
    $_SESSION['user'] = get_customer($_POST['email']);
    unset($_SESSION['errors']);
    header("Location: ./home.php");
} else {
    unset($_SESSION['user']);
    header("Location: ./regestration.php");
}
