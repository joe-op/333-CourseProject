<?php  

include 'connect.php';

  if(isset($_POST['edit']))
   {
	$code = $_POST['agent_id'];
	$email = $_POST['agent_email'];
	$phone = $_POST['agent_phone'];
	$address = $_POST['agent_address'];
	$fname = $_POST['agent_first_name'];
	$lname = $_POST['agent_last_name'];
		

		$edtsql = "UPDATE agent SET agent_id='$code', agent_email='$email', agent_phone='$phone', 
							 agent_address='$address', agent_first_name='$fname', agent_last_name='$lname' WHERE agent_id='$code'";

	 //$editResult = mysql_query($edtsql);
	 
	 if (mysqli_query($link, $edtsql))
	 {
		echo "<h2 align='center'> Agent $code has been updated Successfully.</h2>";	
	 }
	else
	{
		 echo 'Could not run query: ' . mysqli_error();
		 exit;
	}
	 
   }
   
?>

<h4 align="center"> 
<a href='insert_agent.php'>Back</a>
</h4>