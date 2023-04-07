<?php
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);


$currentUserId = 5;
//如果$_SERVER REQUEST_METHOD']=== 'POST'
// 進入刪除程式頁面
if($_SERVER['REQUEST_METHOD']=== 'POST'){

  $note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
    ])->findOrFail();



    //authorize laravel授權 使用者id等於 $currentUserId 才可觀看文章 
    //跟限定已登入者可觀看同樣意思
    authorize($note['user_id']=== $currentUserId);


//刪除notes資料表 id
$db->query('delete from notes where id = :id',[
'id' => $_GET['id']
]);

header('location: /notes');
exit();

} else {

  
  
  
  
  //DB
  
  $note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
    ])->findOrFail();
    //authorize laravel授權 使用者id等於 $currentUserId 才可觀看文章 
    //跟限定已登入者可觀看同樣意思
    authorize($note['user_id']=== $currentUserId);
    
    
    // if ($note['user_id'] !== $currentUserId) {
      //   abort(Response::FORBIDDEN);
      // }
      
      
      
      
      view("notes/show.view.php",[
        'heading' => 'Note',
        'note' => $note
      ]);
      
    }