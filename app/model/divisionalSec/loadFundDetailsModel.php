<?php

session_start();

require 'connection.php'; 

if(isset($_GET['fundId'])){

}else{


$myRegion=$_SESSION['region'];
$myRegion;


//select district Region  
$sql1="SELECT superRegion  From region Where region.regionId=$myRegion";
$result1=$con->query($sql1);
$res1=$result1->fetch_all(MYSQLI_ASSOC);

foreach($res1 as $data1){ 
$_SESSION['districtRegion']=$data1['superRegion'];

}
$districtRegion= $_SESSION['districtRegion'];


//select provincial  Region
$sql2="SELECT superRegion  From region Where region.regionId= $districtRegion";
$result2=$con->query($sql2);
$res2=$result2->fetch_all(MYSQLI_ASSOC);
foreach($res2 as $data2){ 
$_SESSION['provincialRegion']=$data2['superRegion'];

}


$provincialRegion= $_SESSION['provincialRegion'];

echo$_SESSION['provincialRegion'];





        $officer_region=$_SESSION['region'];
        $sql="SELECT fund.fundId,fund.name,region.name as ren ,fund.region ,fund.publishedTime FROM  fund left JOIN region ON region.regionId =fund.region WhERE region.superRegion=$myRegion or fund.region=$myRegion or fund.region=0 or fund.region= $provincialRegion or fund.region=$districtRegion";        $result=$con->query($sql);
        $res=$result->fetch_all(MYSQLI_ASSOC); 
        $_SESSION['fundList']=$res;
        var_dump($res);








header("Location:/fadts/divisional/fundDetailsSelectView"); 
}

?>