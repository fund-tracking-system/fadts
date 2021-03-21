


<?php
session_start();
            require 'connection.php'; 

            $myRegion=$_SESSION['region'];
            $myRegion;


             echo "akdgjga";
         

             
            $sql="SELECT Distinct disaster.disasterId,disaster.name,disaster.type,disaster.date
            FROM disaster
            
            inner join victim ON 
            victim.disasterId=disaster.disasterId ";
            $result=$con->query($sql);
            $res=$result->fetch_all(MYSQLI_ASSOC); 
 
        


            
           

            //get  disasters
            
            // $sql="SELECT Distinct disaster.disasterId,disaster.name,disaster.type,disaster.date,region.level as lvl,region.name as ren,region.regionId as rId
            // FROM disaster INNER JOIN disasterregion ON disaster.disasterId=disasterregion.disasterId 
            // INNER JOIN region ON region.regionId=disasterregion.regionId 
            // inner join victim ON 
            // victim.disasterId=disaster.disasterId ";
            // $result=$con->query($sql);
            // $res=$result->fetch_all(MYSQLI_ASSOC); 


            $_SESSION['disasterList']=$res;

            header("Location:/fadts/ministry/viewDisasterDetails"); 

        ?>