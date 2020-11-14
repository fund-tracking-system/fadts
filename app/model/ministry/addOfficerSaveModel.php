<?php 
    session_start();

    /*
    //db credentials
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'pdodb';

    //create connection
    $con = new mysqli($host, $user, $password, $dbname);

    //Check connection
    if ($con->connect_error) {
    die("Database not connected: " . $con->connect_error);
    }
    */

    //database connection file calling
    require 'connectionOOP.php';
    
    //prepare and bind
    $query = 'INSERT INTO officer (nid, password, email, region, loginStatus, name, position) VALUES (?, ?, ?, ?, ?, ?, ?)';
    $stmt = $con->prepare($query);
    $stmt->bind_param("sssssss", $nid, $password, $email, $region, $loginStatus, $name, $position);
 
    //assign values from post
    $nid = $_SESSION['officer_nid']; 
    $password = $_SESSION['officer_password'];
    $email = $_SESSION['officer_email'];
    $region = $_SESSION['officer_region']; 
    $loginStatus = $_SESSION['officer_loginStatus'];
    $name = $_SESSION['officer_name'];
    $position = $_SESSION['officer_position']; 

    //execute prepared statement
    $stmt->execute();
    
    //close connection
    $stmt->close();
    $con->close();

    //unset form data stored in session variables
    unset($_SESSION['officer_nid']); 
    unset($_SESSION['officer_password']); 
    unset($_SESSION['officer_email']); 
    unset($_SESSION['officer_region']); 
    unset($_SESSION['officer_loginStatus']); 
    unset($_SESSION['officer_name']); 
    unset($_SESSION['officer_position']);
    
    //redirecting to view
    header("Location:/fadts/ministry/addOfficerView"); 
    exit(); 
?>