<?php
    $dsn = 'mysql:host=localhost;dbname=campers_exclusive';
    $username = 'root';
    $password = '123';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e){
        include('database_error.php');
        exit();
    }
?>