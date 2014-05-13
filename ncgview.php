<? 
/*  Database Information - Required!!  */
/* -- Configure the Variables Below --*/
$dbhost = 'localhost';
$dbusername = 'aa';
$dbpasswd = 'badboy';
$database_name = 'ft';

/* Database Stuff, do not modify below this line */
        $job_title = $_POST['job_title'];
        $skills_set = $_POST['skills_set'];
        $duration = $_POST['duration'];
        $location = $_POST['location'];
        $connection = mysql_pconnect("$dbhost","$dbusername","$dbpasswd")
	or die ("Couldn't connect to server.");
	
	$db = mysql_select_db("$database_name", $connection)
	or die("Couldn't select database.");
	
	$query = 'SELECT * FROM fulltime WHERE 1';
        if (!empty($job_title)) {
        	$query .= " AND job_title = '$job_title'";
        }
         if (!empty($skills_set)) {
        	$query .= " AND skills_set = '$skills_set'";
        }
        if (!empty($duration)) {
        	$query .= " AND duration = '$duration'";
        }
        if (!empty($location)) {
        	$query .= " AND location = '$location'";
        }
	
	$result = mysql_query("$query");

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