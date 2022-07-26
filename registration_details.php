<?php
    $username = $_POST['username'];
	
	
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//Database connection
	
	$conn=new mysqli('localhost','root','','database123');
	if($conn-> connect_error)
	{
die('connection Failed : '.$conn->connect_error);
}
else{
	
	
	 $stmt=$conn-> prepare("insert into entry_details (username, phone, email, password)
	value(?,?,?,?)");
	$stmt->bind_param('ssss',$username,$phone,$email,$password);
	
	$stmt->execute();
    echo "Registration succesfully...";
	header("Location:login5.php"); 
   

}
?>

	