 <?php
$db_servername = "localhost";
$db_username = "root";
$db_password = "1234";
$db_database = "test";

// Create connection
$dbc = mysqli_connect($db_servername, $db_username, $db_password, $db_database);

// Check connection
if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully to ".$db_database."<br/ >";
$username=$_POST['username'];//echo $username;
$password=$_POST['password'];
$sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
//echo $sql;
$result = mysqli_query($dbc,$sql) or die("error connecting to database");
$row = mysqli_fetch_array($result);
if($row['username']==$username && $row['password']==$password) {
         header('location:ip.html');
	}
else
	echo"wrong credentials";
mysql_close($con);
?>
