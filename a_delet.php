<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_hms";

$conn = new mysqli($hostname,$username,$password,$dbname);
if($conn->connect_error) {
		    die("Connection Fail".$conn->connect_error);
		}
		$id = $_GET["id"];
$sql = "DELETE FROM `tb_p` WHERE `tb_p`.`Id` = '$id'";
if ($conn->query($sql) == TRUE) {
    header('Location: view_p.php');
} else {
         echo "<center><h2>Problem To DELETE</h2></center>";
}

?>