<?php 
   session_start();
   if(!isset($_SESSION['userid'])){
      header("Location:/fadts/home/index");
      exit(); 
   }
   $action = $this->getAction(); // in here $action is, view file name without .php

   if($_SESSION['userrole']=='villageofficer'){ $user ='village'; }
   if($_SESSION['userrole']=='divisionalsec'){ $user ='divisional'; }
   if($_SESSION['userrole']=='ministry'){ $user ='ministry'; }
   if($_SESSION['userrole']=='auditor'){ $user ='audit'; }

?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Work Bench</title>
   <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="/fadts/app/css/main.css">
   <link rel="stylesheet" type="text/css" href="/fadts/app/css/fill.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/yourcode.js"></script>
</head>

<body >
   <div>
      <nav>
         <label class="logo">FADTS</label>
         <ul>
            <li><a href="/fadts/includes/index" ><B>Home</B></li>

            <li><a href="#"><B>Notifications</B></li>

            <li><a href="/fadts/includes/userProfile"><B>Profile</B></li>
            
            <li><a class="log_button" href="/fadts/home/index">
                  <B>LOGOUT</B>
            </li>
         </ul>
      </nav>
   </div>