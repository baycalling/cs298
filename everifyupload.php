<?php
/*  Database Information - Required!!  */
/* -- Configure the Variables Below --*/
$dbhost = 'localhost';
$dbusername = 'aa';
$dbpasswd = 'badboy';
$database_name = 'ft';

/* Database Stuff, do not modify below this line */

$connection = mysql_pconnect("$dbhost","$dbusername","$dbpasswd") 
	or die ("Couldn't connect to server.");

echo $connection;
$db = mysql_select_db("$database_name", $connection)
	or die("Couldn't select database.");
	
echo $db;
	


echo 'inside the if statement';

	$file = $_FILES['file']['tmp_name'];
	
	$handle = fopen($file,"r");
	$i =0;
	while(($fileop = fgetcsv($handle,1000,",")) !== false)
	{
		$i=$i+1;
		$employeeName = $fileop[0];
		$city = $fileop[1];
		$state = $fileop[2];
		$zipcode = $fileop[3];

                 if(mysql_query("INSERT INTO everify VALUES('$i', '$employeeName', '$city ','$state','$zipcode')")){
echo "<table border='1'>
		<tr>
		<th>$employeeName</th>
		<th>$city</th>
		<th>$state</th>
		<th>$zipcode</th>
	
	</tr>";
}else{
echo 'failed';
}
		
		
		
		
		
	}


?>