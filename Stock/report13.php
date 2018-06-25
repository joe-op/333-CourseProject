<html>
<head>
	<title>Report 13</title>
</head>
<body>
<center>	


<div align = "center">
<h3>Company names and stock values with agent names and phone numbers:</h3>
<table border="2" width="600">
<tr>
<th>agent_name</th>
<th>agent_phone</th>
<th>company_name</th>
</tr>


<?php

include 'connect.php';

$sql = "select concat(agent_first_name, ' ', agent_last_name) as agent_name,
    agent_phone,
    company.company_name,
    close    
    from stock_report as a,
    company, agent
    where date = (
        select max(date)
	from stock_report as b
	where a.company_id = b.company_id)
    and a.company_id = company.company_id
    and company.agent_id = agent.agent_id;";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["agent_name"];
	$showtwo = $row["agent_phone"];
	$showthree = $row["company_name"];
	echo "<tr>
			<td>$showone</td>
			<td>$showtwo</td>
			<td>$showthree</td>
		</tr>";
   }
}
?>
</table>
</div>

<h4 align="center"> 
<a href='report12.php'>Previous</a>
<a href='index.html'>Back</a>
<a href='report14.php'>Next</a>
</h4>

</body>
</html>