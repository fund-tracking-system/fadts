<?php 
session_start();
require 'connection.php';   

    $region=$_SESSION['region'];
    echo $region;
    
if(isset($_GET['type'])){

     // database connection file calling

   $type = $_GET['type'];
  
   
    if($type==1){
        $sql="SELECT * FROM person INNER JOIN notification ON person.nid=notification.nid WHERE person.region=$region";
        $stm=$con->query($sql);
        $result=$stm->fetch_all(MYSQLI_ASSOC); 
                  
                  $_SESSION['updateNotifiResult']=$result;

                  var_dump($_SESSION['updateNotifiResult']);

                  
                   header("Location:/fadts/includes/notificationTypeOneView");


    }


}

?>