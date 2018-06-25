<html>
<head>
	<title>Report 4</title>
</head>
<body>
<center>	


<div align = "center">
<h3>Show first stock value for each company:</h3>
<table border="2" width="600">
<tr>
<th>date</th>
<th>open</th>
<th>Company ID</th>
<th>Stock ID</th>
</tr>


<?php

include 'connect.php';

$sql = "select date, open, company_id, a.stock_id
       from stock_report as a
       where date = (
             select min(date)
             from stock_report as b
             where a.company_id = b.company_id);";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["date"];
	$showtwo = $row["open"];
	$showthree = $row["company_id"];
	$showfour = $row["stock_id"];
	echo "<tr>
			<td>$showone</td>
			<td>$showtwo</td>
			<td>$showthree</td>
			<td>$showfour</td>
		</tr>";
   }
}
?>
</table>
</div>

<h4 align="center"> 
<a href='report3.php'>Previous</a>
<a href='index.html'>Back</a>
<a href='report5.php'>Next</a>
</h4>

</body>
</html>