<?php
    session_start();

    require 'connection.php';   // database connection file calling
    
    //create connection


    $sql="SELECT nid FROM persons";
    $result=$con->query($sql);


    $nid=$_SESSION['people_nid'];
    $duplicate=0;

   if($result->num_rows>0){
       echo ("hello there");
       while($row = $result->fetch_assoc()){
    //    echo  $row["nid"] ;
       if($row["nid"]==$nid){

        $duplicate=1;
    

       }
        
       }

   }
        $name=$_SESSION['people_name'];
        $nid=$_SESSION['people_nid'];
        $headOfFamily=$_SESSION['people_headOfFamily'];
        $address=$_SESSION['people_address'];
        $phoneNumber1=$_SESSION['people_phoneNumber1'];
        $phoneNumber2=$_SESSION['people_phoneNumber2'];
        $b_date=$_SESSION['people_b_date'];
        $b_certifi=$_SESSION['people_b_certifi'];
        $civilStatus=$_SESSION['people_civilStatus'];
        $email=$_SESSION['person_email'];
        $trustee=$_SESSION['people_trustee'];
        $jobType=$_SESSION['people_jobType'];

   
   if($duplicate==1){
       echo ("there is id   fsf  in table");
       //redirecting the view again 

       header("Location:/fadts/divisional/ViewAddPeople?error=nid_exist"); 
   }

   elseif($duplicate==0){

    
    $query='INSERT INTO persons (name,nid,headOfFamily,address,phone,phone_two,birthdate,birthCertificateNo,civilStatus,email,trustee) VALUES(?,?,?,?,?,?,?,?,?,?,?)';
    $stmt=$con->prepare($query);
    $stmt->bind_param('sssssssssss',$name,$nid,$headOfFamily,$address,$phoneNumber1,$phoneNumber2,$b_date,$b_certifi,$civilStatus,$email,$trustee);

    $stmt->execute();
    $stmt->close();

      //redirecting to view
  header("Location:/fadts/divisional/ViewAddPeople"); 

   }


    
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
    unset($_SESSION['person_email']);
    unset($_SESSION['people_trustee']);
    unset($_SESSION['people_jobType']);


    
  


?>