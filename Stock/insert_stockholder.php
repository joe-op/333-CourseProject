<html>
<head>
	<title>Stock holder data</title>
</head>
<body>
<center>	

<p style="text-align: left";>
<a href="index.html">Back to Home</a>
</p>
<h1>Add Stock holder</h1>
<form action="insert_stockholder.php" method="post">
<p>         ID: <input type = "text" name = "stock_holder_id" /></p>
<p> First Name: <input type = "text" name = "stock_holder_first_name" /></p>
<p>  Last Name: <input type = "text" name = "stock_holder_last_name" /></p>
<p> Company ID: <input type = "text" name = "company_id" /></p>
<p>    Address: <input type = "text" name = "stock_holder_address" /></p> 
<p>      Email: <input type = "text" name = "stock_holder_email" /></p> 
<input type="submit" name="submit" value= "Add" />
</form>
</center>


<?php

include 'connect.php';

if(isset($_POST['submit']))
{
	$code = $_POST['stock_holder_id'];
	$fname = $_POST['stock_holder_first_name'];
	$lname = $_POST['stock_holder_last_name'];
	$company = $_POST['company_id'];
	$address = $_POST['stock_holder_address'];
	$email = $_POST['stock_holder_email'];

    $addsql = "INSERT INTO stock_holder (stock_holder_id, stock_holder_first_name, stock_holder_last_name, company_id, stock_holder_address,
	stock_holder_email) VALUES	('$code','$fname','$lname','$company','$address','$email')";
	if (mysqli_query($link, $addsql))
	{
		echo "The new stock holder has been added Successfully";
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
<th>First Name</th>
<th>Last Name</th>
<th>Company ID</th>
<th>Address</th>
<th>Email</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php

if($result = mysqli_query($link, "SELECT stock_holder_id, stock_holder_first_name, stock_holder_last_name, company_id, stock_holder_address, stock_holder_email FROM stock_holder"))
{
	while($row = mysqli_fetch_assoc($result))
	{
		$showcode = $row["stock_holder_id"];
		$showfname = $row["stock_holder_first_name"];
		$showlname = $row["stock_holder_last_name"];
		$showcompany = $row["company_id"];
		$showaddress = $row["stock_holder_address"];
		$showemail = $row["stock_holder_email"];
		echo"<tr>
		        <td>$showcode</td>
				<td>$showfname</td>
				<td>$showlname</td>
				<td>$showcompany</td>
				<td>$showaddress</td>
				<td>$showemail</td>
				<td><a href='edit_stockholder.php?edt=$showcode'>Edit</a></td>
				<td><a href='delete_stockholder.php?del=$showcode'>Delete</a></td>
		</tr>";
   }
}
?>
</table>
</div>
</body>
</html>