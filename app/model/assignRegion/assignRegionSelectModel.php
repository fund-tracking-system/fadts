<?php
    session_start();
    
    //store officer region in session variables
    $_SESSION['assign_region_id'] = $_POST['region']; 

    //store officer position in session variables
    $_SESSION['assign_region_level'] = $_POST['level'];

    $nextModel = $_SESSION['next_model'];
    
    //unset next model URL
    unset($_SESSION['next_model']);
 
    //redirecting to addOfficerSave model
    header($nextModel); 
    exit(); 
?>