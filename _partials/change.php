<?php
require ('../_inc/config.php');
$date = $_POST['date'];
$name = $_POST['name'];
$action = $_POST['action'];

$existhmm = $database->select('users', 'name', ['name' => $name, 'day' => $date]);
if (!$existhmm[0]) {
    $id = $database->insert('users', ['name' => $name, 'action' => $action, 'day' => $date]);
    if ($id) {
    	echo "new created";
        die();
    }
} else {
    $id = $database->update('users', ['action' => $action], ['name' => $name, 'day' => $date]);
    if ($id) {
    	echo "exist updated";
        die();
    }
}