<?php 
    session_start();

    //database connection file calling
    require 'connectionOOP.php';

    //prepare and bind
    $query = 'UPDATE user SET username=?, usernid=?, email=?, password=?, userrole=?, region=?, loginStatus=? WHERE userid=?';
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssssssss", $name, $nid, $email, $password, $position, $region, $loginStatus, $id);
 
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

    //assign values from post
    $name = $_POST['name'];
    $nid = $_POST['nid'];
    $email = $_POST['email'];
    $region = $_SESSION['assign_region_id'];
    $loginStatus = $_POST['loginStatus'];
    $id = $_SESSION['officer_id'];

    if ($_POST['password'] == "yes") {
        $password = "123456";
    }
    else {
        $password = $_SESSION['officer_password'];
    }

    //execute prepared statement
    $stmt->execute();
    
    //close connection
    $stmt->close();
    $con->close();

    //unset form data stored in session variables
    unset($_SESSION['officer_id']);
    unset($_SESSION['officer_name']);
    unset($_SESSION['officer_nid']); 
    unset($_SESSION['officer_email']);
    unset($_SESSION['officer_password']); 
    unset($_SESSION['officer_role']);    
    unset($_SESSION['assign_region_id']); 
    unset($_SESSION['assign_region_name']);
    unset($_SESSION['assign_region_level']);
    unset($_SESSION['assign_region_id']); 
    unset($_SESSION['officer_loginStatus']);  
    
    //redirecting to view
    header("Location:/fadts/ministry/updateOfficerView"); 
    exit(); 
?>