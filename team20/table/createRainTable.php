<?php
    //include("login.php");
   
    $sql = "CREATE TABLE RAINTABLE (raindate INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT, province VARCHAR(10), city VARCHAR(15), relative_humidity NUMERIC, rain NUMERIC)";

    $res = mysqli_query($mysqli, $sql);
    
    if($res === TRUE){
        //echo "Tables are successfully created";
        print("rain");
    }
    else{
        printf("Could not create table:%s\n", mysqli_err($mysqli));
    }
?>