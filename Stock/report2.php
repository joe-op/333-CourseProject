<html>
<head>
	<title>Report 2</title>
</head>
<body>
<center>	


<div align = "center">
<h3>Find the value of stocks in a specific field:</h3>
<table border="2" width="600">
<tr>
<th>Date</th>
<th>Close</th>
<th>field_name</th>
<th>stock_id</th>
</tr>


<?php

include 'connect.php';

$sql = "select date, close, field_name, a.stock_id            
       from stock_report as a, company as x, company_field
       where x.company_id = a.company_id      
       and company_field.field_id = x.company_field_id
       and close in(
           select max(close) from stock_report as b, company as y
           where b.company_id = y.company_id
           and a.stock_id = b.stock_id
           and y.company_field_id = x.company_field_id)
       and date in(
           select max(date) from stock_report as c
           where a.company_id = c.company_id);";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["date"];
	$showtwo = $row["close"];
	$showthree = $row["field_name"];
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
<a href='report1.php'>Previous</a>
<a href='index.html'>Back</a>
<a href='report3.php'>Next</a>
</h4>

</body>
</html>