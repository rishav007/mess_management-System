<?php
include('session_dbpro.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user1";
//session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$mess = $_POST['messchange'];
//$cnt = mysql_query("SELECT 'firstname' from dbproject");
$query = "SELECT COUNT(*) as count FROM dbproject WHERE mess ='$mess' ";
//"'.$search.'"'
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
   //printf("Hello! You are from %d !\n",$row['count']);
	//printf($result);
	if($row['count']>20)
	{
		echo '<script type="text/javascript">'; 
		echo 'alert("No vacancies try any other time");'; 
		echo 'window.location.href = "login_dbpro.php";';
		echo '</script>';
	}
	else
	{
		$st="UPDATE dbproject SET mess ='$mess' WHERE firstname ='$login_session' ";
		$res = mysqli_query($conn,$st);
		echo '<script type="text/javascript">'; 
		echo 'alert("Your request have been approved");'; 
		echo 'window.location.href = "login_dbpro.php";';
		echo '</script>';

	}
}
/*if($cnt >2)
{
	exit("max limit reached");
} */
?>
<!DOCTYPE html>
<html>
<body>
<br>
<a href="welcome_dbpro.php">Go back to prev page</a>
</body>
</html>
