<?php      
    include('connection.php');  
    $name = $_POST['name'];
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
      
        $sql = "insert into login values($email, $password, $name)";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header ("Location: http://localhost/calculator/login.html");
    
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>