<?php 
// Update operation: user interface to update data
include_once './partials/header.php'; 

$customer = get_customer($_GET['id']);
?>

<form class="w-50" method="POST" action="./update.php">
    <input type="hidden" name="id" value="<?= $customer['id'] ?>">
    <div class="mb-3">
        <label for="fname" class="form-label">First Name</label>
        <input name="firstname" type="text" class="form-control" id="fname" aria-describedby="emailHelp" value="<?= $customer['firstname'] ?>">
    </div>
    <div class="mb-3">
        <label for="lname" class="form-label">Last Name</label>
        <input name="lastname" type="text" class="form-control" id="lname" value="<?= $customer['lastname'] ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" value="<?= $customer['email'] ?>">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input name="phone_num" type="text" class="form-control" id="phone" value="<?= $customer['phone_num'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>



<?php include_once './partials/footer.php'; ?>