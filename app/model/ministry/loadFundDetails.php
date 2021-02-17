<?php  echo "adsada";

session_start();

require 'connection.php'; 
$myRegion=$_SESSION['region'];

echo $myRegion;
  




  
  $sql3="SELECT superRegion  From region Where region.regionId= $districtRegion";
  $result3=$con->query($sql3);
  $res3=$result3->fetch_all(MYSQLI_ASSOC);
  foreach($res3 as $data3){ 
  $_SESSION['provincialRegion']=$data2['superRegion'];

  }


  $provincialRegion= $_SESSION['provincialRegion'];      //save provincial region

  
  $sql4="SELECT fund.fundId,fund.name,region.level as lvl,region.name as ren ,fundregion.regionId ,fund.publishedTime FROM  fund  right join fundregion On fund.fundId=fundregion.fundId inner join  region ON region.regionId =fundregion.regionId WhERE region.regionid=$myRegion or fundregion.regionId=$myRegion or fundregion.regionId=1 or fundregion.regionId= $provincialRegion or fundregion.regionId=$districtRegion or fundregion.regionId=$divisionalRegion";        
  $result4=$con->query($sql4);
  $res4=$result4->fetch_all(MYSQLI_ASSOC);
  $_SESSION['fundList']=$res4;

  
// header("Location:/fadts/ministry/fundDetails"); 



?>