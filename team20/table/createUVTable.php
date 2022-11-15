<?php
    include("login.php");

    /*
    $sql = "CREATE TABLE IF NOT EXISTS UVTABLE (uvdate INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        province VARCHAR(10), city VARCHAR(15), uvrate FLOAT(4))";
    */
    $sql = "CREATE TABLE IF NOT EXISTS UVTABLE (uvdate date NOT NULL, 
    region_code VARCHAR(4), insolation FLOAT(4))";


    $res = mysqli_query($mysqli, $sql);
    /*
    if($res === TRUE){
        //echo "Tables are successfully created";
        print("uv");
    }
    else{
        printf("Could not create table:%s\n", mysqli_err($mysqli));
    }
    */
?>