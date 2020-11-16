<?php

session_start();

if(isset($_GET['disasterId'])){
    require 'connection.php';   // database connection file calling

    $disasterId = $_GET['disasterId'];
    $victims=0;

}

header("Location:/fadts/divisional/selectDisasterDetails"); 



?>