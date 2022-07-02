<?php 
// Delete operation
include_once './functions.php';

$id = $_GET['id'];

$connection = connection();

$sql = "DELETE FROM Customers WHERE id=$id";
$res = mysqli_query($connection, $sql);
mysqli_close($connection);

if($res){
    header('Location: ./');
} else {
    header('Location: ./customer.php?id=' . $id);
}