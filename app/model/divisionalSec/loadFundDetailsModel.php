<?php

session_start();

require 'connection.php'; 





        $officer_region=$_SESSION['region'];
        $sql="SELECT fund.fundId,fund.name,fund.region,fund.publishedTime FROM  fund INNER JOIN region ON region.superRegion =$officer_region  WhERE (region=$officer_region) OR (region=0 OR region.superRegion=$officer_region) OR (region=('SELECT region.superRegion from region Where region=$officer_region')) OR (region=(SElect region.superRegion from region Where region=(SELECT region.superRegion from region Where region=$officer_region)) )";        $result=$con->query($sql);
        $res=$result->fetch_all(MYSQLI_ASSOC); 
        $_SESSION['fundList']=$res;
        var_dump($res);








 header("Location:/fadts/divisional/fundDetailsSelectView"); 


?>