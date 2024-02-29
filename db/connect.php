<?php
    $host = "localhost";
    $username = "root";
    $password = "123";
    $db = "employeesdb";
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

    try{
        $pdo = new PDO($dsn, $username, $password);
        // echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    require_once "controller.php";
    require_once "user.php";

    $controller = new Controller($pdo);
    $user = new User($pdo);

    $user->insertUser('admin','123');
?>