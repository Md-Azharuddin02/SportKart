<html>  
<head>  
    <title>PHP login system</title>  
    
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head> 
<style>
body{   
    background: white;  
}  
#frm{  
    border: #306eff 1px;
    width: 37%;
    border-radius: 2px;
    margin: 150px auto;
    background: #ccefff;
    padding: 80px;  
}  
#btn{  
    color: #fff;
    background: #337ab7;
    padding: 7px;
    width: 40%;
    margin-left: 30%;
    justify-items: center;
    align-items: center;
}  

.btn{

}
#id{
    
}

</style> 
<body> 

    <div id = "frm">  
        <h1>Login</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p> 
<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>			
           
			
<div class="container" style="background-color:#f1f1f1">
     <p> <th width="20%"><front color="blue" size="4"><a href="REG22.php">Sign Up</a></front></th></p>
         <p> <span class="psw">Forgot <a href="forgot.php">password?</a></span></p>
		   <p>     
                <input type =  "submit" id = "btn" value = "Login" class= btn />  
            </p> 
			
		 
      
    </div>			
        </form>  
    </div>  
    
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>    