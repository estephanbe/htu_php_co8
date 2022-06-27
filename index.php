<?php
include './utilities/constants.php';
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        .htu-card-body {
            display: flex;
            flex-direction: column;
        }

        .htu-card-body .l-link {
            display: flex;
            flex-direction: column;
            justify-content: end;
            flex-grow: 1;
        }

    </style>
</head>

<body class="container my-5">
    <h1 class="text-center mb-5">PHP Course Lessons</h1>
    <div class="row">
        <?php foreach(LESSONS as $lesson): ?>
            <div class="col-4 my-5">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body htu-card-body">
                        <h5 class="card-title"><?= $lesson['name'] // (<?=) === echo ?></h5>
                        <p class="card-text"><?php echo $lesson['description'] ?></p>
                        <div class="l-link">
                            <a href="<?php echo $lesson['link'] ?>" class="card-link">Lesson Link</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>