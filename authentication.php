<?php      
session_start();
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  

      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from userregistration where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_unset();
            
            $_SESSION["sessionid"] = "sdfhoaspdifhohefwdnsasilfn3216549456sdfsadf";

            header ("Location: /calculator/index1.php");
    
        }  
        else{    
                     $_SESSION["invalid_login"] = "Invalid Email Or Password.";
                     
            header ("Location: /calculator/login.php");
   
        }
?>