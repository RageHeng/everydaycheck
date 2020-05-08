<?php
    header('Access-Control-Allow-Origin:*');
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

    $findnotdone = "SELECT * FROM sample_user WHERE done = 0";
    $notdoneinfo = $mysqli->query($findnotdone);
    if(!$notdoneinfo){
        echo "失败";
    }else{
        if(empty($notdoneinfo) || $notdoneinfo->fetch_row() == NULL){
            echo "全部完成";
        }else{
            while($row = $notdoneinfo->fetch_row()){
                if($row == NULL){
                    echo "全部完成";
                }else{
                    echo $row[1].',';
                }
            } 
        }
    }
    $mysqli->close();
?>