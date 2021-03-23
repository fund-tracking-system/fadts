<?php

session_start();

require 'connection.php'; 

if(isset($_GET['fundId'])){

}else{


        $myRegion=$_SESSION['region'];

        $provincialRegion= $_SESSION['provincialRegion'];               //save provincial region
        $districtRegion= $_SESSION['districtRegion'];                   //  save district region






        $officer_region=$_SESSION['region'];
        $sql="SELECT fund.fundId,fund.name,region.level as lvl,region.name as ren ,fundregion.regionId ,fund.publishedTime FROM  fund  right join fundregion On fund.fundId=fundregion.fundId inner join  region ON region.regionId =fundregion.regionId WhERE region.superRegion=$myRegion or fundregion.regionId=$myRegion or fundregion.regionId=1 or fundregion.regionId= $provincialRegion or fundregion.regionId=$districtRegion";        
        $result=$con->query($sql);
        $res=$result->fetch_all(MYSQLI_ASSOC); 
        $_SESSION['fundList']=$res;
        //var_dump($res);
       


echo '<br>';
//echo "ashva";




header("Location:/fadts/divisional/fundDetailsSelectView"); 
}

?>