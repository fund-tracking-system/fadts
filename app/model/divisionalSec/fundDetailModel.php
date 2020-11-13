<?php

session_start();

if(isset($_GET['fundId'])){

   require 'connection.php';   // database connection file calling

   $fundId = $_GET['fundId'];
   $dilivered=0;
   $unDelivered=0;
   $totlRecipients=0;

   echo $fundId;
   $officer_region=$_SESSION['region'];

   $sql="SELECT recipient.personId,recipient.deliveryStatus,person.region, region.superRegion  FROM recipient INNER JOIN person ON recipient.personId=person.personId INNER JOIN region ON region.regionId=person.region WHERE recipient.fundId= $fundId AND region.superRegion=$officer_region";
   $result=$con->query($sql);
   $res=$result->fetch_all(MYSQLI_ASSOC); 
 

   var_dump($res);
foreach($res as $data){


    if($data['deliveryStatus']==1){
        $dilivered++;
    }
    else if($data['deliveryStatus']==0){
        $unDelivered++;
    } 


    echo "<br>";
    echo $data['region'];
    echo "<br>";
    
}
echo $dilivered;
$_SESSION['fundDelivered']=$dilivered;
echo "<br>";
echo $unDelivered;
$_SESSION['fundUndelivered']=$unDelivered;
$totlRecipients=$dilivered+$unDelivered;
echo "<br>";
echo $totlRecipients;
$_SESSION['totalRecipients']=$totlRecipients;

header("Location:/fadts/divisional/selectFundDetailsView"); 



























}
?>