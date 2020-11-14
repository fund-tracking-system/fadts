<?php 
session_start();
require 'connection.php';  


if( isset($_GET['nid']) ) {
    // database connection file calling
    $nic= $_GET['nid'];
        echo $nic;
    
                 
        $rgn = "SELECT* FROM person WHERE nid=$nic";
        $rgnRes = $con->query($rgn) ;
        $notif_res=$rgnRes->fetch_all(MYSQLI_ASSOC); 
       foreach( $notif_res as $data){
           $_SESSION['nid']=$data['nid'];
           $_SESSION['monthlyIncome']=$data['monthlyIncome'];
           $_SESSION['disordered']=$data['disordered'];
         
       } 
        
 
  
   var_dump ($_SESSION['updateNotificationResults']);
  // header("Location:/fadts/includes/updatePeople" );

}
?>
