<?php
$dbhost = 'localhost';
$dbusername = 'aa';
$dbpasswd = 'badboy';
$database_name = 'ft';
?>
<form method="post">
    <input type = "text" name="First Name">
	<input type = "text" name="Last Name">
	<input type = "text" name="Email ID">
	<input type = "text" name="Git Username">
	<input type = "text" name="Password">
	<input type="submit" name="submit" value="submit"/>
</form>

<?php
if(isset($_POST['submit']))
{
    $connection = mysql_pconnect("$dbhost","$dbusername","$dbpasswd")
	or die ("Couldn't connect to server.");
	
	$db = mysql_select_db("$database_name", $connection)
	or die("Couldn't select database.");
	
     $SQL = "INSERT INTO users (GitUsername, password, emailId, FirstName, LastName) VALUES ('avinash-anatharamu', 'password', 'aninash2060@gmail.com','Avinash','Anantharamu')";
     $result = mysql_query($SQL);
}
?>