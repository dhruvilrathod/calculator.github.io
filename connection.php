<?php      
    $host = "remotemysql.com";  
    $user = "8FHnTr3R3W";  
    $password = 'oq6pmjDHr1';  
    $db_name = "8FHnTr3R3W";  
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>