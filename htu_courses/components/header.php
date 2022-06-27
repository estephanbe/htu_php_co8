<?php 
session_start();
include '../utilities/constants.php';
$base_url = 'http://' . $_SERVER['HTTP_HOST'];
$home_url = $base_url . '/htu_courses/';

function echo_breadcrumb($current_page, $title){ // return void
    echo "
    <div class='d-flex justify-content-between align-items-center'>
        <ul class='list-inline'>
            <li class='list-inline-item'>
                <a href='./home.php'>Home</a>
            </li>
            <li class='list-inline-item'>></li>
            <li class='list-inline-item'>$current_page</li>
        </ul>
        <h1 class='text-center my-5'>$title</h1>
    </div>
    ";
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTU Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="d-flex justify-content-between w-100">
            <a class="navbar-brand" href="<?= $home_url; ?>">
                <img src="./assets/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end w-100">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= $base_url; ?>">Root</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= $home_url; ?>">Home</a>
                    </li>
                    <?php if(isset($_SESSION['user'])): ?>
                        <li class="nav-item ms-5">
                            <a class="nav-link btn btn-danger" aria-current="page" href="<?= $home_url . 'logout.php'; ?>">Logout</a>
                        </li>
                    <?php endif; ?>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </div>
</nav>