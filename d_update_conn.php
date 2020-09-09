<?php
if(isset($_POST['update'])){
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_hms";

		$conn = new mysqli($hostname,$username,$password,$dbname);



		if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}


		$id = $_POST['Id'];
		$name = $_POST['Name'];
		$designation = $_POST['Designation'];
		$department = $_POST['Department'];
		$contact = $_POST['Contact'];


		$sql = "UPDATE `tb_d` SET `Name` = '$name',`Designation` = '$designation', `Department` = '$department', `Contact` = '$contact' WHERE `tb_d`.`Id` = '$id'";

		if ($conn->query($sql) == TRUE) {
		     header('Location:view_b.php');
		} else {
		    echo "<center><h2>There is a problem to Update!!</h2></center>";
		}
	}
	?>