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
    $creator = $_SESSION['userid'];
    $amount = $_SESSION['fund_amount']; 
    $description = $_SESSION['fund_description'];
    $criteria = 'bla bla bla';
    $region = $_SESSION['fund_region'];

    //unset fund details in session variables
    unset($_SESSION['fund_name']);
    unset($_SESSION['fund_amount']);
    unset($_SESSION['fund_description']);
    unset($_SESSION['fund_region']);
        
    if($stmt->execute()){
        //get id of the row inserted
        $fundId = $stmt->insert_id;

        //close statement
        $stmt->close();

        //prepare and bind insert query into fund table
        $query = 'INSERT INTO fundregion (fundId, regionId) VALUES (?, ?)';
        $stmt = $con->prepare($query);
        $stmt->bind_param("ss", $fundId, $regionId);

        foreach($region as $regionId) { 
            if(!$stmt->execute()){
            //close statement
            $stmt->close();    

            //close connection
            $con->close();

            header("Location:/fadts/ministry/createFundView?error=db_conn_err");
            exit();
            }
        }

        //close statement
        $stmt->close();

        //prepare and bind insert query into fund table
        $query = 'INSERT INTO recipient (personId, fundId) VALUES (?, ?)';
        $stmt = $con->prepare($query);
        $stmt->bind_param("ss", $personId, $fundId);

        foreach($_SESSION['personList'] as $person){ 
            $personId = $person['personId'];

            if(!$stmt->execute()){
            //close statement
            $stmt->close();    

            //close connection
            $con->close();

            header("Location:/fadts/ministry/createFundView?error=db_conn_err");
            exit();
            }
        }    

        //close connection
        $con->close();

        //unset person list from session variables
        unset($_SESSION['personList']);

        //unset income types in session variables
        unset($_SESSION['incomeTypes']);

        //unset predefined fund list in session variables
        unset($_SESSION['fundList']);

        header("Location:/fadts/ministry/createFundView");
        exit();
    }

    else{
        //close statement
        $stmt->close();

        //close connection
        $con->close();

        header("Location:/fadts/ministry/createFundView?error=db_conn_err");
        exit();
    }
?>