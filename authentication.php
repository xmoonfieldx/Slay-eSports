<?php      
    include('connect.php');  
    $user = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection 
        $sql = "select *from login where USERNAME = \"".$user."\" and PASSWORD = \"".$password."\";";  
        $result = $conn->query($sql); 
        if (!empty($result) && $result->num_rows > 0) { 
                include("home.html"); 
        }  
        else{  
            include('login.php');
        }     
?>