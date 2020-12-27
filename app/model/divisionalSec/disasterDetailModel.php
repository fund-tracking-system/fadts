<?php

session_start();

if(isset($_GET['disasterId'])||isset($_GET['regionId']) ){
    require 'connection.php';   // database connection file calling

    
    $disasterId = $_GET['disasterId'];
    $regionID = $_GET['regionId'];
    $victims=0;
    echo    $regionID;

    $officer_region=$_SESSION['region'];
    $sql="SELECT disaster.name ,disaster.type,disaster.date FROM disaster WhERE disasterId=$disasterId" ;
            $result=$con->query($sql);
    $res=$result->fetch_all(MYSQLI_ASSOC); 
    $_SESSION['fundList']=$res;
    var_dump($res);

foreach($res as $data){
    
    $_SESSION['disasterName']=$data['name'];
    $_SESSION['disasterType']=$data['type'];
    $_SESSION['disasterDate']=$data['date'];

}
    
            echo  $_SESSION['disasterName'];
           
        echo  $_SESSION['disasterType'];
        }

header("Location:/fadts/divisional/selectDisasterDetails"); 



?>