<?php
    $host = 'localhost';
    $user = 'team20';
    $pw = 'team20';
    $db = 'team20';


    $connection = new mysqli($host, $user, $pw, $db);

    if($connection){
        echo "Connection established";
    }
    else{
        printf("Could not connect: %s\n", mysqli_error($connection));
    }
    mysqli_close($connection);
?>