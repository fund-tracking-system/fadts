<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" id="formAddPeople" action="/fadts/divisional/addPeopleModel">
            <fieldset class="BackgroundFS">


                <h2 style="margin-bottom:100px;"> FUND DETAILS ANALISYS</h2>
                <table>

                    <thead>
                        <tr>
                            <th>
                                
                                    <div class="form-row">
                                        <label for="nid" class="inputLable" ><b>Amount Per
                                                Person</b></label>
                                        <input class="form-control details" style="margin-left:100px;" 
                                            value="<?php echo $_SESSION['amountPerPerson']?>" readonly></input>
                                    </div>
                                    
                            </th>
                            <th>
                                
                                <div class="form-row">
                                    <label for="nid" class="inputLable" ><b>Delivered
                                            amount</b></label>
                                    <input class="form-control details" style="margin-left:100px;" id='dilivered'
                                        value="<?php echo $_SESSION['fundDelivered']?>" readonly></input>
                                </div>
                                
                        </th>
                            <th>
                                <div class="form-row">
                                    <label for="nid" class="inputLable" ><b>Unelivered
                                            amount</b></label>
                                    <input class="form-control details" style="margin-left:100px;" id='undelivered'
                                        value="<?php echo $_SESSION['fundUndelivered']?>" readonly></input>
                                </div>
                            </th>
                            <th>

                                <div class="form-row">
                                    <label for="nid" class="inputLable"><b>Total Recipient
                                            amount</b></label>
                                    <input class="form-control details" id='' style="margin-left:100px;"
                                        value="<?php echo $_SESSION['totalRecipients']?>" readonly></input>
                                </div>
                            </th>
                            <th>
                                <div class="form-row">
                                    <label for="nid" class="inputLable"><b>Published Date
                                            amount
                                        </b></label>
                                    <input class="form-control details" id='' style="margin-left:100px;"
                                        value="<?php echo $_SESSION['publishedTime']?>" readonly></input>
                                </div>
                            </th>
                        <tr>
                    </thead>
                </table>


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


                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>




            </fieldset>
        </form>

    </div>
</div>










<?php include VIEW.'includes/footer.php' ?>