<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user1";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$firstname = $_POST['firstname'];
$regid = $_POST['regid'];
$password = $_POST['password'];
$mess = $_POST['messtype'];
//$cnt = mysql_query("SELECT 'firstname' from dbproject");
$query = "SELECT COUNT(*) as count FROM dbproject WHERE mess ='$mess' ";
$query2 = "SELECT COUNT(*) as cnf FROM dbproject WHERE regid ='$regid' ";
$result2= mysqli_query($conn,$query2);
$row = mysqli_fetch_array($result2, MYSQLI_BOTH);
//echo "row['cnf']";
	if($row['cnf']>0)
	{
		//echo 'yo';
		echo '<script type="text/javascript">'; 
		echo 'alert("reg already exists");'; 
		echo 'window.location.href = "dbproject.php";';
		echo '</script>';	
	}
	else{
$stmt = $conn->prepare("INSERT INTO dbproject (firstname, regid, password, mess) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstname, $regid, $password, $mess);
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
   //printf("Hello! You are from %d !\n",$row['count']);
	//printf($result);

	if($row['count']>20)
	{
		
		echo '<script type="text/javascript">'; 
		echo 'alert("No more vacancy. Try any other mess");'; 
		echo 'window.location.href = "dbproject.php";';
		echo '</script>';
		
		/*header("location: dbproject.php");
		echo '<script type="text/javascript">alert("No more.");</script>';
		exit("max limit reached"); */

	}
}
	
$stmt->execute();

echo "yo";
echo '<script type="text/javascript">';
echo 'alert("your data has been successfully recorded");';
echo 'window.location.href = "login_dbpro.php";';
echo '</script>';
}

//echo "string";
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html>
<body>
<br>
<a href="dbproject.php">Go back to prev page</a>	
</script>
</body>
</html>
