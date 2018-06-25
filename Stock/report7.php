<html>
<head>
	<title>Report 7</title>
</head>
<body>
<center>	


<div align = "center">
<h3>Company information based on field name:</h3>
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
        agent_id, headquarter_id,
	company_name, field_name
 from company, company_field
 where company.company_field_id = company_field.field_id
 and field_name = 'Programming';";

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
<a href='report6.php'>Previous</a>
<a href='index.html'>Back</a>
<a href='report8.php'>Next</a>
</h4>

</body>
</html>