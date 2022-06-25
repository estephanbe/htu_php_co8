<?php
// The login page. 
include './components/header.php';

if(isset($_SESSION['user'])){
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/htu_courses/home.php');
}

?>



<div class="container">
    <h1 class="text-center my-5">Login Page</h1>
    <?php if (isset($_SESSION['errors'])) :
        foreach ($_SESSION['errors'] as $error) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $error; ?>
            </div>
    <?php
        }
    endif; ?>
    <div id="htu-login-mainContainer" class="d-flex justify-content-center align-items-center">
        <form class="w-50" method="POST" action="./user_validation.php">
            <div class="mb-3">
                <label for="htuEmail" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="htuEmail" aria-describedby="emailHelp" placeholder="student@htu.com" required value="<?php
                                                                                                                                                                if (isset($_SESSION['invalid_user_info'])) {
                                                                                                                                                                    echo $_SESSION['invalid_user_info']['email'];
                                                                                                                                                                }
                                                                                                                                                                ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="htuPassword" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="htuPassword" required minlength="5" maxlength="15" value="<?php
                                                                                                                                            if (isset($_SESSION['invalid_user_info'])) {
                                                                                                                                                echo $_SESSION['invalid_user_info']['password'];
                                                                                                                                            }
                                                                                                                                            ?>">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>



<?php include './components/footer.php'; ?>