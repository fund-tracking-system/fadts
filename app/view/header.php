<?php 
   session_start();
   if(!isset($_SESSION['userid'])){
      header("Location:/test/home/index");
      exit(); 
   }
   $action = $this->getAction(); // in here $action is, view file name without .php

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
            <li><a href="#" ><B>Home</B></li>

            <li><a href="#"><B>About</B></li>

            <li><a href="#"><B>Notifications</B></li>
            
            <li><a class="log_button" href="/fadts/home/index">
                  <B>LOGOUT</B>
            </li>
         </ul>
      </nav>
   </div>