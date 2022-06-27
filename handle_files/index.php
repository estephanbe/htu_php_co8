<?php
$pages = file_get_contents('./pages.md');
$pages = explode(',', $pages);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manipulate Files</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <form method="POST" action="./create_files.php">
            <div class="mb-3">
                <label for="pageName" class="form-label">Page Name</label>
                <input name="name" type="text" class="form-control" id="pageName" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="pageContent" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="pageContent"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <ul>
            <?php foreach ($pages as $page) {
                $page = trim($page);
                $page_link = './pages/' . strtolower($page) . '.md';
                echo "
                    <li>
                        <a href='$page_link'>$page</a>
                    </li>
                ";
            } ?>
        </ul>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL; ?>/htu_courses/assets/js/app.js"></script>
</body>

</html>