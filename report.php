<?php include 'header.php'; ?>

<div id="printableArea">
<h2 align=center><big>Patient Information</big></h2> 
<div style="padding: 100px; " >


		<div id="print">

				<div style="margin-left:250px;margin-top:60px;margin-right:190px;">
			<?php

$conn = mysqli_Connect('localhost','root','','db_movies');
$sql="SELECT *  FROM tb_d
  LEFT OUTER JOIN tb_p ON tb_d.d_Id = tb_p.p_Id
  LEFT OUTER JOIN  tb_t ON tb_p._Id = tb_t.t_Id";
$result = mysqli_query($conn,$sql);



if ($result->num_rows > 0)
{

while ($accused=mysqli_fetch_assoc($result)) 
{
	echo"<div style='position:relative; margin-top:80px;margin-bottom:0px;''>
			<center><h3>Test Hospital</h3></center>
			<center><h3>6,East Road,Dhaka-1230</h4></center>
			<center><h4>Contact Number: 01312345678</h4></center>
		</div>";
		echo"<table style='margin-left:0px' border='1'>                              //ekhan theke
  <tr style='color:blue'>
	<th>Movie ID</th>
	<th>Hall Name</th>
	<th>Type</th>
	<th>Start Time</th>
	<th>End Time</th>
    <th>Price</th>
  </tr>";

	echo "<p style='text-align:left;'>Ticket Number :".$accused['SN']."</p>";
	echo "<p style='text-align:left;'>Customer ID :".$accused['C_ID']."</p>";
	echo"<p style='text-align:right;font-size:26px;font-weight:900;font-style: oblique;'>".$accused['M_Name']."</p>";
	echo "<tr>";
	echo"<td>".$accused['M_ID']."</td>";
	echo"<td>".$accused['H_Name']."</td>";
	echo"<td>".$accused['Type']."</td>";
	echo"<td>".$accused['ST']."</td>";
	echo"<td>".$accused['ET']."</td>";
	echo"<td>".$accused['Price']."</td>";
	echo "</tr>";
	echo "</table>";
	echo "<p style='text-align:left;'>Sold By :".$accused['S_Name']."</p>";
	echo "<p style='text-align:left;'>Designation :".$accused['Designation']."</p>"; //ei porjonto change korte hobe

}
}
else
{
	echo "Conn failed";
}
?> 
</div>
</div>
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