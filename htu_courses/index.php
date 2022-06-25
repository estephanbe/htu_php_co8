<?php
// The landing page. 
include './components/header.php';

if(isset($_SESSION['user'])){
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/htu_courses/home.php');
}
?>



    <div id="htu-landing-mainContainer">
        <div id="htu-landing-jum" class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">HTU Students Courses</h1>
                <p class="col-md-8 fs-4">This website countains courses for HTU students only. Please login using the below button if you are an HTU student.</p>
                <a class="btn btn-primary btn-lg" type="button" href="<?= $home_url . 'login.php'; ?>">Login</a>
            </div>
        </div>
    </div>



<?php include './components/footer.php'; ?>
    