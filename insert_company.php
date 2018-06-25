<html>
<head>
	<title>Company data</title>
</head>
<body>
<center>	

<p style="text-align: left";>
<a href="index.html">Back to Home</a>
</p>
<h1>Add Company</h1>
<form action="insert_company.php" method="post">
<p>       Company ID: <input type = "text" name = "company_id" /></p>
<p> Company Field ID: <input type = "text" name = "company_field_id" /></p>
<p>         Agent ID: <input type = "text" name = "agent_id" /></p>
<p>  Headquarters ID: <input type = "text" name = "headquarter_id" /></p>  
<p>     Company Name: <input type = "text" name = "company_name" /></p>
<input type="submit" name="submit" value= "Add" />
</form>
</center>


<?php

include 'connect.php';

if(isset($_POST['submit']))
{
	$code = $_POST['company_id'];
	$field = $_POST['company_field_id'];
	$agent = $_POST['agent_id'];
	$headquarter = $_POST['headquarter_id'];
	$name = $_POST['company_name'];

    $addsql = "INSERT INTO company (company_id, company_field_id, agent_id, headquarter_id, company_name)
		VALUES	('$code','$field','$agent','$headquarter','$name')";
	if (mysqli_query($link, $addsql))
	{
		echo "The new company has been added Successfully";
	}
	else
	{
		echo "Error: . mysqli_error()";
	}
}
?>



<div align = "center">
<table border="2" width="600">
<tr>
<th>ID</th>
<th>Field ID</th>
<th>Agent ID</th>
<th>Headquarter ID</th>
<th>Company Name</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php

if($result = mysqli_query($link, "SELECT company_id, company_field_id, agent_id, headquarter_id, company_name FROM company"))
{
	while($row = mysqli_fetch_assoc($result))
	{
		$showcode = $row["company_id"];
		$showfield = $row["company_field_id"];
		$showagent = $row["agent_id"];
		$showheadquarters = $row["headquarter_id"];
		$showname = $row["company_name"];
		echo"<tr>
		        <td>$showcode</td>
				<td>$showfield</td>
				<td>$showagent</td>
				<td>$showheadquarters</td>
				<td>$showname</td>
				<td><a href='edit_company.php?edt=$showcode'>Edit</a></td>
				<td><a href='delete_company.php?del=$showcode'>Delete</a></td>
		</tr>";
   }
}
?>
</table>
</div>
</body>
</html>