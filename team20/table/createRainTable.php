<?php
    //include("login.php");
   
    $sql = "CREATE TABLE RAINTABLE (raindate INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT, regioncode VARCHAR(10), rainrate NUMERIC)";

    $res = mysqli_query($mysqli, $sql);
    
    if($res === TRUE){
        //echo "Tables are successfully created";
        print("rain");
    }
    else{
        printf("Could not create table:%s\n", mysqli_err($mysqli));
    }
?>