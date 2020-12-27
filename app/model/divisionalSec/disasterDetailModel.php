<?php

session_start();

if(isset($_GET['disasterId'])||isset($_GET['regionId']) )
{
    require 'connection.php';   // database connection file calling

    
                    $disasterId = $_GET['disasterId'];
                    $regionID = $_GET['regionId'];
                    $victims=0;
                    echo    $regionID;


            // get disaster details
                    $officer_region=$_SESSION['region'];
                    $sql="SELECT disaster.name ,disaster.type,disaster.date FROM disaster WhERE disasterId=$disasterId" ;
                    $result=$con->query($sql);
                    $res=$result->fetch_all(MYSQLI_ASSOC); 
                    $_SESSION['fundList']=$res;
                    var_dump($res);


            //get disaster victims details
                    $sql2="SELECT  victim.personId, victim.totalDamage From victim INNER join person ON victim.personId=person.personId Where person.region=$regionID and victim.disasterId= $disasterId";
                    $result2=$con->query($sql2);
                    $res2=$result2->fetch_all(MYSQLI_ASSOC);
                    var_dump($res2);


            //store disaster datas
                    foreach($res as $data){
                        $_SESSION['disasterName']=$data['name'];
                        $_SESSION['disasterType']=$data['type'];
                        $_SESSION['disasterDate']=$data['date'];
                    }

                    //get victims data
                    $_SESSION['victimsCount']=0;
                    $_SESSION['totalDamege']=0;
                    $totalDamege=0;
                    $victimsCount=0;
                    foreach($res2 as $data2){
                    
                    $totalDamege=$totalDamege+$data2['totalDamage'];
                    $victimsCount=$victimsCount+1;

                    }

                    $_SESSION['victimsCount']=$victimsCount;
                    $_SESSION['totalDamege']=$totalDamege;
                    echo $_SESSION['totalDamege'];
                    echo $_SESSION['victimsCount'];
                    echo  $_SESSION['disasterName'];
                    echo  $_SESSION['disasterType'];
}

header("Location:/fadts/divisional/selectDisasterDetails"); 



?>