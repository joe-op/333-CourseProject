<?php  

include 'connect.php';

  if(isset($_POST['edit']))
   {
	$code = $_POST['stock_holder_id'];
	$fname = $_POST['stock_holder_first_name'];
	$lname = $_POST['stock_holder_last_name'];
	$company = $_POST['company_id'];
	$address = $_POST['stock_holder_address'];
	$email = $_POST['stock_holder_email'];
		

		$edtsql = "UPDATE stock_holder SET stock_holder_id='$code', stock_holder_first_name='$fname', stock_holder_last_name='$lname', 
							 company_id='$company', stock_holder_address='$address', stock_holder_email='$email' WHERE stock_holder_id='$code'";

	 //$editResult = mysql_query($edtsql);
	 
	 if (mysqli_query($link, $edtsql))
	 {
		echo "<h2 align='center'> Stock holder $code has been updated Successfully.</h2>";	
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