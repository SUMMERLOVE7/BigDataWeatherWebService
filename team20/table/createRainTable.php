<?php
    include("login.php");
   
    $sql = "CREATE TABLE IF NOT EXISTS PRECIPITAIONTABLE (raindate date NOT NULL, 
    region_code VARCHAR(4), precipitation FLOAT(4))";

    $res = mysqli_query($mysqli, $sql);
    
    /*
    if($res === TRUE){
        //echo "Tables are successfully created";
        print("rain");
    }
    else{
        printf("Could not create table:%s\n", mysqli_err($mysqli));
    }
    */
?>