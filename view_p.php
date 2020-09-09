<?php include 'header.php'; ?>

<div id="printableArea">
<h2 align=center><big>Patient Information</big></h2> 
<div style="padding: 100px; " >


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_hms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tb_p";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center> <tr> <th>Id</th> <th>Name</th> <th>Age</th> <th>Gender</th> <th>Contact</th><th>other</th></tr>";
    // output data of each row
     while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Id"]."</td><td>".$row["Name"]."</td><td>".$row["Designation"]."</td><td>".$row["Department"]."</td> <td>".$row["Contact"]."</td><td>"."<a href='d_update.php?id=".$row["Id"]."'><b>Update</a>"." / "."<a href='d_dalete.php?id=".$row["Id"]."'>Delete</a>"." / "."<a href='d_print.php?id=".$row["Id"]."'>Print</b></a>"."</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>
<center><input type="button" onclick="window.location.href='p_all_print.php'" value="Print" /></center>

      <script>
      function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;
          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
      }
    </script>
</div>

</div>

<?php include 'footer.php'; ?>
</boby>
</html>