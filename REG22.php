<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
}  
.container {  
  margin: 200px 403px;
    padding: 50px 50px;
    background-color: #ccefff;
    border-radius: 10px;
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #337ab7;
    color: #fff;
    padding: 16px 20px;
    margin: 10px 131px;
    border-radius: 10px;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
    align-items: center;
  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form action="registration_details.php" method="post">  
  <div class="container">  
  <center>  <h1>Sign Up</h1> </center>  
  <hr>  
  <label> Name </label>   
<input type="text" name="username" placeholder= "Enter Your Name" size="15" required />   
   

<label>   
Phone :  
</label>  
<input type="text" name="phone" placeholder="phone no." size="10"/ required>   
  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  
  
    <label for="passwoed"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="password" required>

  <label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="retype_password" required> 

    <button type="submit" name="save" class="registerbtn">Register</button>  

  
</form>  
</body>  
</html>