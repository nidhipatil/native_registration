<?php
 
// connect to database
 $db = mysqli_connect('localhost','root','','Register');

//check db connection
// if ($db->connect_error) {
 //	die("connection failed:".$db);
// }
 //else{
 //	echo "connection";
 //}


 //if save button is clicked
 if (isset($_POST['submit'])) {
 	 $id = $_POST['id'];
 	$Name = $_POST['name'];
 	$Email =$_POST['email'];
 	$Password =$_POST['password'];
 	$Address =$_POST['address'];
 	$phone=$_POST['phone'];
 	$Gender =$_POST['gender'];
 	$Country=$_POST['country'];
 	$Date =$_POST['date'];
 	$Hobby = implode(',',$_POST['hobby']);
	$checkedSkills = implode(',',$_POST['skill']);
   

$query="INSERT INTO login (Name,Email,Password,Address,phone,Gender,Country,DOB,Hobby,skill) VALUES ('$Name','$Email','$Password','$Address','$phone','$Gender','$Country','$Date','$Hobby','$checkedSkills')";
 	mysqli_query($db,$query);
 	header("location:index.php");
 }

  $results = mysqli_query($db,"SELECT * FROM login");
 ?>