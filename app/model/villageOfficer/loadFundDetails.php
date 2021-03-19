<?php 

session_start();

require 'connection.php'; 
$myRegion=$_SESSION['region'];

  //select divisional Region  

  $sql1="SELECT superRegion  From region Where region.regionId=$myRegion";
  $result1=$con->query($sql1);
  $res1=$result1->fetch_all(MYSQLI_ASSOC);

  
  foreach($res1 as $data1){ 
  $_SESSION['divisionalRegion']=$data1['superRegion'];

  }
  $divisionalRegion= $_SESSION['divisionalRegion'];                   //  save Divisional region



  $sql2="SELECT superRegion  From region Where region.regionId= $divisionalRegion";
  $result2=$con->query($sql2);
  $res2=$result2->fetch_all(MYSQLI_ASSOC);
  foreach($res2 as $data2){ 
  $_SESSION['districtRegion']=$data2['superRegion'];

  }

  $districtRegion= $_SESSION['districtRegion'];               //save district region



  
  $sql3="SELECT superRegion  From region Where region.regionId= $districtRegion";
  $result3=$con->query($sql3);
  $res3=$result3->fetch_all(MYSQLI_ASSOC);
  foreach($res3 as $data3){ 
  $_SESSION['provincialRegion']=$data2['superRegion'];

  }


  $provincialRegion= $_SESSION['provincialRegion'];      //save provincial region

  
  $sql4="SELECT fund.fundId,fund.name,region.level as lvl,region.name as ren ,fundregion.regionId ,fund.publishedTime FROM  fund  right join fundregion On fund.fundId=fundregion.fundId inner join  region ON region.regionId =fundregion.regionId WHERE region.regionid=$myRegion or fundregion.regionId=$myRegion or fundregion.regionId=1 or fundregion.regionId= $provincialRegion or fundregion.regionId=$districtRegion or fundregion.regionId=$divisionalRegion";        
  $result4=$con->query($sql4);
  $res4=$result4->fetch_all(MYSQLI_ASSOC);
  $_SESSION['fundList']=$res4;

  
header("Location:/fadts/village/fundDetails"); 



?>