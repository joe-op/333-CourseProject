<?php  

include 'connect.php';

  if(isset($_POST['edit']))
   {
	$code = $_POST['headquarter_id'];
	$city = $_POST['headquarter_city'];
		

		$edtsql = "UPDATE headquarter SET headquarter_id='$code', headquarter_city='$city' WHERE headquarter_id='$code'";

	 //$editResult = mysql_query($edtsql);
	 
	 if (mysqli_query($link, $edtsql))
	 {
		echo "<h2 align='center'> Headquarter $code has been updated Successfully.</h2>";	
	 }
	else
	{
		 echo 'Could not run query: ' . mysqli_error();
		 exit;
	}
	 
   }
   
?>

<h4 align="center"> 
<a href='insert_headquarter.php'>Back</a>
</h4>