<?php
    session_start();
    
    //store officer region in session variables
    $_SESSION['assign_region_id'] = $_POST['region']; 

    //store officer position in session variables
    $_SESSION['assign_region_level'] = $_POST['level'];
 
    //redirecting to addOfficerSave model
    header($_SESSION['next_model']); 
    exit(); 
?>