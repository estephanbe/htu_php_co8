<?php
session_start();

include '../../utilities/constants.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body class="container my-5">

    <?php include '../forms_nav.php'; ?>

    <h1>Hello, world!</h1>

    <form method="POST" action="./form_validation.php">
        <div class="mb-3">
            <label for="htuUsername" class="form-label">Username</label>
            <input name="username" type="text" class="form-control" id="htuUsername" aria-describedby="emailHelp" required minlength="3" maxlength="10">
        </div>
        <div class="mb-3">
            <label for="htuName" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="htuName" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="htuEmail" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="htuEmail" aria-describedby="emailHelp" requ>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="htuPassword" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="htuPassword" minlength="5" maxlength="15" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php if(isset($_SESSION['login_erros'])):  ?>
        <div class="my-5">
            <?php
            foreach ($_SESSION['login_erros'] as $error) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error ?>
                </div>
            <?php
            }
            ?>
        </div>
    <?php endif; ?>



    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>