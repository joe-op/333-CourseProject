<?php

include 'connect.php';

if(isset($_GET['del'])){
	$del_code = $_GET['del'];
	$delsql = "DELETE FROM stock_holder WHERE stock_holder_id = '$del_code'";
	if (mysqli_query($link, $delsql)){
		echo "<h2 align='center'> Selected stock holder of code $del_code has been deleted Successfully.</h2>";
	}
	else
	{
		 echo 'Could not run query: ' . mysqli_error();
		 exit;
	}
}

?>
<h4 align="center"> 
<a href='insert_stockholder.php'>Back</a>
</h4>