

      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "db_hms";
        $connected = false;
        $connection = mysqli_connect($servername, $username, $password, $dbName);
        if ($connection) {
          $connected = true;
        } else {
          die("<script type='text/javascript'>alert('Connection Failed!')</script>");
        }
		$SQL = "SELECT tb_p.pid AS Id, tb_p.pname AS Name, tb_p.page AS Age, tb_p.pgender AS Gender, tb_p.pcontact AS Contact, tb_d.did AS Id, tb_d.dname AS Name, tb_d.ddesignation AS Designation, tb_d.ddepartment AS Department, tb_d.dcontact AS Contact, tb_t.tid AS Id,tb_t.tname AS Name,tb_t.ttype AS Type FROM (((tb_p INNER JOIN tb_d ON tb_p.pid = '1' AND tb_d.did = '1') INNER JOIN tb_t ON tb_t.tid = '1') )";
 $result = mysqli_query($connection,$SQL)
        if (mysqli_num_rows($result) > 0 && $connected) {
          echo "<table><tr><th>Id</th><th>Name</th><th>Age</th><th>Gender</th><th>Contact</th><th>Id</th><th>Name</th><th>Designation</th><th>Department</th><th>Contact</th><th>Id</th><th>Name</th><th>Type</th></tr>";
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["Id"]."</td><td>".$row["Name"]."</td><td>".$row["Age"]."</td><td>".$row["Gender"]."</td><td>".$row["Contact"]."</td><td>".$row["Id"]."</td><td>".$row["Name"]."</td><td>".$row["Designation"]."</td><td>".$row["Department"]."</td><td>".$row["Contact"]."</td><td>".$row["Id"]."</td><td>".$row["Name"]."</td><td>".$row["Type"]."</td></tr>";
          }
          echo "</table>";
        }
        mysqli_close($connection);
      ?>
    </div>
    <button onclick="printTable()">Print Table</button>
  </div>



  <script type="text/javascript">
    function printTable() {
    var url = "printReport.php";
    window.open(url, "_blank");
  }
  </script>
