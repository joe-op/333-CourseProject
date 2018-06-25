<html>
<head>
	<title>Report 12</title>
</head>
<body>
<center>	


<div align = "center">
<h3>Company name and agent name by agent phone:</h3>
<table border="2" width="600">
<tr>
<th>company_name</th>
<th>agent_name</th>
</tr>


<?php

include 'connect.php';

$sql = " select company_name,
  concat(agent_first_name, ' ', agent_last_name) as agent_name
  from company, agent
  where agent.agent_id = company.agent_id
  and agent.agent_phone = '668-388-4818'";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["company_name"];
	$showtwo = $row["agent_name"];
	echo "<tr>
			<td>$showone</td>
			<td>$showtwo</td>
		</tr>";
   }
}
?>
</table>
</div>

<h4 align="center"> 
<a href='report11.php'>Previous</a>
<a href='index.html'>Back</a>
<a href='report13.php'>Next</a>
</h4>

</body>
</html>