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
<form action="adress2.php" method="post">  
  <div class="container">  
  <center>  <h1>Fill Your Address</h1> </center>  
  <hr>  
  <label> Enter Your Name </label>   
<input type="text" name="name" placeholder= "Enter Your Name" size="15" required />   
   

<label>   
Phone:  
</label>  
<input type="text" name="phone" placeholder="Enter Your Whatsapp" size="10"/ required>   
  
<label for="email"><b>Address</b></label>  
 <input type="text" placeholder="Enter Your Address" name="address" required>  

 <label for="email"><b>Pin Code</b></label>  
 <input type="text" placeholder="Enter YOur Pin Code" name="pincode" required>  
  
    <label for="passwoed"><b>City</b></label>  
    <input type="text" placeholder="Enter Your City" name="city" required>

  <label for="psw-repeat"><b>State</b></label>  
    <input type="text" placeholder="Enter Your State" name="state" required> 

    <label for="email"><b>Landmark</b></label>  
 <input type="text" placeholder="Landmark" name="landmark" required>

    <button type="submit" name="save" class="registerbtn">Proceed</button>  

  
</form>  
</body>  
</html>