<?php

session_start();

if(isset($_GET['disasterId']))
{
    require 'connection.php';   // database connection file calling

    
                    $disasterId = $_GET['disasterId'];
                    $victims=0;

                //     $provincialRegion= $_SESSION['provincialRegion']; 
                //     $districtRegion= $_SESSION['districtRegion']; 
                //     $divisionRegion= $_SESSION['divisionalRegion'];   


                    


            // get disaster details
                    $officer_region=$_SESSION['region'];
                    $sql="SELECT disaster.name ,disaster.type,disaster.date FROM disaster WhERE disasterId=$disasterId" ;
                    $result=$con->query($sql);
                    $res=$result->fetch_all(MYSQLI_ASSOC); 
                //     $_SESSION['fundList']=$res;
                    var_dump($res);




            //get disaster victims details
                    // $sql2="SELECT victim.disasterId, victim.personId, victim.totalDamage,person.name as name,person.address as address, person.phone as mobile ,region.name as regionName From victim INNER join person ON victim.personId=person.personId Inner join region On person.region=region.regionId Where (person.region=$officer_region or region.regionId=$provincialRegion or region.regionId=$districtRegion or region.regionId=1 or region.regionId=$divisionRegion) and (victim.disasterId= $disasterId)";
                    $sql2="SELECT victim.disasterId, victim.personId, victim.totalDamage,person.name as name,person.address as address, person.phone as mobile ,region.name as regionName From victim INNER join person ON victim.personId=person.personId Inner join region On person.region=region.regionId Where ((region.regionId=$officer_region) and (victim.disasterId= $disasterId))";

                    $result2=$con->query($sql2);
                    $res2=$result2->fetch_all(MYSQLI_ASSOC);
                    $_SESSION['victimadata']=$res2;
                    echo '<br>';
                    echo '<br>';
                    echo 'vicims data';
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
                    $_SESSION['lowDamege']=0;
                    $_SESSION['midDamege']=0;
                    $_SESSION['highDamege']=0;
                    $_SESSION['peekDamege']=0;


                    $lowDamege=0;
                    $midDamege=0;
                    $highDamege=0;
                    $peekDamege=0;
                    $totalDamege=0;
                    $victimsCount=0;




                    $_SESSION['victimsCount']=0;
                    $_SESSION['totalDamege']=0;
                    $totalDamege=0;
                    $victimsCount=0;


                    foreach($res2 as $data2)
                    {
                    
                    $totalDamege=$totalDamege+$data2['totalDamage'];
                    $victimsCount=$victimsCount+1;



                    if($data2['totalDamage']>100000)
                                {
                                        $peekDamege++;

                                }
                                else if($data2['totalDamage']>75000)
                                {

                                                $highDamege++;
                                                
                                }  
                                else if($data2['totalDamage']>25000)
                                {
            
                                    $midDamege++;
            
                                }
                                else
                                {
            
                                    $lowDamege++;
            
                                }



                    }


                        
                    $_SESSION['lowDamege']=$lowDamege;
                    $_SESSION['midDamege']=$midDamege;
                    $_SESSION['highDamege']=$highDamege;
                    $_SESSION['peekDamege']=$peekDamege;


                    $_SESSION['victimsCount']=$victimsCount;
                    $_SESSION['totalDamege']=$totalDamege;
                    echo $_SESSION['totalDamege'];
                    echo $_SESSION['victimsCount'];
                    echo  $_SESSION['disasterName'];
                    echo  $_SESSION['disasterType'];
}

header("Location:/fadts/village/selectDisasterDetails"); 



?>