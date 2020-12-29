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
<<<<<<< HEAD
				<h1>Disaster Distribution</h1>
=======
				<h1>disasters</h1>

>>>>>>> 5ae13bd54b56f7758b77c66b858357040fb6e06e
				</div>

				<canvas id="Chart1" style="padding:5px; "></canvas>
				<!-- <canvas id="Chart1" style="height: 370px; width: 70%;"></canvas> -->
				
			</div>
			<div style="padding:50px;">
				<a href="" class="btn btn-primary" style="margin-left:40%;"><B>Victim Search</B></a>
				<a href="" class="btn btn-primary" style="margin-left:40%;"><B>Add Victims</B></a>
						
				
				
				
			</div>
		
			<div class="box2">
				<h1>Disaster Name</h1>
				<h3 > 	<?php echo  $_SESSION['disasterName'];?></h3>
			</div>
			<div class="box3">
				<h1>Disaster Type</h1>
				<h3><?php echo  $_SESSION['disasterType'];?></h3>
			</div>
			<div class="box4">
				<h1>Disaster Date</h1>
				<h3><?php echo  $_SESSION['disasterDate'];?></h3>
			</div>
			<div class="box5">
				<h1>Disaster creater</h1>
				<h3><?php echo $_SESSION['userrole']?></h3>
			</div>
			<div class="box6">
				<h1>Victims Amount</h1>
				<h3><?php echo $_SESSION['victimsCount']?></h3>
			</div>
			<div class="box7">
				<h1>Total Damage</h1>
				<h3><?php echo $_SESSION['totalDamege']?></h3>
			</div>
			<div class="box8">
				<!-- <h1>Affected Area</h1> -->
				<h1><?php echo  $_SESSION['regionName']?></h1>
			</div>
		</div>
	</div>
</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>




<script>
	 $(function () {
	  var ctx = document.getElementById('Chart1').getContext('2d');
      console.log(Chart.defaults.scale.ticks);
      Chart.defaults.scale.ticks.beginAtZero=true;
      var chart = new Chart(ctx, {
         type: 'line', // The type of chart we want to create
         data: {
            labels: ['January','February','March','April','May','June','July','August','September','Octomber','November','December'],
            datasets: [{
                  label: 'Disaster Distribution',
                  data: [10,200,400,300,250,140,370,200,300,200,100,70],
                  backgroundColor:'blue',
                  hoverBackgroundColor:'blue',
                  // borderColor:'#00FF00',
                  borderWidth: 2
            }]
         },
         options: {
            scales: {
                  yAxes: [{
                     ticks: {
                        beginAtZero: true
                     },
                     scaleLabel: {
                            display: true,
                            labelString: 'Damage'
                        },
                  }],
                  xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'NumberOf Victims'
                        },

                   }]
            },
            maintainAspectRatio: false

         }
      }); 
      chart.canvas.parentNode.style.height = '100%';
	});
  
</script>




 

	




<?php include VIEW.'includes/footer.php' ?>