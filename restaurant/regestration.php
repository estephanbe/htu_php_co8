<?php 
include "./partials/header.php"; 
?>

<div class="container my-5">

    <h1 class="text-center">Regesteration</h1>
    <hr class="my-5">
    <form class="w-50" method="POST" action="./create_user.php">
        <div class="mb-3">
            <label for="customerFullName" class="form-label">Your Full Name</label>
            <input name="fullName" type="text" class="form-control" id="customerFullName">
        </div>
        <div class="mb-3">
            <label for="customerEmail" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="customerEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="customerPassword" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="customerPassword" maxlength="20" minlength="1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php echo_errors(); ?>
   
</div>



<?php include "./partials/footer.php"; ?>