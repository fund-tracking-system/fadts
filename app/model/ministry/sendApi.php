<?php

session_start();
require_once('notify/autoload.php');


//database connection file calling
require 'connectionOOP.php';	

    $personList = $_SESSION['personList'];

        foreach($personList as $person){ 
            
            $personId = $person['personId'];
            $qry="SELECT phone FROM person WHERE personId = $personId";
            $result = $con->query($qry);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {

                    $contact = $row["phone"];


                    $api_instance = new NotifyLk\Api\SmsApi();
                    $user_id = "13127"; 
                    $api_key = "qCaJfO73WWJfh9FHBXYd"; 
                    $message = "Congratulations!</br>You have been selected for a government fund.Please contact your village officer to claim the due fund amount.</br>Thank you."; 
                    $sender_id = "NotifyDEMO";
                    $to = "94".substr($contact, -9);
                    // print_r($contact);
                    // exit();
                    try {
                        $api_instance->sendSMS($user_id, $api_key, $message, $to, $sender_id);
                    }catch(Exception $e){
                        echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
                        // header("Location:/fadts/village/fundRelease?otp=otp_resend&entryId=$entryId"); 
                        exit();
                    }
                }
            }            

        } 

        require_once('notify/autoload.php');

        // $api_instance = new NotifyLk\Api\SmsApi();
        // $user_id = "13127"; 
        // $api_key = "qCaJfO73WWJfh9FHBXYd"; 
        // $message = "Congratulations!</br>You have been selected for a government fund.Please contact your village officer to claim the due fund amount.</br>Thank you."; 
        // $sender_id = "NotifyDEMO";
        // // $to = "94".substr($contact, -9);
        // $to ="94768612036";
        // // print_r($contact);
        // // exit();
        // try {
        //     $api_instance->sendSMS($user_id, $api_key, $message, $to, $sender_id);
        // }catch(Exception $e){
        //     echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
        //     // header("Location:/fadts/village/fundRelease?otp=otp_resend&entryId=$entryId"); 
        //     exit();
        // }







        ?>