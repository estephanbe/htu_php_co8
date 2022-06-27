<?php 


// get list of files from pages.md
// new file name
// new file contents
// check if file already exists
// write out the file (create the file)
// write out the files list

$pages_raw = file_get_contents('./pages.md');
$pages = explode(',', $pages_raw);
$file_name = $_POST['name'];
$file_content = $_POST['content'];

foreach ($pages as $key => $page) {
    $page = strtolower(trim($page));
    $pages[$key] = $page;
    if ($page == strtolower($file_name)){
        die('file already exists!');
    }
}

file_put_contents('./pages/' . strtolower($file_name) . '.md', $file_content);

file_put_contents('./pages.md', $pages_raw . ', ' . $file_name);

header("Location: " . $_SERVER['HTTP_REFERER']);




