<html>
<head>
	<title>Agent data</title>
</head>
<body>
<center>	

<p style="text-align: left";>
<a href="index.html">Back to Home</a>
</p>
<h1>Add Agent</h1>
<form action="insert_agent.php" method="post">
<p>         ID: <input type = "text" name = "agent_id" /></p>
<p>      Email: <input type = "text" name = "agent_email" /></p>
<p>      Phone: <input type = "text" name = "agent_phone" /></p>
<p>    Address: <input type = "text" name = "agent_address" /></p>  
<p> First Name: <input type = "text" name = "agent_first_name" /></p>
<p>  Last Name: <input type = "text" name = "agent_last_name" /></p>
<input type="submit" name="submit" value= "Add" />
</form>
</center>


<?php

include 'connect.php';

if(isset($_POST['submit']))
{
	$code = $_POST['agent_id'];
	$email = $_POST['agent_email'];
	$phone = $_POST['agent_phone'];
	$address = $_POST['agent_address'];
	$fname = $_POST['agent_first_name'];
	$lname = $_POST['agent_last_name'];

    $addsql = "INSERT INTO agent (agent_id, agent_email, agent_phone, agent_address, agent_first_name, agent_last_name)
		VALUES	('$code','$email','$phone','$address','$fname','$lname')";
	if (mysqli_query($link, $addsql))
	{
		echo "The new agent has been added Successfully";
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
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>First Name</th>
<th>Last Name</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php

if($result = mysqli_query($link, "SELECT agent_id, agent_email, agent_phone, agent_address, agent_first_name, agent_last_name FROM AGENT"))
{
	while($row = mysqli_fetch_assoc($result))
	{
		$showcode = $row["agent_id"];
		$showemail = $row["agent_email"];
		$showphone = $row["agent_phone"];
		$showaddress = $row["agent_address"];
		$showfname = $row["agent_first_name"];
		$showlname = $row["agent_last_name"];
		echo"<tr>
		        <td>$showcode</td>
				<td>$showemail</td>
				<td>$showphone</td>
				<td>$showaddress</td>
				<td>$showfname</td>
				<td>$showlname</td>
				<td><a href='edit_agent.php?edt=$showcode'>Edit</a></td>
				<td><a href='delete_agent.php?del=$showcode'>Delete</a></td>
		</tr>";
   }
}
?>
</table>
</div>
</body>
</html>