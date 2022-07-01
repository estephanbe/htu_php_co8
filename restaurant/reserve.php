<?php 
include './functions.php';
htu_auth();

if(!isset($_GET['id']) && empty($_GET['id']))
    die('id not set');

if(!isset($_GET['action']) && empty($_GET['action']))
    die('Action is not set');

if(!isset($_GET['r']) && empty($_GET['r']))
    die('Time slot is not set');

$table = get_table($_GET['id']);
if(empty($table))
    die('table was not found');

$id = $_GET['id'];

switch ($_GET['action']) {
    case 'r':
        $tables = get_tables();
        foreach ($tables as $key => $table) {
            if($table->id == $id){
                switch ($_GET['r']) {
                    case '1':
                        $tables[$key]->r1 = true;
                        break;
                    case '2':
                        $tables[$key]->r2 = true;
                        break;
                    case '3':
                        $tables[$key]->r3 = true;
                        break;
                }
            }
        }
        break;
    
    case 'c':
        $tables = get_tables();
        foreach ($tables as $key => $table) {
            if($table->id == $id){
                switch ($_GET['r']) {
                    case '1':
                        $tables[$key]->r1 = false;
                        break;
                    case '2':
                        $tables[$key]->r2 = false;
                        break;
                    case '3':
                        $tables[$key]->r3 = false;
                        break;
                }
            }
        }
        break;
}

file_put_contents('./data/tables.json', json_encode($tables));
header('Location: ./table.php?id=' . $id);