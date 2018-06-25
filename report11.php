<html>
<head>
	<title>Report 11</title>
</head>
<body>
<center>	


<div align = "center">
<h3>Company names with their agent's name, email, and phone:</h3>
<table border="2" width="600">
<tr>
<th>company_name</th>
<th>agent_name</th>
<th>agent_email</th>
<th>agent_phone</th>
</tr>


<?php

include 'connect.php';

$sql = " select company_name,
   concat(agent_first_name, ' ', agent_last_name) as agent_name,
   agent_email,
   agent_phone
  from company, agent
  where agent.agent_id = company.agent_id;";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["company_name"];
	$showtwo = $row["agent_name"];
	$showthree = $row["agent_email"];
	$showfour = $row["agent_phone"];
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
<a href='report10.php'>Previous</a>
<a href='index.html'>Back</a>
<a href='report12.php'>Next</a>
</h4>

</body>
</html>