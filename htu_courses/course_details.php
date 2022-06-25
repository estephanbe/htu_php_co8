<?php
// This is a template
include './components/header.php';
if (!isset($_SESSION['user'])) {
    header('Location: ' . BASE_URL . '/htu_courses/login.php');
}

if(!isset($_GET['id'])){
    header('Location: ' . BASE_URL . '/htu_courses/home.php');
}

$course_id = (int) $_GET['id'];
$course = null;
$raw_data = file_get_contents('./courses.json');
$courses = json_decode($raw_data);

foreach($courses as $c){
    if($course_id == $c->id){
        $course = $c;
        break;
    }
}

if(empty($course)){
    header('Location: ' . BASE_URL . '/htu_courses/home.php');
}
?>



<div class="container my-5">
    <h1 class="text-center my-5">Course Title</h1>
    <div class="row">
        <div class="col-6">
            <img src="https://www.codingdojo.com/blog/wp-content/uploads/19_best-courses_blog_600x341.jpg" alt="Course Title">
        </div>
        <div class="col-6">
            <p><strong>Author: </strong><?= $course->author; ?></p>
            <p><strong>Date: </strong><?= $course->date; ?></p>
            <p><strong>Rating: </strong><?= $course->rating; ?></p>
            <p><strong>Descreption: </strong><?= $course->content; ?></p>
        </div>
    </div>

    <hr class="my-5">

    <div class="row m-5">
        <div class="col-12 d-flex justify-content-center align-content-center">
            <iframe width="1000" height="700" src="https://www.youtube.com/embed/OK_JCtrrv-c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

</div>



<?php
include './components/footer.php';
?>