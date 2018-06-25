<html>
<head>
	<title>Report 1</title>
</head>
<body>
<center>	


<div align = "center">
<h3>Determine the value of stocks in a specific location:</h3>
<table border="2" width="600">
<tr>
<th>Date</th>
<th>Close</th>
<th>headquarter_id</th>
<th>stock_id</th>
</tr>


<?php

include 'connect.php';

$sql = "select date, close, company.headquarter_id, a.stock_id
       from stock_report as a, company, headquarter
       where company.company_id = a.company_id
       and headquarter.headquarter_id = company.headquarter_id
       and date in(
           select max(date) from stock_report as b
           where a.company_id = b.company_id);";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["date"];
	$showtwo = $row["close"];
	$showthree = $row["headquarter_id"];
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
<a href='index.html'>Back</a>
<a href='report2.php'>Next</a>
</h4>

</body>
</html>