<html>

<?php

include 'connect.php';

if(isset($_GET['edt'])){
	$edt_code = $_GET['edt'];
	$result = mysqli_query($link, "SELECT agent_id, agent_email, agent_phone, agent_address, agent_first_name, agent_last_name 
	FROM AGENT WHERE agent_id= $edt_code");
	
	
	if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
    }
	
    $row = mysqli_fetch_assoc($result);

    $showcode = $row["agent_id"];
	$showemail = $row["agent_email"];
	$showphone = $row["agent_phone"];
	$showaddress = $row["agent_address"];
	$showfname = $row["agent_first_name"];
	$showlname = $row["agent_last_name"];
}

?>

<center>	
<h1>Edit Agent <?php echo $showcode;?> </h1>
<form action="edit_agent_result.php" method="post">
<p> <input type = "hidden" name = "agent_id" value = "<?php echo $showcode;?>"  /></p>
<p> E-Mail: <input type = "text" name = "agent_email" value = "<?php echo $showemail;?>" /></p>
<p> Phone: <input type = "text" name = "agent_phone" value = "<?php echo $showphone;?>" /></p>
<p> Address: <input type = "text" name = "agent_address" value = "<?php echo $showaddress;?>" /></p>
<p> First Name: <input type = "text" name = "agent_first_name" value = "<?php echo $showfname;?>" /></p>
<p> Last Name: <input type = "text" name = "agent_last_name" value = "<?php echo $showlname;?>" /></p>
<input type="submit" name="edit" value= "Edit" />
</form>
</center>

</html>
