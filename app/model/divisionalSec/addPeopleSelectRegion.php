<?php

session_start();

require 'connection.php';

$_SESSION['people_region']=$_POST['region'];
 echo $_SESSION['people_region'];
 
 header($_SESSION['next_model']);

?>