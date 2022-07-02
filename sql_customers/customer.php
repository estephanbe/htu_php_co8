<?php 
// Read operation: Single Item
include_once './partials/header.php';


$customer = get_customer($_GET['id']);
?>

<h1>Customer - <?= $customer['firstname'] . ' ' . $customer['lastname'] ?></h1>

<div class="row">
    <div class="col-6">
        <p><strong>ID: </strong> <?= $customer['id'] ?></p>
        <p><strong>Firstname: </strong> <?= $customer['firstname'] ?></p>
        <p><strong>Lastname: </strong> <?= $customer['lastname'] ?></p>
        <p><strong>Phone: </strong> <?= $customer['phone_num'] ?></p>
        <p><strong>email: </strong> <?= $customer['email'] ?></p>
        <p><strong>Registration: </strong> <?= $customer['reg_date'] ?></p>
    </div>
    <div class="col-6">
        <a href="./edit.php?id=<?= $customer['id'] ?>" class="btn btn-warning">Edit</a>
        <a href="./delete.php?id=<?= $customer['id'] ?>" class="btn btn-danger ml-5">Delete</a>
    </div>
</div>




<?php include_once './partials/footer.php'; ?>