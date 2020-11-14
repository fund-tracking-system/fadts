<?php  
    //store results in session variables
    session_start();

    $_SESSION['officer_nid'] = $_POST['nid']; 
    $_SESSION['officer_password'] = $_POST['password'];
    $_SESSION['officer_email'] = $_POST['email']; 
    $_SESSION['officer_loginStatus'] = $_POST['loginStatus'];
    $_SESSION['officer_name'] = $_POST['name']; 
    
    //next redirect URL
    $_SESSION['next_model'] = "Location:/fadts/ministry/addOfficerSaveModel"; 
 
    //redirecting to assignRegion view
    header("Location:/fadts/assignRegion/assignRegionView");  
    exit(); 
?>