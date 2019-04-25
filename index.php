<?php

$servername = "mariadb";
    $username = "test";
    $password = "test";
    $database = "t35t";

    try {
        //$conn = new PDO("mysql:host=".$servername.";dbname=" . $database, $username, $password);
        $conn = new PDO("mysql:host=mariadb;dbname=t35t;charset=utf8", "test", "test");

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $conn->prepare("SELECT * FROM datas;");
        $sql->execute();

        while($result = $sql->fetch(PDO::FETCH_ASSOC)){
            echo $result['usernames'].'<br>';
        }

    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
