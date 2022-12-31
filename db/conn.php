<?php
     $host = 'localhost';
     $db = 'attendance_db';
     $user = 'root';
     $pass = '';
     $charset=  'utf8mb4';
     //dsn = data source name , PDO is more secure to SQl injection
     $dsn  = "mysql:host=$host;dbname=$db;charset=$charset;";
     try{
        $pdo = new PDO($dsn,$user,$pass); //class 
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     }
     catch(PDOException $e)
     {
        throw new PDOException($e->getMessage());
     }
     require_once 'crud.php';
     $crud = new crud($pdo);
?>