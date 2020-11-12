<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" id="formAddPeople" action="/fadts/divisional/addPeopleModel">
            <fieldset class="BackgroundFS">
                <h2 style="margin-bottom:100px;"> FUND DETAILS ANALISYS</h2>

                <div class="form-row" style="margin-top:40px;">
                    <label for="nid" class="inputLable" style="margin-top:-40px; "><b>Delivered amount</b></label>
                    <input class="form-control details" style="margin-left:43px;" id='dilivered'
                        value="<?php echo $_SESSION['fundDelivered']?>" readonly></input>
                </div>
                <div class="form-row">
                    <label for="nid" class="inputLable" style="margin-top:-40px;"><b>Unelivered amount</b></label>
                    <input class="form-control details" style="margin-left:33px;" id='undelivered'
                        value="<?php echo $_SESSION['fundUndelivered']?>" readonly></input>
                </div>

                <div class="form-row">
                    <label for="nid" class="inputLable" style="margin-top:-40px;"><b>Total Recipient amount</b></label>
                    <input class="form-control details" id='' value="<?php echo $_SESSION['totalRecipients']?>"
                        readonly></input>
                </div>



                <script>
                window.onload = function() {


                    var dilivered = $("#dilivered").val();
                    var undelivered = $("#undelivered").val();
                    var dilivered = $("#dilivered").val();

                    var x = 40;
                
                    var chart = new CanvasJS.Chart("chartContainer", {
                        animationEnabled: true,
                        title: {
                            text: "FUND DILIVERY ANALISYS",
                            horizontalAlign: "left"
                        },
                        data: [{
                            type: "doughnut",
                            startAngle: 60,
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