<?php include'header.php';?>
   
	   <center>
	<div class="container-body">
    <div class="container-form">
      <h2 class="form-title">Search from Patient Table</h2>
     
      <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="text" name="searchKeyword" placeholder="Enter Patient Id.." style="margin-top: 15px;width:500px;height:45px;">
        <input type="submit" value="Search">
      </form>
    </div>
    <div class="container-search">
	 <br><br>   <br><br>   <br><br>   
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "db_hms";
        $connection = mysqli_connect($servername, $username, $password, $dbName);
        if (!$connection) {
          die("Connection Failed!");
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $searchKeyword = $_POST["searchKeyword"];
          if ($searchKeyword) {
            $SQL = "SELECT * FROM tb_p WHERE Id = '".$searchKeyword."'";
            $result = mysqli_query($connection, $SQL);
            if (mysqli_num_rows($result) > 0) {
               echo "<table><tr><th>Id</th><th>Name</th><th>Age</th><th>Gender</th><th>Contact</th></tr>";
               while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr><td>".$row["Id"]."</td><td>".$row["Name"]."</td><td>". $row["Age"]."</td><td>".$row["Gender"]."</td><td>".$row["Contact"]."</td></tr>";
               }
               echo "</table>";
            } else {
                 echo "0 results";
            }
          }
        }
        mysqli_close($connection);
      ?>
	 
    </div>
  </div>
    </center>
<?php include'footer.php';?>