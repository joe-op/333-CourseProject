<html>
<head>
	<title>Field data</title>
</head>
<body>
<center>	

<p style="text-align: left";>
<a href="index.html">Back to Home</a>
</p>
<h1>Add Field</h1>
<form action="insert_field.php" method="post">
<p>         ID: <input type = "text" name = "field_id" /></p>
<p>      Type: <input type = "text" name = "field_type" /></p>
<p>      Name: <input type = "text" name = "field_name" /></p>
<input type="submit" name="submit" value= "Add" />
</form>
</center>


<?php

include 'connect.php';

if(isset($_POST['submit']))
{
	$code = $_POST['field_id'];
	$type = $_POST['field_type'];
	$name = $_POST['field_name'];

    $addsql = "INSERT INTO company_field (field_id, field_type, field_name)
		VALUES	('$code','$type','$name')";
	if (mysqli_query($link, $addsql))
	{
		echo "The new field has been added Successfully";
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
<th>Type</th>
<th>Name</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php

if($result = mysqli_query($link, "SELECT field_id, field_type, field_name FROM company_field"))
{
	while($row = mysqli_fetch_assoc($result))
	{
		$showcode = $row["field_id"];
		$showtype = $row["field_type"];
		$showname = $row["field_name"];
		echo"<tr>
		        <td>$showcode</td>
				<td>$showtype</td>
				<td>$showname</td>
				<td><a href='edit_field.php?edt=$showcode'>Edit</a></td>
				<td><a href='delete_field.php?del=$showcode'>Delete</a></td>
		</tr>";
   }
}
?>
</table>
</div>
</body>
</html>