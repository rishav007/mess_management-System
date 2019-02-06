<?php
  include("config.php");
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
    background-repeat: no-repeat; 
  }
  </style>

</head>
<body >
	<div class="row" style="width:1310px;margin-left:-10px;">
         <div class="col s12 m12 l12" >
            <nav class="grey darken-3">
                  <div class="nav-wrapper" >
                  <a href="dbproject.php" class="brand-logo">MMS</a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                     <li><a href="login_dbpro.php">Log In</a></li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <div class="SignUp" style="float:right;width:500px;margin-top:50px;"><h3>Sign Up</h3>
      <form action="dbinsert.php" method="POST">
        <fieldset>
          <legend style="color: white">Personal information:</legend>
              <span style="color: white"><b>Name:</b></span><br>
          <input type="text" name="firstname" placeholder="name" required><br>
              <span style="color: white"><b>Registration Number:</b></span><br>
          <input type="text" name="regid" placeholder="RegId" required><br>
              <span style="color: white"><b>Password:</b></span><br>
          <input type="password" name="password" id="p"  placeholder="password" required><br> 
              <span style="color: white"><b>Confirm Password:</b></span><br>
          <input type="password" name="c_password" id="cp" placeholder="password"><br><br>
              <span style="color: white"><b>MESS TYPE:</b></span> <br>
          <input list="messtype" name="messtype" id="mt"> 
             <datalist id="messtype">
              <option value="Special Mess"></option>
              <option value="NorthIndian Non-Veg Mess"></option>
              <option value="NorthIndian Veg Mess"></option>
              <option value="SouthIndian Veg Mess"></option>
              <option value="Paid Mess"></option>
            </datalist>
            <br><br>
          <input type="submit" class="sb" value="Submit" onclick="return Validate()">
        </fieldset> 
        </form>
      </div>
        
    <script type="text/javascript">
   // var sm,pm;
   // sm=pm=1;
    function Validate() {
        var password = document.getElementById("p").value;
        var confirmPassword = document.getElementById("cp").value;
      
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        else
        {
          
        return true;
        }

    }
</script>
</body>
</html>