<?php
    header('Access-Control-Allow-Origin:*');
    $name = $_GET['name'];
    $id = $_GET['id'];

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

    $checkinfo = "SELECT * FROM sample_user WHERE id = $id";
    $userinfo = $mysqli->query($checkinfo);
    if(empty($userinfo)){
        echo "未匹配到此人($name)，请重新输入";
    }else{
        $info = $userinfo->fetch_array(MYSQLI_ASSOC);

        if($info['name'] != $name){
            echo "学号($id)与姓名($name)不匹配";
        }else{
            if($info['done'] == 1){
                echo "您($name)今日已签到";
            }else{
                $updatedone = "UPDATE sample_user SET done = 1 WHERE id = $id";
                $mysqli->query($updatedone);
                echo "您($name)签到成功";
            }
        } 
    }
?>