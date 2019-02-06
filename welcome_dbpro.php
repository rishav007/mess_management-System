<?php
   include('session_dbpro.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <style type="text/css">
        body{
          background-image: url("mess2.jpg");
        }
      </style>
   </head>
   <body class="w3-container">
      <h1 style="text-align: center;color: white">Welcome <?php echo $login_session; ?>! <br>you have opted for <?php echo $mess_type; ?> </h1> 
      <p>Do you want to change your mess? </p>
      <p>Choose the mess you want---></p>
      <form action="mess_change.php" method="POST">
    	<select name="messchange">
    		<option value="Special Mess">Special Mess</option>
  			<option value="NorthIndian Non-Veg Mess">NorthIndian Non-Veg Mess</option>
  			<option value="NorthIndian Veg Mess">NorthIndian Veg Mess</option>
  			<option value="SouthIndian Veg Mess">SouthIndian Veg Mess</option>
  			<option value="Paid Mess">Paid Mess</option>
		</select>
	<input type="submit" value="submit">
	</form>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>
