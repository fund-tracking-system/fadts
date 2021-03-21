<?php  echo "adsada";

  session_start();

  require 'connection.php'; 
  $myRegion=$_SESSION['region'];

  
    
    
  $sql4="SELECT Distinct fund.name, fund.fundId,fund.publishedTime FROM  fund ";        
  $result4=$con->query($sql4);
  $res4=$result4->fetch_all(MYSQLI_ASSOC);
  $_SESSION['fundList']=$res4;



    
    // $sql4="SELECT Distinct fund.name, fund.fundId,region.level as lvl,region.regionId as rid,region.name as ren ,fundregion.regionId ,fund.publishedTime FROM  fund  right join fundregion On fund.fundId=fundregion.fundId inner join  region ON region.regionId =fundregion.regionId";        
    // $result4=$con->query($sql4);
    // $res4=$result4->fetch_all(MYSQLI_ASSOC);
    // $_SESSION['fundList']=$res4;

    
  header("Location:/fadts/ministry/fundDetails"); 



?>