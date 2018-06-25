<html>

<?php

include 'connect.php';

if(isset($_GET['edt'])){
	$edt_code = $_GET['edt'];
	$result = mysqli_query($link, "SELECT stock_holder_id, stock_holder_first_name, stock_holder_last_name, company_id, stock_holder_address, stock_holder_email 
	FROM stock_holder WHERE stock_holder_id= $edt_code");
	
	
	if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
    }
	
    $row = mysqli_fetch_assoc($result);

		$showcode = $row["stock_holder_id"];
		$showfname = $row["stock_holder_first_name"];
		$showlname = $row["stock_holder_last_name"];
		$showcompany = $row["company_id"];
		$showaddress = $row["stock_holder_address"];
		$showemail = $row["stock_holder_email"];
}

?>

<center>	
<h1>Edit Agent <?php echo $showcode;?> </h1>
<form action="edit_stockholder_result.php" method="post">
<p> <input type = "hidden" name = "stock_holder_id" value = "<?php echo $showcode;?>"  /></p>
<p> First Name: <input type = "text" name = "stock_holder_first_name" value = "<?php echo $showfname;?>" /></p>
<p> Last Name: <input type = "text" name = "stock_holder_last_name" value = "<?php echo $showlname;?>" /></p>
<p> Company ID: <input type = "text" name = "company_id" value = "<?php echo $showcompany;?>" /></p>
<p> Address: <input type = "text" name = "stock_holder_address" value = "<?php echo $showaddress;?>" /></p>
<p> E-Mail: <input type = "text" name = "stock_holder_email" value = "<?php echo $showemail;?>" /></p>
<input type="submit" name="edit" value= "Edit" />
</form>
</center>

</html>
