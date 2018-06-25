<html>
<head>
	<title>Report 9</title>
</head>
<body>
<center>	


<div align = "center">
<h3>Names and email addresses of agents with companies with improving stocks:</h3>
<table border="2" width="600">
<tr>
<th>Agent name</th>
<th>Company name</th>
<th>Improvement</th>
</tr>


<?php

include 'connect.php';

$sql = "select distinct agent_email,
  concat(agent_first_name, ' ', agent_last_name) as agent_name,
  company.company_name, improvement
  from agent, company, stock_report,
  (select tlast.company_id,
     company_name,
     format(tlast.close - tfirst.open, 2) as improvement
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
                 select max(date) - interval 30 day                               
                 from stock_report as b                         
                  where a.company_id = b.company_id)) as tfirst
    where tlast.company_id = tfirst.company_id
    and   tlast.company_id = company.company_id) as timprove
  where agent.agent_id = company.agent_id
  and   company.company_id = stock_report.company_id
  and   company.company_id = timprove.company_id;";

if($result = mysqli_query($link, $sql))
{
	

while($row = mysqli_fetch_assoc($result)){
	
	$showone = $row["agent_name"];
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
<a href='report8.php'>Previous</a>
<a href='index.html'>Back</a>
<a href='report10.php'>Next</a>
</h4>

</body>
</html>