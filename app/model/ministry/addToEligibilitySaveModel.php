<?php 
    if (isset($_POST['add'])) {
        session_start();

        //database connection file calling
        require 'connectionOOP.php';

        //insert person into eligible list
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

        //record change in eligibility history table
        //prepare and bind
        $query = 'INSERT INTO eligibilityhistory (predefinedFundId, personId, status, editor) VALUES (?, ?, ?, ?)';
        $stmt = $con->prepare($query);
        $stmt->bind_param("ssss", $fund, $person, $status, $editor);

        //assign values
        $status = 1;

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
    elseif (isset($_POST['remove'])) {
        session_start();

        //database connection file calling
        require 'connectionOOP.php';

        //remove person from eligible list
        //prepare and bind
        $query = 'DELETE FROM eligibility WHERE personId = ?';
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $person);

        //assign values from post
        $person = $_SESSION['person_id'];

        //execute prepared statement
        $stmt->execute();
        
        //close statement
        $stmt->close();

        //record change in eligibility history table
        //prepare and bind
        $query = 'INSERT INTO eligibilityhistory (predefinedFundId, personId, status, editor) VALUES (?, ?, ?, ?)';
        $stmt = $con->prepare($query);
        $stmt->bind_param("ssss", $fund, $person, $status, $editor);

        //assign values
        $fund = $_SESSION['fund_id'];
        $status = 0;
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