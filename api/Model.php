<?php
    require "Database.php";
    
    $db = new Database;
    echo "<pre>";
    var_dump($db);

    $selectQuery = "select * from students";
    $stmt = $db->query($selectQuery);
    $res = $stmt->fetch();
    echo "<pre>";
    print_r($res);

