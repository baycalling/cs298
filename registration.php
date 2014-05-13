<?php
$dbhost = 'localhost';
$dbusername = 'aa';
$dbpasswd = 'badboy';
$database_name = 'ft';

        $First_Name = $_POST['First_Name'];
        $Last_Name = $_POST['Last_Name'];
        $Email_ID = $_POST['Email_ID'];
        $Git_Username = $_POST['Git_Username'];
        $Password= $_POST['Password'];

echo  $First_Name;
 
echo         $Last_Name;
echo        $Email_ID;
       echo $Git_Username;
       echo $Password;

    $connection = mysql_pconnect("$dbhost","$dbusername","$dbpasswd")
	or die ("Couldn't connect to server.");
	
	$db = mysql_select_db("$database_name", $connection)
	or die("Couldn't select database.");
	
     $SQL = "INSERT INTO users(`GitUsername`, `password`, `emailId`, `FirstName`, `LastName`) VALUES ('$Git_Username', '$Password', '$Email_ID','$First_Name','$Last_Name')";
echo $SQL;
     $result = mysql_query("$SQL");

    if (!$result) {
    die('Invalid query: ' . mysql_error());
    }
?>