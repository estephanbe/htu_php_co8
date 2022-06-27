<?php
// This is a template
include './components/header.php';
if (!isset($_SESSION['user'])) {
    header('Location: ' . BASE_URL . '/htu_courses/login.php');
}

if(!isset($_GET['s'])){
    header('Location: ' . BASE_URL . '/htu_courses/home.php');
}

$key_word = $_GET['s'];
$found_courses = array();

$raw_data = file_get_contents('./courses.json');
$courses = json_decode($raw_data);

foreach ($courses as $course) {
    if(strpos( strtolower($course->title), strtolower($key_word) ) !== false){
        array_push($found_courses, $course);
    }
}


?>


<div id="htu-courses-search" class="container my-5">
    <?php echo_breadcrumb('Search', "Searching for \"$key_word\""); ?>

    <div class="my-5">
        <form method="GET" action="./search.php" id="htu-home-search">
            <input name="s" type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
    </div>

    <?php if(!empty($found_courses)){ ?>

        <?php foreach ($found_courses as $course): ?>
            <div class="htu-search-course-container row">
                <div class="col-6">
                    <img src="<?= $course->image ?>" class="img-thumbnail" alt="<?= $course->title ?>">
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <h4><?= $course->title ?></h4>
                        <p><?= $course->excerpt ?></p>
                        <a href="./course_details.php?id=<?= $course->id; ?>" class="btn btn-primary w-25">Check Course</a>
                    </div>
                </div>
                <hr class="my-5">
            </div>
        <?php endforeach; ?>
    <?php } else { ?>

        <p class="text-center">No course was found for "<?= $key_word ?>"</p>

    <?php } ?>
</div>



<?php
include './components/footer.php';
?>