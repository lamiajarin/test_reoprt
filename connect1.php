<?php include'header.php';?>
	   <center>
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="db_hms";
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("connection failed");
	}
	echo "successfully connected";
	$sql="INSERT INTO tb_d(	Id,Name,Designation	,Department,Contact) VALUES('$_POST[Id]', '$_POST[Name]', '$_POST[Designation]', '$_POST[Department]', '$_POST[Contact]')";
	
	If(mysqli_query($conn,$sql)){
		echo "Record Inserted Successfully";
	}else{
	echo "Error".$sql."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>
</center>
 <?php include'footer.php';?>