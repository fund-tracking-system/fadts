<?php 
session_start();

if(isset($_GET['fundId'])){

   require 'connection.php';   // database connection file calling

   $fundId = $_GET['fundId'];

   
}
else{
   header("Location:/fadts/divisional/fundRelease?error=direct_access");
   exit();
}