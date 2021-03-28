<?php
session_start();
            require 'connection.php'; 

            $myRegion=$_SESSION['region'];
          

                
        $divisionRegion= $_SESSION['divisionalRegion'];                   //  save Divisional region




        $districRegion= $_SESSION['districtRegion'];               //save district region



        
        

        $provincialRegion= $_SESSION['provincialRegion'];      //save provincial region

        

            //get region disasters
            
            $sql="SELECT DISTINCT victim.disasterId,disaster.disasterId,disaster.name,disaster.type,disaster.date,region.level as lvl,region.name as ren
            FROM disaster INNER JOIN disasterregion ON disaster.disasterId=disasterregion.disasterId INNER JOIN region ON region.regionId=disasterregion.regionId INNER JOIN victim ON victim.disasterId=disaster.disasterId WHERE 
            disasterregion.regionId= $divisionRegion OR disasterregion.regionId= $districRegion OR disasterregion.regionId=$provincialRegion OR disasterregion.regionId=1 OR disasterregion.regionId= $myRegion ";
            $result=$con->query($sql);
            $res=$result->fetch_all(MYSQLI_ASSOC); 


            $_SESSION['disasterList']=$res;

            var_dump($res);

           header("Location:/fadts/village/viewDisasterDetails"); 

        ?>