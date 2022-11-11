<?php
    
    $mysqli = mysqli_connect("localhost", "team20", "team20", "team20");
    
    if(mysqli_connect_errno()){
        printf("Connection failed : %s\n", mysqli_connect_error());
        exit();
    }
    else{

        $sql = "CREATE TABLE UVTABLE (uvdate INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        province VARCHAR(10), city VARCHAR(15), relative_humidity NUMERIC)";

        $res = mysqli_query($mysqli, $sql);
        
        if($res === TRUE){
            echo "UVTable successfully created";
        }
        else{
            printf("Could not create table:%s\n", mysqli_err($mysqli));
        }
        mysqli_close($mysqli);
    }
?>