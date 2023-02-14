<?php
class Database {
    public $connection;
    //Jarrfway的PDO設計方式是簡潔的設計方式 
 
//主要用於啟動session、資料庫連線，會在建立物件時自動執行其內容。可輸入參數，但參數值需要放在new類別的後方
function __construct($config,$username = 'root',$password= '')
   {
 
    $dsn = 'mysql:'.http_build_query($config,'',';');

    //    $dsn ="mysql:host={$config['host']}; port={$config['post']};dbname={$config['dbname']};charset={$config['charset']}";
       
                //初始化一个PDO对象 new PDO
      
//ATTR_DEFAULT_FETCH_MODE設置默認的提取模式
       $this -> connection = new PDO($dsn,$username,$password,[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
       ]);
   }

function query($query,$params =[])
   {


       //PHP mysqli prepare()函數 
       $statement = $this->connection ->prepare($query,$params);
    
       $statement -> execute($params);
       //PDO::FETCH_ASSOC：返回一個查詢為結果集合名稱的數組
       return $statement;
   }
}

