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
		$age = $_POST['Age'];
		$gender = $_POST['Gender'];
		$contact = $_POST['Contact'];


		$sql = "UPDATE `tb_p` SET `Name` = '$name',`Age` = '$age', `Gender` = '$gender', `Contact` = '$contact' WHERE `tb_p`.`Id` = '$id'";

		if ($conn->query($sql) == TRUE) {
		     header('Location:view_p.php');
		} else {
		    echo "<center><h2>There is a problem to Update!!</h2></center>";
		}
	}
	?>