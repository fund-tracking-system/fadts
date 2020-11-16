<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form>
            <fieldset class="BackgroundFS">

                <fieldset style="background-color: #EBF6FA; border:none;margin-top:-10px;">

                    <fieldset style="background-color: #EBF6FA; border:none; margin-top:30px;">

                        <h2 style="margin-bottom:30px;"> DISASTER DETAILS ANALISYS</h2>
                        

                        <table style="margin-bottom:50px;">

                            <thead>
                                <tr>


                                    <th>
                                        <fieldset class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b>Disaster Name <br> <br>
                                                        <?php echo "Tsunami "?></b></label>
                                                <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;"
                                                    value="" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                    <th>
                                        <fieldset class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="dilivered" class="inputLable"><b>Victims Amount
                                                        <br> <br>
                                                        <?php echo  "450";?></b></label>
                                                <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;" id='dilivered'
                                                    value="" readonly></input>
                                            </div>
                                        </fieldset>

                                    </th>
                                    <th>
                                        <fieldset class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b>Disaster Creator  <br> <br>
                                                        <?php echo "Ministry "?></b></label>
                                                <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;" id='undelivered'
                                                    value="" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                    <th>
                                        <fieldset class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b>Analysised Region
                                                        <br>
                                                        <br><?php echo  $_SESSION['regionName']?></b></label>
                                                <input class="form-control details" id='' type="hidden"
                                                    style="margin-left:100px;"
                                                    value="<?php echo  $_SESSION['regionName']?>" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                    <th>
                                        <fieldset class="FSdetail" style="margin-right:30px;">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b>Disaster Date
                                                        <br> <br><?php echo "2007-10-01"?>
                                                    </b></label>
                                                <input class="form-control details" id='' type="hidden"
                                                    style="margin-left:100px;"
                                                    value="" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                <tr>


                            </thead>
                        </table>


                    </fieldset>

                    <!-- <script>
                    window.onload = function() {


                        var dilivered = $("#dilivered").val();
                        var undelivered = $("#undelivered").val();
                        var dilivered = $("#dilivered").val();



                        var chart = new CanvasJS.Chart("chartContainer", {
                            animationEnabled: true,
                            title: {
                                text: "DISASTER VICTIMS ANALISYS",
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
                    </script> -->

                </fieldset>

                <div class="detail-box-Analyse">

                    <ul class="ul-first"><B>
                            <br>
                            <br>
                            <li style="color:blue;">Victims
                                Amount<?php echo "--------> ";?><?php echo "180" ?> Persons</li>
                            <br>
                            <li style="color:red;">Fully
                                Victims<?php echo "-----> ";?><?php echo '100' ?> Persons</li>
                            <br><br>
                            <br>
                            <li style="color:green;">Astimate
                                Money<?php echo "------> ";?><?php echo "133" ?>
                                Rs</li>
                            <br>
                            <li style="color:brown;">delivered
                                Miney<?php echo "----> ";?><?php "  11" ?>
                                Rs</li>
                        </B></ul>






                </div>

              
<div id="chartContainer" style="height: 370px; width: 70%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>




            </fieldset>


        </form>

    </div>
</div>

 
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Victims   amount per date"
	},
	axisY :{
		valueFormatString: "#0,.",
		suffix: "victims"
	},
	axisX: {
		title: "Day"
	},
	toolTip: {
		shared: true
	},
	data: [
	{        
		type: "stackedArea",  
		name: "victims",
		toolTipContent: "<span style=\"color:#C0504E\"><strong>{name}: </strong></span> {y}<br><b>Total:<b> #total",
		showInLegend: true,
		dataPoints: [
		{ x: 4, y: 4000 },
		{ x: 5, y: 6000 },
		{ x: 6, y: 9000 },
		{ x: 7,y: 14000 },
		{ x: 8,y: 21000 },
		{ x: 9, y: 31000 },
		{ x: 10, y: 46000 },
		{ x: 11, y: 61000 }   
		]
	}]
});
chart.render();

}
</script>


<!-- 

<script>
$(document).ready(function() {
    $('#region').select2();
});
</script> -->


<?php include VIEW.'includes/footer.php' ?>