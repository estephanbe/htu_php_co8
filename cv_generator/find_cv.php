<?php 

$email = $_GET['email'];



// get all data from cv_list
// match $email with cv_list['email']
// redirct to cv template if found
// if not, die. 

$cvs = json_decode(file_get_contents('./cv_list.json'));

foreach($cvs as $cv){
    if($cv->email == $email){
        header('Location: ./cvs/' . $cv->id . '.html');
        exit();
    } 
}

die('CV not found!');