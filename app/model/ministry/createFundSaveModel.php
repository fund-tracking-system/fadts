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
    $criteria = 'income types=Private';
    $region = $_SESSION['fund_region'];

    //echo $name."<br>".$creator."<br>".$amount."<br>".$description."<br>".$criteria;
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

        foreach($region as $regionId) {

            $query = 'INSERT INTO fundregion (fundId, regionId) VALUES (?, ?)';
            $stmt = $con->prepare($query);
            $stmt->bind_param("ss", $fundId, $regionId); 
            if(!$stmt->execute()){
            //close statement
                $stmt->close(); 
            //close connection
                $con->close();
            header("Location:/fadts/ministry/createFundView?error=db_conn_err3");
            exit();
            }
        }

        //close statement
        // $stmt->close();

        //prepare and bind insert query into fund table
        $personList = $_SESSION['personList'];


        foreach($personList as $person){ 
            
            $personId = $person['personId'];
            $query = 'INSERT INTO recipient (personId, fundId) VALUES (?, ?)';
            $stmt = $con->prepare($query);
            $stmt->bind_param("ss", $personId, $fundId);

            if(!$stmt->execute()){
                //close statement
                $stmt->close();    
                //close connection
                $con->close();
                header("Location:/fadts/ministry/createFundView?error=db_conn_err2");
                exit();
            }

            
        }

        $stmt->close();    
        //close connection

        require_once('notify/autoload.php');

        $api_instance = new NotifyLk\Api\SmsApi();
        $user_id = "13127"; 
        $api_key = "qCaJfO73WWJfh9FHBXYd"; 
        $message = "You have been selected for a government fund.Please contact your village officer to claim the due fund amount."; 
        $sender_id = "NotifyDEMO";

        foreach($personList as $person){ 
            
            $personId = $person['personId'];
            $qry="SELECT phone FROM person WHERE personId = $personId";
            $result = $con->query($qry);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {

                    $contact = $row["phone"];
                   
                    $to = "94".substr($contact, -9);
                    try {
                        $api_instance->sendSMS($user_id, $api_key, $message, $to, $sender_id);
               // echo $user_id." ".$api_key." ".$sender_id." ".$to ;      echo '<br>';
                    }catch(Exception $e){
                        echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
                        // header("Location:/fadts/village/fundRelease?otp=otp_resend&entryId=$entryId"); 
                        exit();
                    }
                }
            }            

        }    

        //close connection
        $con->close();

        //unset person list from session variables
        // unset($_SESSION['personList']);

        //unset income types in session variables
        unset($_SESSION['incomeTypes']);

        //unset predefined fund list in session variables
        unset($_SESSION['fundList']);

        //header("Location:/fadts/ministry/sendApi");
        header("Location:/fadts/ministry/createFundView");
        exit();
    }

    else{
        //close statement
        $stmt->close();
        //close connection
        $con->close();
        header("Location:/fadts/ministry/createFundView?error=db_conn_err1");
        exit();
    }

?>