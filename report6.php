<html>
<head>
	<title>Report 6</title>
</head>
<body>
<center>	


<div align = "center">
<h3>All company information:</h3>
<table border="2" width="600">
<tr>
<th>company_id</th>
<th>company_field_id</th>
<th>agent_id</th>
<th>headquarter_id</th>
<th>company_name</th>
</tr>


<?php

include 'connect.php';

$sql = "select company_id, company_field_id,
        agent_id, headquarter_id, company_name
  from company";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["company_id"];
	$showtwo = $row["company_field_id"];
	$showthree = $row["agent_id"];
	$showfour = $row["headquarter_id"];
	$showfive = $row["company_name"];
	echo "<tr>
			<td>$showone</td>
			<td>$showtwo</td>
			<td>$showthree</td>
			<td>$showfour</td>
			<td>$showfive</td>
		</tr>";
   }
}
?>
</table>
</div>

<h4 align="center"> 
<a href='report5.php'>Previous</a>
<a href='index.html'>Back</a>
<a href='report7.php'>Next</a>
</h4>

</body>
</html>