<?php

    // store results in session varibles 
     session_start();

    

     $_SESSION['people_name']=$_POST['name'];
     $_SESSION['people_nid']=$_POST['nid'];
     $_SESSION['people_headOfFamily']=$_POST['headOfFamily'];
     $_SESSION['person_email']=$_POST['email'];
     $_SESSION['people_address']=$_POST['address'];
     $_SESSION['people_b_date']=$_POST['b_date'];
     $_SESSION['people_b_certifi']=$_POST['b_certifi'];
     $_SESSION['people_civilStatus']=$_POST['civilStatus'];
     $_SESSION['people_phoneNumber1']=$_POST['phoneNumber1'];
     $_SESSION['people_phoneNumber2']=$_POST['phoneNumber2'];
     $_SESSION['people_trustee']=$_POST['trustee'];
     $_SESSION['people_jobType']=$_POST['jobType'];



    


      
    //next redirect URL
    $_SESSION['next_model'] = "Location:/fadts/divisional/addPeopleSaveModel"; 
      header("Location:/fadts/divisional/addPeopleSaveModel");  

    //redirecting to assignRegion view
    // header("Location:/fadts/assignRegion/assignRegionView");  
    exit(); 




?>