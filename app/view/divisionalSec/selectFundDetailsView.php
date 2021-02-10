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



                <fieldset class="tableBar">
                <div class="tbleMargin">


                    <table id="resultTable" class="display nowrap">
                        <thead>
                            <tr>
                                <th><B>Reecipient </B></th>
                                <th><B>Address</B></th>
                                <th><B>Region</B></th>
                                <th><B>Phone Number</B></th>
                                <th><B>Diliver Status</B></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($_SESSION['selectFundDetails'] as $fund){                              
                         ?>
                            <tr>
                                <td><input type="hidden" name="fundid" style="margin-left:30%;"
                                        value='<?php echo $fund['fundId']?>'><?php echo $fund['name']?></input>
                                </td>
                                <td><B style="margin-left:30%;"><?php echo $fund['address']?></B></td>
                                <td><B style="margin-left:30%;"><?php echo $fund['regionName']?></B></td>
                                <td><B style="margin-left:30%;"><?php echo $fund['mobile'] ?></B></td>

                                <td><B style="margin-left:30%;"><?php 
                                 if ( $fund['deliveryStatus']==1 ){
                                     echo " dilivered";

                                 }else{
                                     echo "un delivered";

                                    
                                 }

                                 
                                 
                                 ?></B></td>
                               
                            </tr>

                            <?php    } 
                        unset($_SESSION['results']);
                  ?>

                        </tbody>

                    </table>
                 <div>
                 </fieldset>   













            </fieldset>


        </form>

    </div>
</div>



<script>
$(document).ready(function() {
    $("#resultTable").DataTable();
});
</script>




<script>
$(document).ready(function() {
    $('#region').select2();
});
</script>


<?php include VIEW.'includes/footer.php' ?>