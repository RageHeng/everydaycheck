<?php
    $host = "localhost";
    $username = "root";
    $dbname = "sample";
    $passwd = "";
    $port = 3306;
    $mysqli = new mysqli($host,$username,$passwd,$dbname,$port);

    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $clearall = "UPDATE sample_user SET done = 0";
    $check = $mysqli->query($clearall);
    if(!$check){
        echo "初始化失败";
    }else{
        echo "ok";
    }
    $mysqli->close();
?>