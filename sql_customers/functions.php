<?php

function connection(){
    // Establish Connection
    $connection = mysqli_connect('localhost', 'root', 'root', 'MyCompany');

    if(!$connection){
        die('DB Connection Failed!');
    }

    return $connection;

}

function get_customer($id){
    $connection = connection();
    // Send SQL/Database request
    $sql = "SELECT * FROM Customers WHERE id=$id;";
    $result = mysqli_query($connection, $sql);

    // Process data
    $customers = array();
    if(mysqli_num_rows($result) > 0) {

        while($customer = mysqli_fetch_assoc($result)){
            $customers[] = array(
                'id' => $customer['id'],
                'firstname' => $customer['firstname'],
                'lastname' => $customer['lastname'],
                'phone_num' => $customer['phone_num'],
                'email' => $customer['email'],
                'reg_date' => $customer['reg_date'],
            );
        }
    } else {
        echo false;
    }

    // Close connection
    mysqli_close($connection);

    return $customers[0];

    // // Process data
    // $customer = null;
    // if(mysqli_num_rows($result) > 0) {

    //     while($raw_customer = mysqli_fetch_assoc($result)){
    //         $customer = array(
    //             'id' => $raw_customer['id'],
    //             'firstname' => $raw_customer['firstname'],
    //             'lastname' => $raw_customer['lastname'],
    //             'phone_num' => $raw_customer['phone_num'],
    //             'email' => $raw_customer['email'],
    //             'reg_date' => $raw_customer['reg_date'],
    //         );
    //     }
    // } else {
    //     echo false;
    // }

    // // Close connection
    // mysqli_close($connection);

    // return $customer;
}