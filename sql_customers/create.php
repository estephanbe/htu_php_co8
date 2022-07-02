<?php 
// Create operation: User interface
include_once './partials/header.php'; ?>


<form class="w-50" method="POST" action="./store.php">
    <div class="mb-3">
        <label for="fname" class="form-label">First Name</label>
        <input name="firstname" type="text" class="form-control" id="fname" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="lname" class="form-label">Last Name</label>
        <input name="lastname" type="text" class="form-control" id="lname">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input name="phone_num" type="text" class="form-control" id="phone">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<?php include_once './partials/footer.php'; ?>