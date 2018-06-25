<?php  

include 'connect.php';

  if(isset($_POST['edit']))
   {
	$code = $_POST['stock_id'];
	$date = $_POST['date'];
	$open = $_POST['open'];
	$high = $_POST['high'];
	$low = $_POST['low'];
	$close = $_POST['close'];
	$volume = $_POST['volume'];
	$adjclose = $_POST['adj_close'];
	$companyid = $_POST['company_id'];
		

		$edtsql = "UPDATE stock_report SET stock_id='$code', date='$date', open='$open', high='$high', 
							 low='$low', close='$close', volume='$volume', adj_close='$adjclose', company_id='$companyid' WHERE stock_id='$code'";

	 //$editResult = mysql_query($edtsql);
	 
	 if (mysqli_query($link, $edtsql))
	 {
		echo "<h2 align='center'> Stock report $code has been updated Successfully.</h2>";	
	 }
	else
	{
		 echo 'Could not run query: ' . mysqli_error();
		 exit;
	}
	 
   }
   
?>

<h4 align="center"> 
<a href='insert_stockreport.php'>Back</a>
</h4>