<html>

<?php

include 'connect.php';

if(isset($_GET['edt'])){
	$edt_code = $_GET['edt'];
	$result = mysqli_query($link, "SELECT company_id, company_field_id, agent_id, headquarter_id, company_name 
	FROM company WHERE company_id= $edt_code");
	
	
	if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
    }
	
    $row = mysqli_fetch_assoc($result);

		$showcode = $row["company_id"];
		$showfield = $row["company_field_id"];
		$showagent = $row["agent_id"];
		$showheadquarters = $row["headquarter_id"];
		$showname = $row["company_name"];
}

?>

<center>	
<h1>Edit Company <?php echo $showcode;?> </h1>
<form action="edit_company_result.php" method="post">
<p> <input type = "hidden" name = "company_id" value = "<?php echo $showcode;?>"  /></p>
<p> Company Field: <input type = "text" name = "company_field_id" value = "<?php echo $showfield;?>" /></p>
<p> Agent ID: <input type = "text" name = "agent_id" value = "<?php echo $showagent;?>" /></p>
<p> Headquarters ID: <input type = "text" name = "headquarter_id" value = "<?php echo $showheadquarters;?>" /></p>
<p> Company Name: <input type = "text" name = "company_name" value = "<?php echo $showname;?>" /></p>
<input type="submit" name="edit" value= "Edit" />
</form>
</center>

</html>
