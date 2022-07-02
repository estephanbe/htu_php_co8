<?php 
// Update operation: backend - update data
include_once './functions.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone_num = $_POST['phone_num'];
$id = $_POST['id'];

$connection = connection();

$sql = "UPDATE Customers SET firstname='$firstname', lastname='$lastname', email='$email', phone_num='$phone_num' WHERE id=$id";
$res = mysqli_query($connection, $sql);
mysqli_close($connection);

if($res){
    header('Location: ./customer.php?id=' . $id);
} else {
    header('Location: ./');
}