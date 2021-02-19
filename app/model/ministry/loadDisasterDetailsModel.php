


<?php
session_start();
            require 'connection.php'; 

            $myRegion=$_SESSION['region'];
            $myRegion;


             echo "akdgjga";
         

        
            
           

            //get  disasters
            
            $sql="SELECT disaster.disasterId,disaster.name,disaster.type,disaster.date,region.level as lvl,region.name as ren
            FROM disaster INNER JOIN disasterregion ON disaster.disasterId=disasterregion.disasterId INNER JOIN region ON region.regionId=disasterregion.regionId ";
            $result=$con->query($sql);
            $res=$result->fetch_all(MYSQLI_ASSOC); 


            $_SESSION['disasterList']=$res;

            header("Location:/fadts/ministry/viewDisasterDetails"); 

        ?>