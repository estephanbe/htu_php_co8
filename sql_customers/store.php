<?php 
// Create operation: Add data to the database
include_once './functions.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone_num = $_POST['phone_num'];

$connection = connection();

$sql = "INSERT INTO Customers (firstname, lastname, email, phone_num) VALUES ('$firstname', '$lastname', '$email', '$phone_num')";
$res = mysqli_query($connection, $sql);
mysqli_close($connection);

if($res){
    header('Location: ./');
} else {
    header('Location: ./create.php');
}