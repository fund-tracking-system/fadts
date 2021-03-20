<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>
<?php
require 'connection.php'; 
// $disasterId = $_GET['disasterId'];

?>


<div class="all_bacground_clor">
	<div class="SearchByCriteriaform1">
	<h2 style="margin-bottom:30px;"> DISASTER DETAILS ANALISYS</h2>
		<div class="grid_box1">
			<div class="box1">
				<div>
				<h1>Disaster Damage Levels</h1>
				</div>

				<canvas id="Chart1" style="padding:5px; "></canvas>
				<!-- <canvas id="Chart1" style="height: 370px; width: 70%;"></canvas> -->
				
			</div>
			<div class="box9">
				<div style="display:inline-block;">
					<a href="/fadts/divisional/disasterVictimsView" class="btn btn-primary" style="float:left; margin: 15px; margin-top: 55px;"><B>Victim List</B></a>

				</div>
			</div>
			<!-- <div style="display:inline-block;">
				<a href="" class="btn btn-primary" style="float:left;"><B>Victim Search</B></a>
				<a href="" class="btn btn-primary" style="float:right;"><B>Add Victims</B></a>
						
				
				
				
			</div>
		 -->
			<div class="box2">
				<h1 class="dashboard-title">Disaster Name</h1>
				<h3 class="fontwhite" > <?php echo  $_SESSION['disasterName'];?></h3>
			</div>
			<div class="box3">
				<h1 class="dashboard-title">Disaster Type</h1>
				<h3 class="fontwhite" ><?php echo  $_SESSION['disasterType'];?></h3>
			</div>
			<div class="box4">
				<h1 class="dashboard-title">Disaster Date</h1>
				<h3 class="fontwhite" ><?php echo  $_SESSION['disasterDate'];?></h3>
			</div>
			<div class="box5">
				<h1 class="dashboard-title">Disaster creater</h1>
				<h3 class="fontwhite" ><?php echo $_SESSION['userrole']?></h3>
			</div>
			<div class="box6">
				<h1 class="dashboard-title">Victims Amount</h1>
				<h3 class="fontwhite" ><?php echo $_SESSION['victimsCount']?></h3>
			</div>
			<div class="box7">
				<h1 class="dashboard-title">Total Damage</h1>
				<h3 class="fontwhite" ><?php echo $_SESSION['totalDamege']?></h3>
			</div>
			<div class="box8">
				<!-- <h1>Affected Area</h1> -->
				<h1 class="fontwhite"><?php echo  $_SESSION['regionName']?> Division Secertory </h1>
			</div>
		</div>


		








	</div>
</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


<script>
$(document).ready(function() {
    $("#resultTable").DataTable();
});
</script>

<script>
	 $(function () {
	  var ctx = document.getElementById('Chart1').getContext('2d');
      console.log(Chart.defaults.scale.ticks);
      Chart.defaults.scale.ticks.beginAtZero=true;
      var chart = new Chart(ctx, {
         type: 'pie', // The type of chart we want to create
         data: {
            labels: ['0-5000','5000-15000','Above 15000'],
            datasets: [{
                  label: 'Disaster Distribution',
                  data: [150,200,100],
                  backgroundColor: [
                     '#a64dff',
                     '#102240',
                     '#3c79e6'
                  ],
                  hoverBackgroundColor:'#00cc44',
                  borderColor:'#3c79e6',
                  borderWidth: 2
            }]
         },
         options: {
			rotation:Math.PI*-12.5,
			animation:{
               animatescale:true
            },
            // scales: {
            //       yAxes: [{
            //          ticks: {
            //             beginAtZero: true
            //          },
            //          scaleLabel: {
            //                 display: true,
            //                 labelString: 'Number of victims'
            //             },
            //       }],
            //       xAxes: [{
            //             display: true,
            //             scaleLabel: {
            //                 display: true,
            //                 labelString: 'Month'
            //             },

            //        }]
            // },
            maintainAspectRatio: false

         }
      }); 
      chart.canvas.parentNode.style.height = '100%';
	});
  
</script>




 

	




<?php include VIEW.'includes/footer.php' ?>