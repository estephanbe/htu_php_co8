<?php
include "./partials/header.php";
htu_auth();

if(!isset($_GET['id']) && empty($_GET['id']))
    die('id not set');

$table = get_table($_GET['id']);
if(empty($table))
    die('table was not found');
?>

<div class="container my-5">
    <a href="./home.php" class="btn btn-info my-2">Back</a>
    <div class="d-flex justify-content-between align-items-center">
        <h1>Table #<?= $table->id ?></h1>
        <p class="m-0">
            Welcome <?= $_SESSION['user']->name ?>
        </p>
    </div>

    <div class="row my-5">

        <div class="col-4">
            <div class="card m-5" style="width: 23rem;">
                <div class="card-header">
                    <strong>Reservation Slot 1 (8-9)</strong>
                </div>
                <div class="card-body">
                    <a href="./reserve.php?id=<?= $table->id ?>&r=1&action=<?= $table->r1 ? "c" : "r"; ?>" class="btn btn-lg <?= $table->r1 ? "btn-danger" : "btn-success"; ?>">
                        <?= $table->r1 ? "Cancle Reservation!" : "Reserve Now!"; ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card m-5" style="width: 23rem;">
                <div class="card-header">
                    <strong>Reservation Slot 2 (9-10)</strong>
                </div>
                <div class="card-body">
                    <a href="./reserve.php?id=<?= $table->id ?>&r=2&action=<?= $table->r2 ? "c" : "r"; ?>" class="btn btn-lg <?= $table->r2 ? "btn-danger" : "btn-success"; ?>">
                        <?= $table->r2 ? "Cancle Reservation!" : "Reserve Now!"; ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card m-5" style="width: 23rem;">
                <div class="card-header">
                    <strong>Reservation Slot 3 (10-11)</strong>
                </div>
                <div class="card-body">
                    <a href="./reserve.php?id=<?= $table->id ?>&r=3&action=<?= $table->r3 ? "c" : "r"; ?>" class="btn btn-lg <?= $table->r3 ? "btn-danger" : "btn-success"; ?>">
                        <?= $table->r3 ? "Cancle Reservation!" : "Reserve Now!"; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>



<?php include "./partials/footer.php"; ?>