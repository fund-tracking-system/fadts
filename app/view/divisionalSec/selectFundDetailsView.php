<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form>
            <fieldset class="BackgroundFS">

                <fieldset style="background-color: #EBF6FA; border:none;margin-top:-10px;">

                    <fieldset style="background-color: #EBF6FA; border:none; margin-top:30px;">

                        <h2 style="margin-bottom:30px;"> FUND DETAILS ANALISYS</h2>

                        
				<h2><?php echo  $_SESSION['SelectFundName'];?></h2>
				
                        <div class="form-row" style="margin-bottom:50px;">
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
                                <option value="23" ><?php echo $_SESSION['regionName']?> Division
                                    Secretory Area</option>
                                <?php 
                                                foreach($res as $data){
                                                echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';
                                                }
                                            ?>
                            </select>
                            <button type="submit" class="btn btn-primary btnNavR ">Search</button>

                        </div>

                            
                                        <div><input type="hidden"></input></div>

                        <table style="margin-bottom:50px;">

                            <thead>
                                

<th>
    <div class="box3">
        <h1>Per Person</h1>
        <h3> <?php echo $_SESSION['amountPerPerson']?></h3>
        <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;"
                                                    value="<?php echo $_SESSION['amountPerPerson']?>" readonly></input>
    </div></th>
                        
    <th>
                        <div class="box3">
    <h1>Fund Amount</h1>
    <h3><?php echo $_SESSION['amountPerPerson']*$_SESSION['totalRecipients']?></h3>
    <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;" id='dilivered'
                                                    value="<?php echo $_SESSION['fundDelivered']?>" readonly></input>
</div></th>
  
    <th>
    <div class="box3">
        <h1>Fund Creator</h1>
        <h3>ministry</h3>
        <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;" id='undelivered'
                                                    value="<?php echo $_SESSION['fundUndelivered']?>" readonly></input>
    </div></th>
  
    <th>
    <div class="box3">
        <h1>Analysised Region</h1>
        <h3> <?php echo  $_SESSION['regionName']?></h3>
        <input class="form-control details" id='' type="hidden"
                                                    style="margin-left:100px;"
                                                    value="<?php echo  $_SESSION['regionName']?>" readonly></input>
                                                    <input class="form-control details" id='' type="hidden"
                                                    style="margin-left:100px;"
                                                    value="<?php echo $_SESSION['publishedTime']?>" readonly></input>
    </div></th>
 
    <th>
                                                    <div class="box3">
                                <h1>Published Day</h1>
                                <h3><?php echo $_SESSION['publishedTime']?>"</h3>
                            </div></th>
                            <tr>

                            </thead>
                        </table>
                 

                    </fieldset>

                    <script>
                    window.onload = function() {


                        var dilivered = $("#dilivered").val();
                        var undelivered = $("#undelivered").val();
                        var dilivered = $("#dilivered").val();



                        var chart = new CanvasJS.Chart("chartContainer", {
                            animationEnabled: true,
                            title: {
                                text: "FUND DILIVERY ANALISYS",
                                horizontalAlign: "left"
                            },
                            data: [{
                                type: "doughnut",
                                startAngle: 70,
                                //innerRadius: 60,
                                indexLabelFontSize: 17,
                                indexLabel: "{label} - #percent%",
                                toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                                dataPoints: [

                                    {
                                        y: dilivered,
                                        label: "Fund Delivered"
                                    },
                                    {
                                        y: undelivered,
                                        label: "Undelivered"
                                    }
                                ]
                            }]
                        });
                        chart.render();

                    }
                    </script>

                </fieldset>

                <div class="detail-box-Analyse">

                    <ul class="ul-first"><B>
                            <br>
                            <br>
                            <div class="box3" >
                            <li style="color:blue; margin:5px;">Dilivered
                                Amount<?php echo "--------> ";?><?php echo $_SESSION['fundDelivered'] ?> Persons</li>
                                </div>
                            <br>
                            <div class="box3">
                            <li style="color:red; margin:5px;">Undelivered
                                amount<?php echo "-----> ";?><?php echo $_SESSION['fundUndelivered'] ?> Persons</li>
                                </div>
                            <br><br>
                            <br>
                            <div class="box3">
                            <li style="color:green;margin:5px;">Dilivered
                                Money<?php echo "------> ";?><?php echo $_SESSION['amountPerPerson']*$_SESSION['fundDelivered'] ?>
                                Rs</li>
                                </div>
                            <br>
                            <div class="box3">
                            <li style="color:brown; margin:5px;" >Undelivered
                                Miney<?php echo "----> ";?><?php echo $_SESSION['amountPerPerson']*$_SESSION['fundUndelivered'] ?>
                                Rs</li>
                                </div>
                        </B></ul>






                </div>

                <div id="chartContainer" style="height: 370px; width: 70%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



            </fieldset>


        </form>

    </div>
</div>







<script>
$(document).ready(function() {
    $('#region').select2();
});
</script>


<?php include VIEW.'includes/footer.php' ?>