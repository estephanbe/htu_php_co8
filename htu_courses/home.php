<?php
include './components/header.php';
if (!isset($_SESSION['user'])) {
    header('Location: ' . BASE_URL . '/htu_courses/login.php');
}

$raw_data = file_get_contents('./courses.json');
$courses = json_decode($raw_data);

// var_dump($courses);
// die();

?>

<div id="htu-home-welcome">
    <div id="htu-home-jum" class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <p id="htu-home-slogan" class="text-center">the right place to learn</p>
            <h1 class="display-5 fw-bold text-center">HTU Students Courses</h1>
            <form method="GET" action="./search.php" id="htu-home-search">
                <input name="s" type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">

        <?php foreach($courses as $course): ?>

            <div class="col-4 my-5">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $course->image; ?>" class="card-img-top" alt="<?= $course->title; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $course->title; ?></h5>
                        <p class="card-text"><?= $course->excerpt; ?></p>
                        <a href="./course_details.php?id=<?= $course->id; ?>" class="btn btn-primary">Check Course</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

        

    </div>
</div>



<?php
include './components/footer.php';
?>