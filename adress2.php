<?php
    $name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
    $city = $_POST['city'];
	$state = $_POST['state'];
	$landmark = $_POST['landmark'];
	
	//Database connection
	
	$conn=new mysqli('localhost','root','','database123');
	if($conn-> connect_error)
	{
die('connection Failed : '.$conn->connect_error);
}
else{
	 $stmt=$conn-> prepare("insert into address_det (name, phone, address, pincode, city, state, landmark)
	value(?,?,?,?,?,?,?)");
	$stmt->bind_param('sssssss',$name,$phone,$address,$pincode,$city,$state,$landmark);
	
	$stmt->execute();
    // echo "Registration succesfully...";
	header("Location:payment.php"); 
   

}
?>

	