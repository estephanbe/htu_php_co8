<?php
// We will be having a username through form input. 
// We will display the username to the user as bootstrap alert.
include '../utilities/constants.php';

$username = null;

if (!empty($_GET) && isset($_GET['username'])) {
    $username = $_GET['username'];
}

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
    <?php include './forms_nav.php'; ?>

    <h1>Forms Demo</h1>

    <form method="GET" action="">

        <div class="mb-3">
            <label for="testingInput" class="form-label">Username</label>
            <input name="username" type="text" class="form-control" id="testingInput" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


    <?php if (!empty($username)) : ?>
        <div class="alert alert-success my-5" role="alert">
            Hey! Your username is <?= $username; ?>
        </div>
    <?php endif; ?>



    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        <?php if (!empty($username)) : ?>
            // alert('<?php echo $username; ?>');
        <?php endif; ?>
    </script>
</body>

</html>