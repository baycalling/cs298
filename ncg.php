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
        $apply = $_POST['apply'];
        $connection = mysql_pconnect("$dbhost","$dbusername","$dbpasswd")
	or die ("Couldn't connect to server.");
	
	$db = mysql_select_db("$database_name", $connection)
	or die("Couldn't select database.");
        
        if(mysql_query("INSERT INTO fulltime VALUES('$job_title', '$skills_set', '$duration','$location','$apply')"))
         echo "Successfully Inserted";
        else
        echo "Insertion Failed";

	


?>