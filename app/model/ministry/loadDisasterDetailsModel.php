


<?php
session_start();
            require 'connection.php'; 

            $myRegion=$_SESSION['region'];
            $myRegion;


             echo "akdgjga";
            //select divisional Region  regions
            $sql1="SELECT superRegion  From region Where region.regionId=$myRegion";
            $result1=$con->query($sql1);
           $res1=$result1->fetch_all(MYSQLI_ASSOC);

           foreach($res1 as $data1){ 
           $_SESSION['divisionalRegion']=$data1['superRegion'];

           }
           $divisionRegion= $_SESSION['divisionalRegion'];      // save divional region id


           //select districtRegion
           $sql2="SELECT superRegion  From region Where region.regionId= $divisionRegion";
           $result2=$con->query($sql2);
          $res2=$result2->fetch_all(MYSQLI_ASSOC);
          foreach($res2 as $data2){ 
            $_SESSION['districRegion']=$data2['superRegion'];
 
            }

            $districRegion= $_SESSION['districRegion'];         //save distric region id 

            
            //select ProvincialRegion
            $sql3="SELECT superRegion  From region Where region.regionId= $districRegion";
            $result3=$con->query($sql3);
           $res3=$result3->fetch_all(MYSQLI_ASSOC);
           foreach($res3 as $data3){ 
             $_SESSION['provincialRegion']=$data3['superRegion'];
  
             }

             $provincialRegion=$_SESSION['provincialRegion'];
             echo$_SESSION['provincialRegion'];


            //get region disasters
            
            $sql="SELECT disaster.disasterId,disaster.name,disaster.type,disaster.date,region.level as lvl,region.name as ren
            FROM disaster INNER JOIN disasterregion ON disaster.disasterId=disasterregion.disasterId INNER JOIN region ON region.regionId=disasterregion.regionId WHERE 
            region.regionId= $divisionRegion OR region.regionId= $districRegion Or region.regionId=$provincialRegion or region.regionId=1 or region.regionId= $myRegion";
            $result=$con->query($sql);
            $res=$result->fetch_all(MYSQLI_ASSOC); 


            $_SESSION['disasterList']=$res;

            header("Location:/fadts/village/viewDisasterDetails"); 

        ?>