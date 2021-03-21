<?php

session_start();

require 'connection.php';  
 


if(isset($_GET['fundId'])||isset($_GET['regionId']))

{
    

$fundId = $_GET['fundId'];
$region = $_GET['region'];
$level = $_GET['level'];
$_SESSION['funddetailsFundId']=  $fundId;
$dilivered=0;
$unDelivered=0;
$totlRecipients=0;
$officer_region=$_SESSION['region'];


    if($level==0){

        
    }








$sql="SELECT recipient.personId,recipient.deliveryStatus,person.region, region.superRegion,person.name as name,person.address as address,person.phone as mobile , region.name as regionName  FROM recipient INNER JOIN person ON recipient.personId=person.personId INNER JOIN region ON region.regionId=person.region WHERE recipient.fundId= $fundId ";
$result=$con->query($sql);
$res=$result->fetch_all(MYSQLI_ASSOC);   // awashaya visthra ganna  
var_dump($res);
$_SESSION['selectFundDetails']=$res;

$sqlName="SELECT name  FROM fund WHERE fund.fundId=$fundId";
$resultName=$con->query($sqlName);
$resName=$resultName->fetch_all(MYSQLI_ASSOC);      // fund name eka ganna



foreach($resName as $datas){
$_SESSION['SelectFundName']= $datas['name'];   // fund name eka ganna
}


var_dump($resName);



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
            echo "<br>";
            echo "<br>";
            echo $dilivered;

            echo "<br>";
            $_SESSION['fundDelivered']=$dilivered;
            echo "<br>";
            echo $unDelivered;
            $_SESSION['fundUndelivered']=$unDelivered;
            $totlRecipients=$dilivered+$unDelivered;
            echo "<br>";
            echo $totlRecipients;
            $_SESSION['totalRecipients']=$totlRecipients;


            $Fdate="SELECT publishedTime ,amountPerPerson FROM fund WHERE fundId=$fundId";
            $dateRes=$con->query($Fdate);
            $resDate=$dateRes->fetch_all(MYSQLI_ASSOC); 
            var_dump($resDate);

            
            foreach($resDate as $day){
                    $_SESSION['publishedTime']= $day['publishedTime'];
                    $_SESSION['amountPerPerson']=$day['amountPerPerson'];


            }

            header("Location:/fadts/ministry/selectFundDetailsView"); 
            }

// else {
    
//     $regionId=$_POST["region"];
//     $fundId = $_GET['fundId'];
//     $_SESSION['funddetailsFundId']=  $fundId;
//     $dilivered=0;
//     $unDelivered=0;
//     $totlRecipients=0;
//     $officer_region=$_SESSION['region'];


//     $sql="SELECT recipient.personId,recipient.deliveryStatus,person.region, region.superRegion  FROM recipient INNER JOIN person ON recipient.personId=person.personId INNER JOIN region ON region.regionId=person.region WHERE recipient.fundId= $fundId AND region.superRegion=5";
//     $result=$con->query($sql);
//     $res=$result->fetch_all(MYSQLI_ASSOC); 
    
//     $sqlName="SELECT name  FROM fund WHERE fund.fundId=$fundId";
//     $resultName=$con->query($sqlName);
//     $resName=$resultName->fetch_all(MYSQLI_ASSOC); 
    


//     foreach($resName as $datas){
//        $_SESSION['SelectFundName']= $datas['name'];


//     }


//     var_dump($resName);
//     foreach($res as $data){


//         if($data['deliveryStatus']==1){
//             $dilivered++;
//         }
//         else if($data['deliveryStatus']==0){
//             $unDelivered++;
//         } 


//         echo "<br>";
//         echo $data['region'];
//         echo "<br>";
        
//     }
//     echo $dilivered;
//     $_SESSION['fundDelivered']=$dilivered;
//     echo "<br>";
//     echo $unDelivered;
//     $_SESSION['fundUndelivered']=$unDelivered;
//     $totlRecipients=$dilivered+$unDelivered;
//     echo "<br>";
//     echo $totlRecipients;
//     $_SESSION['totalRecipients']=$totlRecipients;


//     $Fdate="SELECT publishedTime ,amountPerPerson FROM fund WHERE fundId=$fundId";
//     $dateRes=$con->query($Fdate);
//     $resDate=$dateRes->fetch_all(MYSQLI_ASSOC); 
//     var_dump($resDate);
//     foreach($resDate as $day){
//             $_SESSION['publishedTime']= $day['publishedTime'];
//             $_SESSION['amountPerPerson']=$day['amountPerPerson'];

// }

















?>