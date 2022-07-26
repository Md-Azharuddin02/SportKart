<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from entry_details where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            // echo "<a href='home.php'><h1><center> PRODUCT </center></a></h1>"; 
            header("Location:home.php"); 
        }  
        else{  
             
            echo "<h1> Login failed. Invalid username or password.</h1>";
            echo "<a href= 'login5.php'><h3>Back to login page</h3></a>";
            // echo "<a href='home.php'><h1><center>Back to login page</center></a></h1>";
            // header("Location: login5.php");
	      
        }     
?>  