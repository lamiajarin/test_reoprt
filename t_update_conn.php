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
		$type = $_POST['Type'];


		$sql = "UPDATE `tb_t` SET `Name` = '$name',`Type` = '$type' WHERE `tb_t`.`Id` = '$id'";

		if ($conn->query($sql) == TRUE) {
		     header('Location:view_t.php');
		} else {
		    echo "<center><h2>There is a problem to Update!!</h2></center>";
		}
	}
	?>