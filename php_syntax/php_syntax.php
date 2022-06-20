<?php 
// This is a php demo page


// This is a comment
# This is another comment
/*
Multiline
Comments
*/


// PHP Vars
$str1 = 'testing ';
$str2 = 'str2';

function testing_fun() {
    global $str1, $str2;
    $str1 = 'str1 ';
    $inside_function = $str1 . $str2;
    // echo $GLOBALS['str1'];
    return $inside_function;
}

testing_fun();
// print_r($GLOBALS);

// echo $str1;

// PHP Data Types
// String
$string = 'this is string';
$string = "this is string";
// Integer
$integer = 1;
// Float
$float = 1.1;
// Boolean
$bool = true;
// Array
$arr = [1, 2, 3];
$arr2 = Array(1,2,3);
// Object
// $obj = new Object();
// NULL
$null = null;

// PHP Debugging
// print_r($arr);
// var_dump($arr);

// String functions
$str_len = strlen($string);
$str_word_count = str_word_count($string);
$str_rev = strrev($string);
$str_position = strpos("Hello from PHP from", "from");
$str_replace = str_replace("PHP", "JavaScrip", "Hello from PHP");

$web_page_string = "<h1>App Title</h1>";
$replaced_tag = str_replace("h1", "h2", $web_page_string);

$str_explode = explode(" ","This is a demo from PHP");

// printf("%s HTU students %s ","We ", "love PHP");

$str_lower_case_example_1 = strtolower("PHP is a Great Language!"); // return php is a great language!
$strtolowr_real_world_example = "great";
$str_user_input = "Great";
$username_com = strtolower($strtolowr_real_world_example) == strtolower($str_user_input); // true
$username_com_without_strtolower = $strtolowr_real_world_example == $str_user_input; // false

$str_uppercase = strtoupper('test'); // return TEST

$remove_white_space_from_the_sides = trim(' amazing class ');


// Numbers functions
$check_int = is_int(1); // true
$check_int = is_int('1'); // false
$check_number = is_numeric('1'); // true
$check_float = is_float(1); // false
$check_float = is_float(1.1); // true

// Casting.. Change data type to another while keeping the same value (If Applicable)
$casting_example = (int) '1';

// Mathmatical functions
$min_num = min(10,5,323,34,4); // 4
$max_num = max(10,5,323,34,4); // 323

$roun_num = round(1.6); // 2

$random_num = rand(); // 1352096504
$random_num = rand(0,10); // 1352096504

define("STR_CONST", 'hello all!');
define("STR_CONST2", 'hello all2!');
define("_STR", 'hello all3!');
define("ARR", [1,2,3]);
// const HI = 'TE';

// Concatination Assignment
$html_open_tag = '<h1>';
$html_closing_tag = '</h1>';
$html_title = "php lesson";
$html_final_tag = '';

$html_final_tag .= $html_open_tag; // <h1>
$html_final_tag .= strtoupper($html_title); // <h1>PHP LESSON
$html_final_tag .= $html_closing_tag; // <h1>PHP LESSON</h1>
// echo($html_final_tag);

$ternary_op = 19 > 18 ? 'old' : 'young'; // old


// ================================ If Statement ==================================
if (1 == 2) {
    // do something.. 
} else {
    // do another thing..
}

if (1 == 2) {
    // do something
} else if (1 != 3) {
    // do another thing
} else {
    // do another thing
}

// ================================ Switch Statement ==================================
$user_input = '';
switch($user_input){
    case 18:
        echo 'you are elegible to enter.';
        break;
    case 10:
        echo 'you\'re too young';
    default:
        // echo 'welcome to the party';
}

switch ($user_input) {
    case 10:
    case 20:
        echo 'Welcome!';
        break;
    case 30:
        echo "go back!";
    default:
        echo null;
        break;
}

// ================================ While Statement ==================================
$a = 0;
while ($a <= 10) {
    $a++;
    // do something..
}

do {
    # code...
} while ($a <= 10);


// ================================ for Statement ==================================
$arr = [1,2,3];
for ($i=0; $i < count($arr); $i++) { 
    # code...
}

// ================================ foreach Statement ==================================
$arr2 = [1,2,3];
$total = 0;
foreach ($arr2 as $num) {
    $total += $num;
}

foreach ($arr2 as $index => $num) {
    // var_dump($index);
    // var_dump($num);
}

// ================================ break/continue Statement ==================================
foreach ($arr2 as $num) {
    if ($num == 2){
        continue; // will skip to the next element. 
    }

    if ($num == 2) {
        break; // will break the loop and stop its excution. 
    }
}

// ================================ PHP Arrays ==================================
# Indexed Arrays
$indexedArray = [1,2,3,4];
$indexedArray = Array(1,2,3,4);

$total = $indexedArray[0] + $indexedArray[1]; // 1 + 2 = 3

# Associative Arrays
$AssociativeArr = ['name' => 'Ahmad', 'age' => 18, 'course' => 'PHP'];
$AssociativeArr = [
    'name' => 'Ahmad', 
    'age' => 18, 
    'course' => 'PHP'
];

$studend_obj = (object) $AssociativeArr; // this is how we cast to objects, and we use object like: $studend_obj->name.

// echo "Hi, my name is " . $AssociativeArr['name'] . ", my age is " . $AssociativeArr['age'] . ', and my course is ' . $AssociativeArr['course'];

$students = Array(
    [
        'name' => 'Ahmad', 
        'age' => 18, 
        'course' => 'PHP'
    ],
    [
        'name' => 'Khalid', 
        'age' => 20, 
        'course' => 'Python'
    ],
    [
        'name' => 'Layla', 
        'age' => 19, 
        'course' => 'PHP'
    ],
    [
        'name' => 'Fahed', 
        'age' => 25, 
        'course' => 'C++'
    ],
    [
        'name' => 'Khalil', 
        'age' => 30, 
        'course' => 'C'
    ],
);

unset($students[1]); // removes elements from arrays

foreach($students as $student) {
    // echo "Hi, my name is " . $student['name'] . ", my age is " . $student['age'] . ', and my course is ' . $student['course'] . '</br>';
}


// ================================ PHP Superglobals ==================================
// var_dump($GLOBALS);
var_dump($_SERVER);
// var_dump($_REQUEST);
// var_dump($_GET);
// var_dump($_POST);


die(); // 
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo "Hello " . "World"; // concatination ?>
    </h1>
    <h1>
        <?php echo 1 + 1; // PHP Operations ?>
        <?php echo 2 + 5; ?>
        <?php echo 2 / 5; ?>
        <?php echo 2 % 5; ?>
    </h1>
    <h1><?php echo $str1; ?></h1>
    <h1><?php echo $str1 . $str2; ?></h1>

    <h1> From testing function: 
        <?php echo testing_fun(); ?>
        <?php // echo $inside_function; ?>
    </h1>
</body>
</html> -->



