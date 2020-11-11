<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php
 
$controller = $_SESSION['controller'];

switch($controller){

   case "divisional": 
?>




<div class="divisionDashboard">
   <div class="content">
      <div class="box-1">
         <img src="./fadts/app/img/Sri_Lanka_Map.jpeg" alt="sri lanka map">
      </div>
      <div class="box-2">
         <h1>BOX2</h1>
      </div>
      <div class="box-3">
         <iframe src="https://calendar.google.com/calendar/embed?src=jihaninanayakkara%40gmail.com&ctz=Asia%2FColombo" style="border: 0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
      </div>
      <div class="box-4">
         <div id="chart" style="height: 100%; width: 100%;">
      </div>
   </div>

</div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script type="text/javascript">
		window.onload = function () {
			var chart = new CanvasJS.Chart("chart", {
				title:{
					text: "My First Chart in CanvasJS"              
				},
				data: [              
				{
					// Change type to "doughnut", "line", "splineArea", etc.
					type: "column",
					dataPoints: [
						{ label: "apple",  y: 10  },
						{ label: "orange", y: 15  },
						{ label: "banana", y: 25  },
						{ label: "mango",  y: 30  },
						{ label: "grape",  y: 28  }
					]
				}
				]
			});
			chart.render();
		}
	</script>




<?php 
   
   break; 

   }

?>

<?php include VIEW.'includes/footer.php' ?>
