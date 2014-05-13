<? 
/*  Database Information - Required!!  */
/* -- Configure the Variables Below --*/
$dbhost = 'localhost';
$dbusername = 'aa';
$dbpasswd = 'badboy';
$database_name = 'ft';

/* Database Stuff, do not modify below this line */

$connection = mysql_pconnect("$dbhost","$dbusername","$dbpasswd") 
	or die ("Couldn't connect to server.");
	
$db = mysql_select_db("$database_name", $connection)
	or die("Couldn't select database.");
	
	$result = mysql_query("SELECT * FROM `fulltime`");

echo "<table border='1'>
<tr>
<th>Job Title</th>
<th>Skills Set</th>
<th>Duration</th>
<th>Location</th>
<th>Apply</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Job_title'] . "</td>";
  echo "<td>" . $row['Skills_set'] . "</td> ";
  echo "<td>"  .$row['Duration']. "</td>";
  echo "<td>" .$row['Location']. "</td>";
  echo "<td>" .$row['Apply'].  "</td> ";
  echo "</tr>";
  }
echo "</table>";

?>