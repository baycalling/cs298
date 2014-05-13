<?php 
/*  Database Information - Required!!  */
/* -- Configure the Variables Below --*/
$dbhost = 'localhost';
$dbusername = 'aa';
$dbpasswd = 'badboy';
$database_name = 'ft';

 $connection = mysql_pconnect("$dbhost","$dbusername","$dbpasswd")
	or die ("Couldn't connect to server.");
	
$db = mysql_select_db("$database_name", $connection)
	or die("Couldn't select database.");
	
$query= 'SELECT employername, city, state FROM everify';

$result = mysql_query("$query");


while($row=mysql_fetch_array($result));
{
    echo  $row['employername'];
    echo  $row['city'];
    echo  $row['state']; 
}
?>