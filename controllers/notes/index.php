<?php
//引進namespace Core的calss Database
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);


$notes = $db->query('select * from notes ')->get();
$users = $db->query('select * from users ')->get();


view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);