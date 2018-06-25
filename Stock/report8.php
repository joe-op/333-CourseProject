<html>
<head>
	<title>Report 8</title>
</head>
<body>
<center>	


<div align = "center">
<h3>All agent names and email addresses:</h3>
<table border="2" width="600">
<tr>
<th>email</th>
<th>name</th>
</tr>


<?php

include 'connect.php';

$sql = "select agent_email, concat(agent_first_name, ' ', agent_last_name) as name
  from agent
  order by agent_last_name desc;";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["agent_email"];
	$showtwo = $row["name"];
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
<a href='report7.php'>Previous</a>
<a href='index.html'>Back</a>
<a href='report9.php'>Next</a>
</h4>

</body>
</html>