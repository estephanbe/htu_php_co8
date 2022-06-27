<?php 

// We validate data first!
// We are creating without any validation! We should validate first!!!
var_dump($_GET);

$name = $_GET['fname'] . ' ' . $_GET['lname'];
$email = $_GET['email'];
$phone = $_GET['phoneNumber'];
$statement = $_GET['pStatement'];
$w_experience = $_GET['wExperience'];
$education = $_GET['education'];
$skills = $_GET['skills'];

$cv = array(
    "id" => 0,
    "name" => $name,
    "phone" => $phone,
    "statement" => $statement,
    "w_experience" => $w_experience,
    "education" => $education,
    "skills" => $skills
);


$final_w_e = '';
foreach($w_experience as $w){
    $final_w_e .= "<li>$w</li>";
}
$final_education= '';
foreach($w_experience as $e){
    $final_education .= "<li>$e</li>";
}
$final_skills = '';
foreach($skills as $s){
    $final_skills .= "<li>$s</li>";
}




$html_template = <<<EOD
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>$name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <h1 class="my-5">Resume</h1>

        <section class="my-4" id="basicInfo">
            <h3>Basic Info</h3>
            <hr class="my-2">
            <p class="my-2">
                <strong>Name:</strong> $name
            </p>
            <p class="my-2">
                <strong>Email:</strong> $email
            </p>
            <p class="my-2">
                <strong>Phone Number:</strong> $phone
            </p>
        </section>
        <section class="my-4" id="personalStatement">
            <h3>Personal Statement</h3>
            <p>$statement</p>
        </section>
        <section class="my-4" id="workExperiece">
            <h3>Working Experience</h3>
            <ul class="my-3">
            $final_w_e
            </ul>
        </section>
        <section class="my-4" id="education">
            <h3>Education</h3>
            <ul class="my-3">
            $final_education
            </ul>
        </section>
        <section class="my-4" id="skills">
            <h3>Education</h3>
            <ul class="my-3">
            $final_skills
            </ul>
        </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>

EOD;

$cv_list = json_decode(file_get_contents('./cv_list.json'));
$id = count($cv_list) + 1;
$cv['id'] = $id;
$cv_list[] = $cv;

file_put_contents('./cv_list.json', json_encode($cv_list));
file_put_contents('./cvs/' . $id . '.html', $html_template);

header("Location: ./cvs/" . $id . ".html");