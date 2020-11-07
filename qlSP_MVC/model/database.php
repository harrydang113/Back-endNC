<?php
    $dsn = 'mysql:host=localhost;dbname=dbsp';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
        $db->exec("SET CHARACTER SET utf8");
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>