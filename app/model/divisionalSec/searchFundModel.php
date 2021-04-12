<?php


session_start();

     require 'connection.php'; 

     $ren=$_POST['region'];
     $name=$_POST['name'];
     $year=$_POST['year'];

     $_SESSION['year']=$year;

     // echo $region;
     echo $name;
     echo $year;


     $provincialRegion= $_SESSION['provincialRegion'];              
     $districtRegion= $_SESSION['districtRegion'];                  

     
$today=date("y-m-d");
$todayyear = date("y",strtotime($today));


     

//    $date=$data['publishedTime'];
//    $month = date("m",strtotime($date));

//    $fundYear=date("y",strtotime($date));


     
     $sql="SELECT *FROM fund  
        INNER JOIN fundregion 
        ON fund.fundId=fundregion.fundId 
        Where ( fundregion.regionId=1 OR fundregion.regionId=$districtRegion OR fundregion.regionId=$provincialRegion)  
        AND (fund.name='$name') ";



     $result=$con->query($sql);
     $res=$result->fetch_all(MYSQLI_ASSOC);   
     var_dump($res);

     $_SESSION['$fundSearch']=$res;


     //header("Location:/fadts/divisional/ViewSearchFund"); 






?>