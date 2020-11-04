<?php

    
     session_start();

     require 'connection.php';


         // store results in session varibles 

     $_SESSION['people_name']=$_POST['name'];
     $_SESSION['people_nid']=$_POST['nid'];
     $_SESSION['people_headOfFamily']=$_POST['headOfFamily'];
     $_SESSION['people_address']=$_POST['address'];
     $_SESSION['people_b_date']=$_POST['b_date'];
     $_SESSION['people_b_certifi']=$_POST['b_certifi'];
     $_SESSION['people_civilStatus']=$_POST['civilStatus'];
     $_SESSION['people_phoneNumber1']=$_POST['phoneNumber1'];
     $_SESSION['people_phoneNumber2']=$_POST['phoneNumber2'];
     $_SESSION['people_trustee']=$_POST['trustee'];
     $_SESSION['people_jobType']=$_POST['jobType'];
     $_SESSION['people_region']=$_POST['region'];
     $_SESSION['people_regionName']=$_POST['region'];






     $nid=$_SESSION['people_nid'];//for nid validation
    

    $rgn="SELECT level, regionid,name  FROM region  WHERE level=4 ";
    $rgnRes=$con->query($rgn) ;
    $res=$rgnRes->fetch_all(MYSQLI_ASSOC);
    
    $_SESSION['region_result']=$res;  //for assign region  
    

 
    //check nid validation avoid person duplicate
     $sql="SELECT nid FROM person";
     $result=$con->query($sql);
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


    if($duplicate==1){
 
        //redirecting the view again 
 
        header("Location:/fadts/divisional/ViewAddPeople?error=person_exist"); 
        unset ($duplicate);
    }
    elseif($duplicate==0){
        
        //next redirect URL
        $_SESSION['next_model'] = "Location:/fadts/divisional/addPeopleSaveModel"; 
        //  header("Location:/fadts/divisional/addPeopleSaveModel");


        //redirecting to assignRegion view
         header("Location:/fadts/divisional/assignRegionView");  
         
        unset ($duplicate);

        exit(); 
    }

 

?>