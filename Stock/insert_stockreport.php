<html>
<head>
	<title>Stock report data</title>
</head>
<body>
<center>	

<p style="text-align: left";>
<a href="index.html">Back to Home</a>
</p>
<h1>Add Stock report</h1>
<form action="insert_stockreport.php" method="post">
<p>       Stock ID: <input type = "text" name = "stock_id" /></p>
<p>           Date: <input type = "text" name = "date" /></p>
<p>           Open: <input type = "text" name = "open" /></p>
<p>           High: <input type = "text" name = "high" /></p>
<p>            Low: <input type = "text" name = "low" /></p>  
<p>          Close: <input type = "text" name = "close" /></p>
<p>         Volume: <input type = "text" name = "volume" /></p>
<p> Adjusted Close: <input type = "text" name = "adj_close" /></p>
<p>     Company ID: <input type = "text" name = "company_id" /></p>
<input type="submit" name="submit" value= "Add" />
</form>
</center>


<?php

include 'connect.php';

if(isset($_POST['submit']))
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

    $addsql = "INSERT INTO stock_report (stock_id, date, open, high, low, close, volume, adj_close, company_id)
		VALUES	('$code','$date','$open','$high','$low','$close','$volume','$adjclose','$companyid')";
	if (mysqli_query($link, $addsql))
	{
		echo "The new stock report has been added Successfully";
	}
	else
	{
		echo "Error: . mysqli_error()";
	}
}
?>



<div align = "center">
<table border="2" width="600">
<tr>
<th>ID</th>
<th>Date</th>
<th>Open</th>
<th>High</th>
<th>Low</th>
<th>Close</th>
<th>Volume</th>
<th>Adjusted Close</th>
<th>Company ID</th>
<th>Edit</th>
<th>Delete</th>
</tr>

<?php

if($result = mysqli_query($link, "SELECT stock_id, date, open, high, low, close, volume, adj_close, company_id FROM stock_report"))
{
	while($row = mysqli_fetch_assoc($result))
	{
		$showcode = $row["stock_id"];
		$showdate = $row["date"];
		$showopen = $row["open"];
		$showhigh = $row["high"];
		$showlow = $row["low"];
		$showclose = $row["close"];
		$showvolume = $row["volume"];
		$showadjclose = $row["adj_close"];
		$showcompanyid = $row["company_id"];
		echo"<tr>
				<td>$showcode</td>
		        <td>$showdate</td>
				<td>$showopen</td>
				<td>$showhigh</td>
				<td>$showlow</td>
				<td>$showclose</td>
				<td>$showvolume</td>
				<td>$showadjclose</td>
				<td>$showcompanyid</td>
				<td><a href='edit_stockreport.php?edt=$showcode'>Edit</a></td>
				<td><a href='delete_stockreport.php?del=$showcode'>Delete</a></td>
		</tr>";
   }
}
?>
</table>
</div>
</body>
</html>