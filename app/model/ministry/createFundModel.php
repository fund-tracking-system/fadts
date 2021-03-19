<?php 
    session_start();

    //database connection file calling
    require 'connectionOOP.php';	
    
    //prepare and bind insert query into fund table
    $query = 'INSERT INTO fund (name, creator, amountPerPerson, description, criteriaUsed) VALUES (?, ?, ?, ?, ?)';
    $stmt = $con->prepare($query);
    $stmt->bind_param("sssss", $name, $creator, $amount, $description, $criteria);
 
    //assign values from post
    $name = $_POST['name'];
    $creator = $_SESSION['userid'];
    $amount = $_POST['amount']; 
    $description = $_POST['description'];
    $criteria = 'bla bla bla';
    $region = $_POST['region'];
    
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
            //close connection
            $con->close();

            header("Location:/fadts/ministry/createFundView?error=db_conn_err");
            exit();
            }
        }

        //close connection
        $con->close();

        header("Location:/fadts/ministry/createFundView?error=success");
        exit();
    }

    else{
        //close connection
        $con->close();

        header("Location:/fadts/ministry/createFundView?error=db_conn_err");
        exit();
    }
?>