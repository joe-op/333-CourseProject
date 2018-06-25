<?php  

include 'connect.php';

  if(isset($_POST['edit']))
   {
	$code = $_POST['field_id'];
	$type = $_POST['field_type'];
	$name = $_POST['field_name'];
		

		$edtsql = "UPDATE company_field SET field_id='$code', field_type='$type', field_name='$name' WHERE field_id='$code'";

	 //$editResult = mysql_query($edtsql);
	 
	 if (mysqli_query($link, $edtsql))
	 {
		echo "<h2 align='center'> Field $code has been updated Successfully.</h2>";	
	 }
	else
	{
		 echo 'Could not run query: ' . mysqli_error();
		 exit;
	}
	 
   }
   
?>

<h4 align="center"> 
<a href='insert_field.php'>Back</a>
</h4>