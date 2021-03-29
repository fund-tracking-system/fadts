<?php 
    if (isset($_POST['confirm'])) {
        session_start();

        //database connection file calling
        require 'connectionOOP.php';

        //prepare and bind
        $query = 'INSERT INTO eligibility (predefinedFundId, personId, editor) VALUES (?, ?, ?)';
        $stmt = $con->prepare($query);
        $stmt->bind_param("sss", $fund, $person, $editor);

        //assign values from post
        $fund = $_SESSION['fund_id'];
        $person = $_SESSION['person_id'];
        $editor = $_SESSION['userid'];

        //execute prepared statement
        $stmt->execute();
        
        //close statement
        $stmt->close();

        //close connection
        $con->close();

        //unset form data stored in session variables
        unset($_SESSION['person_id']);
        unset($_SESSION['person_name']);
        unset($_SESSION['person_nid']); 
        unset($_SESSION['person_address']); 
        unset($_SESSION['person_job']);
        unset($_SESSION['person_civilStatus']);    
        unset($_SESSION['person_region_id']); 
        unset($_SESSION['person_region_name']);
        unset($_SESSION['person_region_level']); 
        
        //redirecting to view
        header("Location:/fadts/ministry/addToEligibilityPersonView?result=success"); 
        exit(); 
    
    } 
    else {
        //redirecting to home
        header("Location:/fadts/home/indexModel"); 
        exit(); 
    }    
?>