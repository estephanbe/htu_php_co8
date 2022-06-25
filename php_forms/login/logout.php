<?php 
session_start();
include '../../utilities/constants.php';

// unset($_SESSION['user']);
session_destroy();

header("Location: " . BASE_URL . '/php_forms/login');