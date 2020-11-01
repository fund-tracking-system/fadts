<?php

    // store results in session varibles 
     session_start();

    //  $_SESSION['people_name']=$_POST['name'];
     $_SESSION['people_nid']=$_POST['nid'];
     echo $_SESSION['people_nid'];
    
    //  $_SESSION['people_address']=$_POST['address'];
    //  $_SESSION['people_b_date']=$_POST['b_date'];
    //  $_SESSION['people_b_certifi']=$_POST['b_certifi'];
    //  $_SESSION['poeple_email']=$_POST['email'];
    //  $_SESSION['people_checkbox']=$_POST['checkbox'];
    //  $_SESSION['people_civilStatus']=$_POST['civilStatus'];
    //  $_SESSION['people_phoneNumber1']=$_POST['phoneNumber1'];
    //  $_SESSION['people_phoneNumber2']=$_POST['phoneNumeber2'];
    //  $_SESSION['people_trustee']=$_POST['trustee'];


      
    //next redirect URL
    $_SESSION['next_model'] = "Location:/fadts/divisional/addPeopleSaveModel"; 
      header("Location:/fadts/divisional/addPeopleSaveModel");  

    //redirecting to assignRegion view
    // header("Location:/fadts/assignRegion/assignRegionView");  
    exit(); 




?>