// 
	<?php include'header.php';?>


<!DOCTYPE html>
<html>
<head>		
	<title></title>
</head>
<body>
	<div style="padding: 30px;">
	<center>
		<h2 style="font-size: 35px;">Test Information Update</h2>
		<?php
		$id = $_GET["id"];
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "db_hms";

       
          $conn = mysqli_connect($servername, $username, $password, $dbname);
       
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          $sql = "SELECT * FROM tb_t WHERE `Id` = '$id'";
          $result = mysqli_query($conn, $sql);

          if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          ?>
			<form action="t_update_conn.php" method="post">
			   Id<br>
			  <input type="text" name="Id" value="<?php echo $row['Id']?>" readonly="">
			  <br><br>
			   Name<br>
			  <input type="text" name="Name" value="<?php echo $row['Name']?>">
			  <br><br>
			   Type<br>
			  <input type="text" name="Type" value="<?php echo $row['Type']?>">
			  <br><br>
			  <input type="submit" value="Update" name="update">
			   <br><br>
			</form>
	</center>
	<?php
}
}
	mysqli_close($conn);
          ?>
</div>

</body>
</html>
 <?php include'footer.php';?>