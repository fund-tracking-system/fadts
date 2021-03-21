<?php

session_start();

if(isset($_GET['disasterId']))
{
    require 'connection.php';   // database connection file calling

    
                    $disasterId = $_GET['disasterId'];
                    $region = $_GET['region']; //top most super region by default
                    $level = $_GET['level']; 
                    $victims=0;
                    echo $level;
                    echo'<br>';
                    echo $region;
                    echo'<br>';



                                   


            // get disaster details
                    $officer_region=$_SESSION['region'];
                    $sql="SELECT disaster.name ,disaster.type,disaster.date FROM disaster WhERE disasterId=$disasterId" ;
                    $result=$con->query($sql);
                    $res=$result->fetch_all(MYSQLI_ASSOC); 
                //     $_SESSION['fundList']=$res;
                    var_dump($res);


            //get disaster victims details

                if($level==0){  //island wide disaster

                    $sql2="SELECT victim.disasterId, victim.personId, victim.totalDamage,person.name as name,person.address as address, person.phone as mobile ,region.name as regionName From victim INNER join person ON victim.personId=person.personId Inner join region On person.region=region.regionId Where (victim.disasterId= $disasterId)";

                    $result2=$con->query($sql2);
                    $res2=$result2->fetch_all(MYSQLI_ASSOC);
                    $_SESSION['victimadata']=$res2; 

                }

                else if($level==1){  // provincial wide disaster

                    $sql2="SELECT victim.disasterId, victim.personId, victim.totalDamage,person.name as name,person.address as address, person.phone as mobile ,region.name as regionName From victim INNER join person ON victim.personId=person.personId Inner join region On person.region=region.regionId Where (victim.disasterId= $disasterId)";
                    $result2=$con->query($sql2);
                    $res2=$result2->fetch_all(MYSQLI_ASSOC);
                    $_SESSION['victimadata']=$res2;



                }
                else if ($level==2){     // distric wide disaster


                        
                    $sql2="SELECT victim.disasterId, victim.personId, victim.totalDamage,person.name as name,person.address as address, person.phone as mobile ,region.name as regionName From victim INNER join person ON victim.personId=person.personId Inner join region On person.region=region.regionId Where (victim.disasterId= $disasterId)";
                    $result2=$con->query($sql2);
                    $res2=$result2->fetch_all(MYSQLI_ASSOC);
                    $_SESSION['victimadata']=$res2;


                        
                }
                else if ($level==3){     // divisional wide area disaster


                    $sql2="SELECT victim.disasterId, victim.personId, victim.totalDamage,person.name as name,person.address as address, person.phone as mobile ,region.name as regionName From victim INNER join person ON victim.personId=person.personId Inner join region On person.region=region.regionId Where (victim.disasterId= $disasterId)and region.superRegion=$region";

                    $result2=$con->query($sql2);
                    $res2=$result2->fetch_all(MYSQLI_ASSOC);
                    $_SESSION['victimadata']=$res2;

                }
                else if($level==4){     // vilage area disasster

                    $sql2="SELECT victim.disasterId, victim.personId, victim.totalDamage,person.name as name,person.address as address, person.phone as mobile ,region.name as regionName From victim INNER join person ON victim.personId=person.personId Inner join region On person.region=region.regionId Where (victim.disasterId= $disasterId) and region.regionId=$region";

                    $result2=$con->query($sql2);
                    $res2=$result2->fetch_all(MYSQLI_ASSOC);
                    $_SESSION['victimadata']=$res2;

                }



                    // $sql2="SELECT victim.disasterId, victim.personId, victim.totalDamage,person.name as name,person.address as address, person.phone as mobile ,region.name as regionName From victim INNER join person ON victim.personId=person.personId Inner join region On person.region=region.regionId Where (person.region=$officer_region or region.regionId=$provincialRegion or region.regionId=$districtRegion or region.regionId=1 or region.regionId=$divisionRegion) and (victim.disasterId= $disasterId)";
                //     $sql2="SELECT victim.disasterId, victim.personId, victim.totalDamage,person.name as name,person.address as address, person.phone as mobile ,region.name as regionName From victim INNER join person ON victim.personId=person.personId Inner join region On person.region=region.regionId Where (victim.disasterId= $disasterId)";

                //     $result2=$con->query($sql2);
                //     $res2=$result2->fetch_all(MYSQLI_ASSOC);
                //     $_SESSION['victimadata']=$res2;
                    echo '<br>';
                    echo '<br>';
                    echo '<br>';
                    var_dump($res2);
                    echo '<br>';
                    echo '<br>';
                    echo '<br>';

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


                    foreach($res2 as $data2)
                    {
                    
                        $totalDamege=$totalDamege+$data2['totalDamage'];
                        $victimsCount++;

                    }

                    $_SESSION['victimsCount']=$victimsCount;
                    $_SESSION['totalDamege']=$totalDamege;


                    echo $_SESSION['totalDamege'];
                    echo '<br>';
                    echo $_SESSION['victimsCount'];
                    echo '<br>';
                    echo  $_SESSION['disasterName'];
                    echo '<br>';
                    echo  $_SESSION['disasterType'];

                    echo $victimsCount;
}

header("Location:/fadts/ministry/selectDisasterDetails"); 



?>