<?php
    //include("login.php");

    $sql = "CREATE TABLE HUMIDTABLE (humiddate INT(8), regioncode VARCHAR(10), humidrate NUMERIC)";

    $res = mysqli_query($mysqli, $sql);
    
    if($res === TRUE){
        //echo "Tables are successfully created";
        print("Humid");
    }
    else{
        printf("Could not create table:%s\n", mysqli_err($mysqli));
    }
?>