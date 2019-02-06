<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $regid = mysqli_real_escape_string($db,$_POST['regid']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $ff = $_POST['firstname']; 
      $sql = "SELECT * FROM dbproject WHERE regid='$regid' and password='$mypassword' and firstname='$ff' ";
      $result = mysqli_query($db,$sql);
      if($result === FALSE)
      { 
          echo "not found"; // TODO: better error handling
      }
      $row = mysqli_fetch_array($result);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
        // session_register('firstname');
         $_SESSION['login_user'] = $ff;
         $_SESSION['regi']=$regid;
         $_SESSION['mess_type']=$row['mess'];

         
         header("location: welcome_dbpro.php");
      }
      else {
         //$error = "Your Login Name or Password is invalid";
        echo '<script language="javascript">';
        echo 'alert("Invalid name or Password. Check again")';
        echo '</script>';

      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mess Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">      
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>	 
	<script>
      $( document ).ready(function){
         $(".dropdown-button").dropdown();
      });
	</script>
  <style>
  body{
    background-image: url("mess2.jpg");
  }
  </style>
</head>
<body class="container">
  <div class="row" style="width:100%;margin-top:100px;">
         <div class="col s12 m12 l12">
            <nav class="teal darken-4">
               <div class="nav-wrapper">
                  <h3 class="brand-logo center">Log In page</h3>
               </div>
            </nav>
         </div>
      </div>
	<!--<h3 style="text-align:center;" class="blue-text text-darken-2">Log In page</h3> -->

	<div class="row">
         <form method="post" action="" class="col s12">
            <div class="row">
               <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input placeholder="Username"  id="firstname" name="firstname" type="text" class="active validate" required>
                  <label for="name">Username</label>
               </div>
               <div class="input-field col s6">      
                  <label for="password">Password</label>
                  <input id="password" type="password" name="password" placeholder="Password" class="validate" required>          
               </div>
               </div>
               <div class="space"></div>
               <div class="input-field col s6">
                <label for="Registration Number">Registration Number</label>
                <input id="regid" type="text" name="regid" placeholder="Registration Number" class="validate" required>
                <input type = "submit" value = " Submit "/>
            </div>
          </form>
          <a href="dbproject.php" style="position:absolute;top:355px;left:1000px;color: black"><button type="button" value="Signup">SignUp</button></a>
</body>
