<?php
    session_start();

    require 'connection.php';   // database connection file calling
    
    //create connection



    
    $query='INSERT INTO person (name,nid,address,headOfFamily,monthlyIncome,phone, phone_two,birthDate,birthCertificateNo,civilStatus,trustee,job,region) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)';
    $stmt=$con->prepare($query);
    $stmt->bind_param('sssssssssssss',$name,$nid,$address,$headOfFamily,$monthlyIncome,$phoneNumber1, $phoneNumber2 , $b_date,$b_certifi,      $civilStatus,$trustee,$jobType,$region);


    $noti='INSERT INTO notification (type,nid)VALUES(?,?)';
    $stmtNoti=$con->prepare($noti);
    $stmtNoti->bind_param('ss',$type,$nid);
    

    $type=1;
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

  


    $stmtNoti->execute();
    $stmtNoti->close();


    $stmt->execute();
    $stmt->close();

   



      //redirecting to view
    //header("Location:/fadts/divisional/ViewAddPeople"); 




    
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
    unset($_SESSION['people_trustee']);
    unset($_SESSION['people_jobType']);
    unset($_SESSION['people_region']);


  
  


?>