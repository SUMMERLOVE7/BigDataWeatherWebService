<?php
    include("login.php");

    $sql = "CREATE TABLE IF NOT EXISTS HUMIDTABLE (humiddate date NOT NULL, 
    region_code VARCHAR(4), relative_humidity FLOAT(4))";

    $res = mysqli_query($mysqli, $sql);
    
    /*
    if($res === TRUE){
        //echo "Tables are successfully created";
        print("Humid");
    }
    else{
        printf("Could not create table:%s\n", mysqli_err($mysqli));
    }
    */
?>