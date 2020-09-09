<?php include'header.php';?>
	   <center><?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="db_hms";
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("connection failed");
	}
	echo "successfully connected";
	$sql="INSERT INTO tb_p (Id,Name,Age,Gender,Contact) VALUES('$_POST[Id]', '$_POST[Name]', '$_POST[Age]', '$_POST[Gender]', '$_POST[Contact]')";
	
	If(mysqli_query($conn,$sql)){
		echo "Record Inserted Successfully";
	}else{
	echo "Error".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>
 <?php include'footer.php';?>