<!DOCTYPE html>
<html>
<head>
<title>Stock Database Interface</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- <link rel="stylesheet" href="css/styles.css"/> -->

</head>

<body>

<center>
<h1>CJM Endeavors</h1>

<?php
/*ini_set("display_errors", true);
error_reporting( E_ALL );
echo "test";*/
?>

<p>
<h2><a href="insert_agent.php">Agent management</a></h2>
<h2><a href="insert_company.php">Company</a></h2>
<h2><a href="insert_field.php">Company Field</a></h2>
<h2><a href="insert_headquarter.php">Headquarter</a></h2>
<h2><a href="insert_stockholder.php">Stock Holder</a></h2>
<h2><a href="insert_stockreport.php">Stock Report</a></h2>
</p>

</center>

<p>
<div class="container">
  <h2>Reports</h2>
  <p>Select a report you want to check</p>
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Reports
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="report1.php">Stock Value by Location</a></li>
      <li><a href="report2.php">Stock Value by Field</a></li>
      <li><a href="report3.php">Stock Value by Company</a></li>
	  <li><a href="report4.php">First Recorded Stock Values</a></li>
	  <li><a href="report5.php">Stock Value Improvement by Company</a></li>
	  <li><a href="report6.php">All Company Information</a></li>
	  <li><a href="report7.php">Company Information by Field</a></li>
	  <li><a href="report8.php">Agent Names and Emails</a></li>
	  <li><a href="report9.php">Stock Value Improvement by Agent</a></li>
	  <li><a href="report10.php">Stock Value Improvement by Agent</a></li>
	  <li><a href="report11.php">Companies and Agents</a></li>
	  <li><a href="report12.php">Company Name and Agent Name by Agent Phone</a></li>
	  <li><a href="report13.php">Company Names and Stock Values with Agent Names and Phone Numbers</a></li>
	  <li><a href="report14.php">Company Stock Value by Agent Phone</a></li>
	  <li><a href="report15.php">Field Names</a></li>
    </ul>
  </div>
</div>

</body>
</html>
