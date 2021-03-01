<?php
    $dsn = 'mysql:host=localhost;dbname=todolist';
    $username = 'fhsu_user';
    //$password = 'pa55word';

    try {
        $db = new PDO($dsn, $username);
        //$db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message .= $e->getMessage();
        include('error.php');
        exit();
    }