<?php
use Core\Database;
use Core\Validator;


//引入認證'Validator.php';
require  base_path('Core/Validator.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   



//認證字元超過1000字 顯示錯誤字串
    if (! Validator::string($_POST['body'],1,1000)) {
        $errors['body'] = '請短一點你寫情書呀！！';
    }

  
//
    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}




view("notes/create.view.php",[
    'heading' => 'Create Note',
    'errors' => $errors
 ]); 