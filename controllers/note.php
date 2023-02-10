<?php
$config = require('config.php');
$db = new Database($config['database']);

 $heading = 'Note';

 $id = $_GET['id'];
//DB
 $notes = $db->query('select * from notes where id = ?', [$id])->fetch();
 //  $notes = $db->query('select * from notes where id = id', ['id' => $id])->fetchAll();
//  $notes = $db->query('select * from notes where id = :id', [':id' => $id])->fetchAll();

require "views/notes.view.php";