<?php
    session_start();
    
    $_SESSION['officer_region'] = $_POST['region']; 
 
    //redirecting to addOfficerSave model
    header($_SESSION['next_model']); 
    exit(); 
?>