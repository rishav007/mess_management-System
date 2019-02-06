<?php
include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $reg=$_SESSION['regi'];
   
   $ses_sql = mysqli_query($db,"select * from dbproject where firstname = '$user_check' and regid='$reg' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['firstname'];
   $mess_type=$row['mess'];
   if(!isset($_SESSION['login_user'])){
      header("location:login_dbpro.php");
   }
?>
