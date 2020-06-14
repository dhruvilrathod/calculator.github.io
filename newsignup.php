<?php      
    include('connection.php');  
    $name = $_POST['name'];
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
       
        $sql = "insert into userregistration values('$email', '$password', '$name')";  
        
          if (mysqli_query($con, $sql)) {
                         echo "<script type='text/javascript'> alert('Account Created Successfully. Please Log In.'); location.href='/calculator/login.php' </script>";

        } 
    else {
        echo "<script> alert('Account Already Exists. Please Log In.'); location.href='/calculator/login.php'</script>";
    }
        mysqli_close($con);            
?>