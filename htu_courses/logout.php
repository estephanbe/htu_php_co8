<?php 
session_start();
include '../utilities/constants.php';
session_destroy();
header("Location: " . BASE_URL . '/htu_courses/login.php');