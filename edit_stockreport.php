<html>

<?php

include 'connect.php';

if(isset($_GET['edt'])){
	$edt_code = $_GET['edt'];
	$result = mysqli_query($link, "SELECT stock_id, date, open, high, low, close, volume, adj_close, company_id FROM stock_report WHERE stock_id= $edt_code");
	
	
	if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
    }
	
    $row = mysqli_fetch_assoc($result);

		$showcode = $row["stock_id"];
		$showdate = $row["date"];
		$showopen = $row["open"];
		$showhigh = $row["high"];
		$showlow = $row["low"];
		$showclose = $row["close"];
		$showvolume = $row["volume"];
		$showadjclose = $row["adj_close"];
		$showcompanyid = $row["company_id"];
}

?>

<center>	
<h1>Edit Stock report <?php echo $showcode;?> </h1>
<form action="edit_stockreport_result.php" method="post">
<p> <input type = "hidden" name = "stock_id" value = "<?php echo $showcode;?>"  /></p>
<p> Date: <input type = "text" name = "date" value = "<?php echo $showdate;?>" /></p>
<p> Open: <input type = "text" name = "open" value = "<?php echo $showopen;?>" /></p>
<p> High: <input type = "text" name = "high" value = "<?php echo $showhigh;?>" /></p>
<p> Low: <input type = "text" name = "low" value = "<?php echo $showlow;?>" /></p>
<p> Close: <input type = "text" name = "close" value = "<?php echo $showclose;?>" /></p>
<p> Volume: <input type = "text" name = "volume" value = "<?php echo $showvolume;?>" /></p>
<p> Adjusted Close: <input type = "text" name = "adj_close" value = "<?php echo $showadjclose;?>" /></p>
<p> Company ID: <input type = "text" name = "company_id" value = "<?php echo $showcompanyid;?>" /></p>
<input type="submit" name="edit" value= "Edit" />
</form>
</center>

</html>
