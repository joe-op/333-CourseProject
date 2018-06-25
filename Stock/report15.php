<html>
<head>
	<title>Report 15</title>
</head>
<body>
<center>	


<div align = "center">
<h3>Names of fields:</h3>
<table border="2" width="600">
<tr>
<th>field_name</th>
</tr>


<?php

include 'connect.php';

$sql = "select field_name from company_field;";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["field_name"];
	echo "<tr>
			<td>$showone</td>
		</tr>";
   }
}
?>
</table>
</div>

<h4 align="center"> 
<a href='report14.php'>Previous</a>
<a href='index.html'>Back</a>
</h4>

</body>
</html>