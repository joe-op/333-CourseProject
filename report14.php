<html>
<head>
	<title>Report 14</title>
</head>
<body>
<center>	


<div align = "center">
<h3>Company stock value by agent phone:</h3>
<table border="2" width="600">
<tr>
<th>date</th>
<th>close</th>
<th>company_id</th>
<th>stock_id</th>
</tr>


<?php

include 'connect.php';

$sql = "select date, close, a.company_id, a.stock_id
    from stock_report as a,
    company, agent
    where date = (
        select max(date)
	from stock_report as b
	where a.company_id = b.company_id)
    and a.company_id = company.company_id
    and company.agent_id = agent.agent_id
    and agent_phone = '322-810-1757 x83106'";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["date"];
	$showtwo = $row["close"];
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
<a href='report13.php'>Previous</a>
<a href='index.html'>Back</a>
<a href='report15.php'>Next</a>
</h4>

</body>
</html>