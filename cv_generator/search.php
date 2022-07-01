<?php
include '../utilities/constants.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>

    <div class="container my-5">
        <a href="./">Back</a>
        <h1>Get You CV</h1>

        <form method="GET" action="./find_cv.php" class="w-50">
            <div class="my-5">
                <label for="searchCV">Enter Your Email</label>
                <input name="email" type="email" id="searchCV">
            </div>
            <input type="submit" value="Seach" class="btn btn-primary">
        </form>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL; ?>/cv_generator/assets/app.js"></script>
</body>

</html>