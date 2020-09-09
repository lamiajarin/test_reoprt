<?php include'header.php';?>


  <div style="padding: 9px ;border: 0px;">
    <div class="table" >
      <div id="printableArea">
        <h2 align="center"> Doctor Information set </h2>
        <h3 align="center">Confirm To Print </h3>
        <table border="1" align="center">
          
          <?php
           $id = $_GET["id"];
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

          $sql = "SELECT * FROM tb_d WHERE `Id` = '$id'";
          $result = mysqli_query($conn, $sql);

          if ($result->num_rows > 0) {
              echo "<table align=center><tr><th>Id</th><th>Name</th><th>Designation</th><th>Department</th><th>Contact</th></tr>";
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<tr><td>" . $row["Id"]. "</td><td>" . $row["Name"]."</td><td>" . $row["Designation"]."</td><td>".$row["Department"]."</td><td>".$row["Contact"]."</td></tr>";

              }
              echo "</table>";
          }
          else {
              echo "0 results";
          }
          mysqli_close($conn);
          ?>
        </table>
      </div>

      <br><br>
      <center><input type="button" onclick="printDiv('printableArea')" value="Print" /></center>

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
 <?php include'footer.php';?>