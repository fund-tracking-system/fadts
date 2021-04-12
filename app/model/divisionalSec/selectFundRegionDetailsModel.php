        <?php

        session_start();



            require 'connection.php';  

        // database connection file calling

        $regionId=$_POST["region"];
        $fundId=$_SESSION['funddetailsFundId'];
        $dilivered=0;
        $unDelivered=0;
        $totlRecipients=0;
        $officer_region=$_SESSION['region'];


        $sql="SELECT recipient.personId,recipient.deliveryStatus,person.region, region.superRegion  FROM recipient INNER JOIN person ON recipient.personId=person.personId INNER JOIN region ON region.regionId=person.region WHERE recipient.fundId= $fundId AND region.superRegion=$officer_region";
        $result=$con->query($sql);
        $res=$result->fetch_all(MYSQLI_ASSOC); 

        $sqlName="SELECT name  FROM fund WHERE fund.fundId=$fundId";
        $resultName=$con->query($sqlName);
        $resName=$resultName->fetch_all(MYSQLI_ASSOC); 



        foreach($resName as $datas){
        $_SESSION['SelectFundName']= $datas['name'];


        }


        var_dump($resName);
        foreach($res as $data){


            if($data['deliveryStatus']==1){
                $dilivered++;
            }
            else if($data['deliveryStatus']==0){
                $unDelivered++;
            } 


            echo "<br>";
            echo $data['region'];
            echo "<br>";
            
        }
        echo $dilivered;
        $_SESSION['fundDelivered']=$dilivered;
        echo "<br>";
        echo $unDelivered;
        $_SESSION['fundUndelivered']=$unDelivered;
        $totlRecipients=$dilivered+$unDelivered;
        echo "<br>";
        echo $totlRecipients;
        $_SESSION['totalRecipients']=$totlRecipients;


        $Fdate="SELECT publishedTime ,amountPerPerson FROM fund WHERE fundId=$fundId";
        $dateRes=$con->query($Fdate);
        $resDate=$dateRes->fetch_all(MYSQLI_ASSOC); 
        var_dump($resDate);
        foreach($resDate as $day){
                $_SESSION['publishedTime']= $day['publishedTime'];
                $_SESSION['amountPerPerson']=$day['amountPerPerson'];





        //header("Location:/fadts/divisional/selectFundDetailsView"); 

















        <div class="form-row" style="margin-bottom:50px;">
        <form method ="post"  action="/fadts/divisional/ViewAddPeople">
            <label for="region" class="inputLable" style="margin-right:15px;"><b>Select Fund Result
                    Region :</b></label>
            <?php

                    require 'connection.php'; 


                    $region = $_SESSION['region'];
                                
                    $rgn = "SELECT regionid,superRegion,name FROM region WHERE level=4 AND superRegion=$region";
                    $rgnRes = $con->query($rgn) ;
                    $res=$rgnRes->fetch_all(MYSQLI_ASSOC); 

                    ?>
            <select id='region' class='form-control Input' name='region' id='region'
                style='position:sticky;top:60px;overflow:scroll;  width:550px; '>
                <option value=".'<?php $_SESSION['region']?>'" ><?php echo $_SESSION['regionName']?> Division
                    Secretory Area</option>
                <?php 
                                foreach($res as $data){
                                echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';
                                }
                            ?>
            </select>
            <button type="submit" class="btn btn-primary btnNavR " >Search</button>


              </form>                  
        </div>

            
                        <div><input type="hidden"></input></div>









        }
        ?>




"/fadts/divisional/ViewAddPeople"