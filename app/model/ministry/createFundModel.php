<?php  
    //store results in session variables
    session_start();

    $_SESSION['fund_name'] = $_POST['name'];
    $_SESSION['fund_amount'] = $_POST['amount']; 
    $_SESSION['fund_description'] = $_POST['description'];
    
    //next redirect URL
    $_SESSION['next_model'] = "Location:/fadts/ministry/createFundSaveModel"; 
 
    //redirecting to assignRegion view
    header("Location:/fadts/assignRegion/assignRegionView");  
    exit(); 
?>