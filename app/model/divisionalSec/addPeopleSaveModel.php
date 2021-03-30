<?php
    session_start();

    require 'connection.php';   // database connection file calling
    
    //create connection



    
    $query='INSERT INTO person (name,nid,address,headOfFamily,phone, phone_two,birthDate,birthCertificateNo,civilStatus,trustee,job,region,editorId,division,district,province) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $stmt=$con->prepare($query);
    $stmt->bind_param('ssssssssssssssss',$name,$nid,$address,$headOfFamily,$phoneNumber1, $phoneNumber2 , $b_date,$b_certifi,$civilStatus,$trustee,$jobType,$region,$userid,$division,$districtRegion,$provincialRegion);


    $division = $_SESSION['region'];
    $districtRegion= $_SESSION['districtRegion']; 
    $provincialRegion= $_SESSION['provincialRegion']; 
    
    echo $districtRegion;
    echo $provincialRegion;

    $userid=$_SESSION['userid'];
    $name=$_SESSION['people_name'];
    $nid=$_SESSION['people_nid'];
    $headOfFamily=$_SESSION['people_headOfFamily'];
    $monthlyIncome=$_SESSION['monthlyIncome'];
    $address=$_SESSION['people_address'];
    $phoneNumber1=$_SESSION['people_phoneNumber1'];
    $phoneNumber2=$_SESSION['people_phoneNumber2'];
    $b_date=$_SESSION['people_b_date'];
    $b_certifi=$_SESSION['people_b_certifi'];
    $civilStatus=$_SESSION['people_civilStatus'];
    $trustee=$_SESSION['people_trustee'];
    $jobType=$_SESSION['people_jobType'];
    $region=$_SESSION['people_region'];
    echo $region;

  


    $stmt->execute();
    $stmt->close();

   



    //   //redirecting to view
    // header("Location:/fadts/divisional/ViewAddPeople"); 
    header("Location:/fadts/divisional/ViewAddPeopleProfile"); 



    
    //close connection
    
    $con->close();

    // unset($_SESSION['people_nid']);
    // unset($_SESSION['people_name']);
    // unset($_SESSION['people_headOfFamily']);
    // unset($_SESSION['people_address']);
    // unset($_SESSION['people_phoneNumber1']);
    // unset($_SESSION['people_phoneNumber2']);
    // unset($_SESSION['people_b_date']);
    // unset($_SESSION['people_b_certifi']);
    // unset($_SESSION['people_civilStatus']);
    // unset($_SESSION['people_trustee']);
    // unset($_SESSION['people_jobType']);
    // unset($_SESSION['people_region']);


  
  


?>