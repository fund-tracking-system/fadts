<?php 
    session_start();

    //database connection file calling
    require 'connectionOOP.php';	
    
    // //prepare and bind insert query into fund table
    // $query = 'INSERT INTO fund (name, creator, amountPerPerson, description, criteriaUsed) VALUES (?, ?, ?, ?, ?)';
    // $stmt = $con->prepare($query);
    // $stmt->bind_param("sssss", $name, $creator, $amount, $description, $criteria);
 
    // //assign values from post
    // $name = $_POST['name'];
    // $creator = $_SESSION['userid'];
    // $amount = $_POST['amount']; 
    // $description = $_POST['description'];
    // $criteria = 'bla bla bla';
    // $region = $_POST['region'];

    //assign values from post
    $_SESSION['fund_name'] = $_POST['name'];
    $_SESSION['fund_amount'] = $_POST['amount']; 
    $_SESSION['fund_description'] = $_POST['description'];
    $_SESSION['fund_region'] = $_POST['region'];

    //fetch income types and store in session variables
    $result = $con->query('SELECT * FROM incometype');
    $result = $result->fetch_all(MYSQLI_ASSOC);
    $_SESSION['incomeTypes'] = $result;

    //fetch predefined fund and store in session variables
    $result = $con->query('SELECT * FROM predefinedfund');
    $result = $result->fetch_all(MYSQLI_ASSOC);
    $_SESSION['fundList'] = $result;

    //close connection
    $con->close();

    header("Location:/fadts/ministry/searchRecipientView");
    exit();
    
    // if($stmt->execute()){
    //     //get id of the row inserted
    //     $fundId = $stmt->insert_id;

    //     //close statement
    //     $stmt->close();

    //     //prepare and bind insert query into fund table
    //     $query = 'INSERT INTO fundregion (fundId, regionId) VALUES (?, ?)';
    //     $stmt = $con->prepare($query);
    //     $stmt->bind_param("ss", $fundId, $regionId);

    //     foreach($region as $regionId) { 
    //         if(!$stmt->execute()){
    //         //close statement
    //         $stmt->close();    

    //         //close connection
    //         $con->close();

    //         header("Location:/fadts/ministry/createFundView?error=db_conn_err");
    //         exit();
    //         }
    //     }

    //     //close statement
    //     $stmt->close();

    //     //close connection
    //     $con->close();

    //     header("Location:/fadts/ministry/searchRecipientView");
    //     exit();
    // }

    // else{
    //     //close statement
    //     $stmt->close();

    //     //close connection
    //     $con->close();

    //     header("Location:/fadts/ministry/createFundView?error=db_conn_err");
    //     exit();
    // }
?>