<?php 
    session_start();

    //database connection file calling
    require 'connectionOOP.php';	
    
    //prepare and bind
    $query = 'INSERT INTO user (username, usernid, email, password, userrole, region, loginStatus) VALUES (?, ?, ?, ?, ?, ?, ?)';
    $stmt = $con->prepare($query);
    $stmt->bind_param("sssssss", $name, $nid, $email, $password, $position, $region, $loginStatus);
 
    //assign values from post
    $name = $_SESSION['officer_name'];
    $nid = $_SESSION['officer_nid'];
    $email = $_SESSION['officer_email'];
    //$position = $_SESSION['assign_region_level'];   
    $region = $_SESSION['assign_region_id']; 
    $loginStatus = $_SESSION['officer_loginStatus'];
    
    //determine officer position from region level
    switch ($_SESSION['assign_region_level']) {
        case 0:
            $position = 'auditor';
            break;
        case 1:
            $position = 'provincialsec';
            break;
        case 2:
            $position = 'districtsec';
            break; 
        case 3:
            $position = 'divisionalsec';
            break;
        case 4:
            $position = 'villageofficer';
            break;    
    }

    //default password is set initially
    $password = password_hash("123456", PASSWORD_DEFAULT);

    //execute prepared statement
    $stmt->execute();
    
    //close connection
    $stmt->close();
    $con->close();

    //unset form data stored in session variables
    unset($_SESSION['officer_name']);
    unset($_SESSION['officer_nid']); 
    unset($_SESSION['officer_email']);
    //unset($_SESSION['officer_password']);  
    unset($_SESSION['assign_region_level']);
    unset($_SESSION['assign_region_id']); 
    unset($_SESSION['officer_loginStatus']);  
    
    //redirecting to view
    header("Location:/fadts/ministry/addOfficerView"); 
    exit(); 
?>