<html>
<head>
	<title>Report 5</title>
</head>
<body>
<center>	


<div align = "center">
<h3>Find the history of a company's stocks:</h3>
<table border="2" width="600">
<tr>
<th>Company ID</th>
<th>Company name</th>
<th>Improvement</th>
</tr>


<?php

include 'connect.php';

$sql = "select tlast.company_id, company_name, format(tlast.close - tfirst.open, 2) as improvement
    from company,
    (select date, close, company_id, a.stock_id                 
        from stock_report as a                                  
        where date = (                                          
            select max(date)                                    
     from stock_report as b                                     
     where a.company_id = b.company_id)) as tlast,              
    (select date, open, company_id, a.stock_id                 
           from stock_report as a                               
           where date = (                                       
                 select min(date)                               
                 from stock_report as b                         
                  where a.company_id = b.company_id)) as tfirst
    where tlast.company_id = tfirst.company_id
    and   tlast.company_id = company.company_id;";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["company_id"];
	$showtwo = $row["company_name"];
	$showthree = $row["improvement"];
	echo "<tr>
			<td>$showone</td>
			<td>$showtwo</td>
			<td>$showthree</td>
		</tr>";
   }
}
?>
</table>
</div>

<h4 align="center"> 
<a href='report4.php'>Previous</a>
<a href='index.html'>Back</a>
<a href='report6.php'>Next</a>
</h4>

</body>
</html>