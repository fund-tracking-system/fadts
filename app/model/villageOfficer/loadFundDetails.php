<?php 

session_start();

require 'connection.php'; 
$myRegion=$_SESSION['region'];

  //select divisional Region  


  
  $divisionalRegion= $_SESSION['divisionalRegion'];                   //  save Divisional region




  $districtRegion= $_SESSION['districtRegion'];               //save district region



  
  

  $provincialRegion= $_SESSION['provincialRegion'];      //save provincial region

  
  $sql4="SELECT fund.fundId,fund.name,region.level as lvl,region.name as ren ,fundregion.regionId ,fund.publishedTime FROM  fund  right join fundregion On fund.fundId=fundregion.fundId inner join  region ON region.regionId =fundregion.regionId WHERE region.regionid=$myRegion or fundregion.regionId=$myRegion or fundregion.regionId=1 or fundregion.regionId= $provincialRegion or fundregion.regionId=$districtRegion or fundregion.regionId=$divisionalRegion";        
  $result4=$con->query($sql4);
  $res4=$result4->fetch_all(MYSQLI_ASSOC);
  $_SESSION['fundList']=$res4;
  

  
header("Location:/fadts/village/fundDetails"); 

?>