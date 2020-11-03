<?php
    session_start();

    require 'connection.php';   // database connection file calling
    
    //create connection



       
   
  



    
    $query='INSERT INTO person (name,nid,headOfFamily,phone, phone_two,         birthDate,birthCertificateNo,civilStatus,trustee,job) VALUES(?,?,?,?,?,?,?,?,?,?)';
    $stmt=$con->prepare($query);
    $stmt->bind_param('ssssssssss',$name,$nid,$headOfFamily,$phoneNumber1, $phoneNumber2 , $b_date,$b_certifi,      $civilStatus,$trustee,$jobType);




    $name=$_SESSION['people_name'];
    $nid=$_SESSION['people_nid'];
    $headOfFamily=$_SESSION['people_headOfFamily'];
    $address=$_SESSION['people_address'];
    $phoneNumber1=$_SESSION['people_phoneNumber1'];
    $phoneNumber2=$_SESSION['people_phoneNumber2'];
    $b_date=$_SESSION['people_b_date'];
    $b_certifi=$_SESSION['people_b_certifi'];
    $civilStatus=$_SESSION['people_civilStatus'];
    // $email=$_SESSION['person_email'];
    $trustee=$_SESSION['people_trustee'];
    $jobType=$_SESSION['people_jobType'];
    $region=$_SESSION['people_region'];

echo $nid;


    $stmt->execute();
    $stmt->close();

   





      //redirecting to view
    header("Location:/fadts/divisional/ViewAddPeople"); 




    
    //close connection
    
    $con->close();

    unset($_SESSION['people_nid']);
    unset($_SESSION['people_name']);
    unset($_SESSION['people_headOfFamily']);
    unset($_SESSION['people_address']);
    unset($_SESSION['people_phoneNumber1']);
    unset($_SESSION['people_phoneNumber2']);
    unset($_SESSION['people_b_date']);
    unset($_SESSION['people_b_certifi']);
    unset($_SESSION['people_civilStatus']);
    // unset($_SESSION['person_email']);
    unset($_SESSION['people_trustee']);
    unset($_SESSION['people_jobType']);


    
  


?>