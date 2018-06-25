<html>

<?php

include 'connect.php';

if(isset($_GET['edt'])){
	$edt_code = $_GET['edt'];
	$result = mysqli_query($link, "SELECT field_id, field_type, field_name 
	FROM company_field WHERE field_id= $edt_code");
	
	
	if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
    }
	
    $row = mysqli_fetch_assoc($result);

    $showcode = $row["field_id"];
	$showtype= $row["field_type"];
	$showname = $row["field_name"];
}

?>

<center>	
<h1>Edit Field <?php echo $showcode;?> </h1>
<form action="edit_field_result.php" method="post">
<p> <input type = "hidden" name = "field_id" value = "<?php echo $showcode;?>"  /></p>
<p> Type: <input type = "text" name = "field_type" value = "<?php echo $showtype;?>" /></p>
<p> Name: <input type = "text" name = "field_name" value = "<?php echo $showname;?>" /></p>
<input type="submit" name="edit" value= "Edit" />
</form>
</center>

</html>
