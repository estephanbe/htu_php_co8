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
        <h1>CV Generator Application</h1>
        <a href="./search.php">Get Your CV</a>

        <form method="GET" action="./create.php" class="w-50">

            <section id="contactInfo">
                <div class="mb-3">
                    <label for="ciFirstName" class="form-label">First Name</label>
                    <input name="fname" type="text" class="form-control" id="ciFirstName">
                </div>
                <div class="mb-3">
                    <label for="ciLastName" class="form-label">Last Name</label>
                    <input name="lname" type="text" class="form-control" id="ciLastName">
                </div>
                <div class="mb-3">
                    <label for="ciEmail" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="ciEmail">
                </div>
                <div class="mb-3">
                    <label for="ciPhoneNumber" class="form-label">Phone Number</label>
                    <input name="phoneNumber" type="text" class="form-control" id="ciPhoneNumber">
                </div>

                <button id="toPersonalStatement" class="btn btn-outline-success">Next</button>
            </section>

            <section id="personalStatement">
                <div class="mb-3">
                    <label for="pStatement" class="form-label">Please enter you personal statement:</label>
                    <textarea name="pStatement" class="form-control" id="pStatement"></textarea>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <button id="backBasicInfo" class="btn btn-outline-danger">Back</button>
                    <button id="toWorkExperience" class="btn btn-outline-success">Next</button>
                </div>
            </section>

            <section id="workExperience">
                <p>Please enter your working experience:</p>
                <div class="mb-3 input-data">
                    <input name="wExperience[]" type="text" class="form-control" placeholder="Your working experience..">
                </div>
                <button id="addWorkingExp" class="btn btn-success">Add Working Experience</button>
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <button id="backPersonalStatement" class="btn btn-outline-danger">Back</button>
                    <button id="toEducation" class="btn btn-outline-success">Next</button>
                </div>
            </section>

            <section id="education">
                <p>Please enter your education:</p>
                <div class="mb-3 input-data">
                    <input name="education[]" type="text" class="form-control" placeholder="Your education..">
                    
                </div>
                <button id="addEducation" class="btn btn-success">Add Education</button>
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <button id="backWorkExperience" class="btn btn-outline-danger">Back</button>
                    <button id="toSkills" class="btn btn-outline-success">Next</button>
                </div>
            </section>

            <section id="skills">
                <p>Please enter your skills:</p>
                <div class="mb-3 input-data">
                    <input name="skills[]" type="text" class="form-control" placeholder="Your skill..">
                </div>
                <button id="addSkill" class="btn btn-success">Add Skill</button>
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <button id="backEducation" class="btn btn-outline-danger">Back</button>
                    <button id="submitCV" type="submit" class="btn btn-primary mt-4">Submit</button>
                </div>
            </section>
        </form>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="<?= BASE_URL; ?>/cv_generator/assets/app.js"></script>
</body>

</html>