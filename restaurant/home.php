<?php
include "./partials/header.php";
htu_auth();
?>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Tables</h1>
        <p class="m-0">
            Welcome <?= $_SESSION['user']->name ?>
        </p>
    </div>

    <div class="row my-5">
        <?php foreach (get_tables() as $table) : ?>
            <div class="col-4">
                <div class="card m-5" style="width: 23rem;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>Table #<?= $table->id ?></strong>
                            <a href="./table.php?id=<?= $table->id ?>" class="btn btn-warning btn-sm">Edit!</a>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item <?= $table->r1 ? 'unavailable-slot' : 'available-slot' ; ?>">
                            Reservation Slot 1 (8-9): <?= $table->r1 ? 'Not Available!' : 'Available!' ; ?>
                        </li>
                        <li class="list-group-item <?= $table->r2 ? 'unavailable-slot' : 'available-slot' ; ?>">
                            Reservation Slot 2 (9-10): <?= $table->r2 ? 'Not Available!' : 'Available!' ; ?>
                        </li>
                        <li class="list-group-item <?= $table->r3 ? 'unavailable-slot' : 'available-slot' ; ?>">
                            Reservation Slot 3 (10-11): <?= $table->r3 ? 'Not Available!' : 'Available!' ; ?>
                        </li>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


</div>



<?php include "./partials/footer.php"; ?>