<html>
<head>
	<title>Headquarter data</title>
</head>
<body>
<center>	

<p style="text-align: left";>
<a href="index.html">Back to Home</a>
</p>
<h1>Add Headquarter</h1>
<form action="insert_headquarter.php" method="post">
<p>         ID: <input type = "text" name = "headquarter_id" /></p>
<p>       City: <input type = "text" name = "headquarter_city" /></p>
<input type="submit" name="submit" value= "Add" />
</form>
</center>


<?php

include 'connect.php';

if(isset($_POST['submit']))
{
	$code = $_POST['headquarter_id'];
	$city = $_POST['headquarter_city'];

    $addsql = "INSERT INTO headquarter (headquarter_id, headquarter_city)
		VALUES	('$code','$city')";
	if (mysqli_query($link, $addsql))
	{
		echo "The new headquarter has been added Successfully";
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
<th>City</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php

if($result = mysqli_query($link, "SELECT headquarter_id, headquarter_city FROM headquarter"))
{
	while($row = mysqli_fetch_assoc($result))
	{
		$showcode = $row["headquarter_id"];
		$showcity= $row["headquarter_city"];
		echo"<tr>
		        <td>$showcode</td>
				<td>$showcity</td>
				<td><a href='edit_headquarter.php?edt=$showcode'>Edit</a></td>
				<td><a href='delete_headquarter.php?del=$showcode'>Delete</a></td>
		</tr>";
   }
}
?>
</table>
</div>
</body>
</html>