<html>

<?php

include 'connect.php';

if(isset($_GET['edt'])){
	$edt_code = $_GET['edt'];
	$result = mysqli_query($link, "SELECT headquarter_id, headquarter_city
	FROM headquarter WHERE headquarter_id= $edt_code");
	
	
	if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
    }
	
    $row = mysqli_fetch_assoc($result);

    $showcode = $row["headquarter_id"];
	$showcity = $row["headquarter_city"];
}

?>

<center>	
<h1>Edit Headquarter <?php echo $showcode;?> </h1>
<form action="edit_headquarter_result.php" method="post">
<p> <input type = "hidden" name = "headquarter_id" value = "<?php echo $showcode;?>"  /></p>
<p> City: <input type = "text" name = "headquarter_city" value = "<?php echo $showcity;?>" /></p>
<input type="submit" name="edit" value= "Edit" />
</form>
</center>

</html>
