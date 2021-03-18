<?php 
    session_start();

    //database connection file calling
    require 'connectionOOP.php';	
    
    //prepare and bind insert query into fund table
    $query = 'INSERT INTO fund (name, creator, amountPerPerson, description, criteriaUsed) VALUES (?, ?, ?, ?, ?)';
    $stmt = $con->prepare($query);
    $stmt->bind_param("sssss", $name, $creator, $amount, $description, $criteria);
 
    //assign values from post
    $name = $_SESSION['fund_name'];
    $creator = 0;
    $amount = $_SESSION['fund_amount']; 
    $description = $_SESSION['fund_description']; 
    $criteria = 'bla bla bla';

    //execute prepared statement
    $stmt->execute();

    //close statement
    $stmt->close();




    //prepare and bind insert query into fundregion table
    $query = 'SELECT fundId FROM fund WHERE name = ? AND criteriaUsed = ?';
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $name, $criteria);
 
    //execute prepared statement
    $stmt->execute();
    $result = $stmt->get_result();

    //fetch query results
    $data = $result->fetch_array(MYSQLI_ASSOC);

    //store result in variable
    $fundId = $data['fundId'];

    //close statement
    $stmt->close();




    //prepare and bind insert query into fund table
    $query = 'INSERT INTO fundregion (fundId, regionId) VALUES (?, ?)';
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $fundId, $region);
 
    //assign values from post
    $region = $_SESSION['assign_region_id'];

    //execute prepared statement
    $stmt->execute();


    
    
    //close connection
    $con->close();

    //unset form data stored in session variables
    unset($_SESSION['fund_name']);
    unset($_SESSION['fund_amount']); 
    unset($_SESSION['fund_description']);
    unset($_SESSION['assign_region_level']);
    unset($_SESSION['assign_region_id']); 
    
    //redirecting to view
    header("Location:/fadts/ministry/createFundView"); 
    exit(); 
?>