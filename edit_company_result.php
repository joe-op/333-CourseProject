<?php  

include 'connect.php';

  if(isset($_POST['edit']))
   {
	$code = $_POST['company_id'];
	$field = $_POST['company_field_id'];
	$agent = $_POST['agent_id'];
	$headquarter = $_POST['headquarter_id'];
	$name = $_POST['company_name'];
		

		$edtsql = "UPDATE company SET company_id='$code', company_field_id='$field', agent_id='$agent', 
							 headquarter_id='$headquarter', company_name='$name' WHERE company_id='$code'";

	 //$editResult = mysql_query($edtsql);
	 
	 if (mysqli_query($link, $edtsql))
	 {
		echo "<h2 align='center'> Company $code has been updated Successfully.</h2>";	
	 }
	else
	{
		 echo 'Could not run query: ' . mysqli_error();
		 exit;
	}
	 
   }
   
?>

<h4 align="center"> 
<a href='insert_company.php'>Back</a>
</h4>