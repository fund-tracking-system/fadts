<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" id="formAddPeople" action="/fadts/divisional/addPeopleModel">
            <fieldset class="BackgroundFS">
                <fieldset style="background-color: #EBF6FA; border:none;margin-top:-10px;">
                    <fieldset style="background-color: #EBF6FA; border:none; margin-top:30px;">

                        <h2 style="margin-bottom:30px;"> FUND DETAILS ANALISYS</h2>


                        <table>

                            <thead>
                                <tr>


                                    <th>
                                        <fieldset
                                            class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b>Amount Per
                                                        Person <br> <br>
                                                        <?php echo $_SESSION['amountPerPerson']?></b></label>
                                                <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;"
                                                    value="<?php echo $_SESSION['amountPerPerson']?>" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                    <th>
                                        <fieldset
                                        class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="dilivered" class="inputLable"><b>Delivered
                                                        amount <br> <br>
                                                        <?php echo $_SESSION['fundDelivered']?></b></label>
                                                <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;" id='dilivered'
                                                    value="<?php echo $_SESSION['fundDelivered']?>" readonly></input>
                                            </div>
                                        </fieldset>

                                    </th>
                                    <th>
                                        <fieldset
                                        class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b>Unelivered
                                                        amount <br> <br>
                                                        <?php echo $_SESSION['fundUndelivered']?></b></label>
                                                <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;" id='undelivered'
                                                    value="<?php echo $_SESSION['fundUndelivered']?>" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                    <th>
                                        <fieldset
                                        class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b>Total Recipient
                                                        amount<br>
                                                        <br><?php echo $_SESSION['totalRecipients']?></b></label>
                                                <input class="form-control details" id='' type="hidden"
                                                    style="margin-left:100px;"
                                                    value="<?php echo $_SESSION['totalRecipients']?>" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                    <th>
                                        <fieldset class="FSdetail"
                                            style="margin-right:30px;">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b>Published
                                                        <br> <br><?php echo $_SESSION['publishedTime']?>
                                                    </b></label>
                                                <input class="form-control details" id='' type="hidden"
                                                    style="margin-left:100px;"
                                                    value="<?php echo $_SESSION['publishedTime']?>" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                <tr>


                            </thead>
                        </table>
                    </fieldset>

                    <script>
                    // window.onload = function() {


                    //     var dilivered = $("#dilivered").val();
                    //     var undelivered = $("#undelivered").val();
                    //     var dilivered = $("#dilivered").val();



                    //     var chart = new CanvasJS.Chart("chartContainer", {
                    //         animationEnabled: true,
                    //         title: {
                    //             text: "FUND DILIVERY ANALISYS",
                    //             horizontalAlign: "left"
                    //         },
                    //         data: [{
                    //             type: "doughnut",
                    //             startAngle: 70,
                    //             //innerRadius: 60,
                    //             indexLabelFontSize: 17,
                    //             indexLabel: "{label} - #percent%",
                    //             toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                    //             dataPoints: [

                    //                 {
                    //                     y: dilivered,
                    //                     label: "Fund Delivered"
                    //                 },
                    //                 {
                    //                     y: undelivered,
                    //                     label: "Undelivered"
                    //                 }
                    //             ]
                    //         }]
                    //     });
                    //     chart.render();

                    // }

                    $(function () {
                        var ctx = document.getElementById('chartContainer').getContext('2d');
                        var chart = new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                                labels: ['Delivered','Undelivered'],
                                datasets: [{
                                    label: '# fund release',
                                    data: [10,4],
                                    backgroundColor: [
                                        '#2980b9',
                                        '#b30000',
                                        // '#f1c40f'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                rotation:Math.PI*10.5,
                                animation:{
                                animatescale:true
                                },
                                
                            }
                        }); 
                        chart.canvas.parentNode.style.height = '100%';

                    });
                    </script>

                    <div style="height: 1000px; width:800px;margin-top:30px;">
                        <canvas id="chartContainer"></canvas>
                    </div>
                    <!-- <div id="chartContainer" style="height: 370px; width: 100%;margin-top:30px;"></div> -->
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>




                </fieldset>
        </form>

    </div>
</div>










<?php include VIEW.'includes/footer.php' ?>