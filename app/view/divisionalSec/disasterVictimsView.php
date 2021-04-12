<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>
<?php
require 'connection.php'; 
// $disasterId = $_GET['disasterId'];

?>


<div class="all_bacground_clor">
	<div class="SearchByCriteriaform1">
	<h2 style="margin-bottom:30px;"> DISASTER VICTIMS LIST</h2>
	


		<fieldset class="tableBar">

                <div class="tbleMargin">

                <h2 > <?php echo  $_SESSION['disasterName'];?></h2>

                    <table id="resultTable" class="display nowrap">
                        <thead>
                            <tr>
                                <th><B>Victim Name </B></th>
                                <th><B>Address</B></th>
                                <th><B>Region</B></th>
                                <th><B>Phone Number</B></th>
                                <th><B>Victim Damage</B></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($_SESSION['victimadata'] as $victim){                              
                         ?>
                            <tr>
                                <td style="margin-left:30%;text-align: left;"><input type="hidden" name="fundid" style="margin-left:30%;"
                                        value='<?php echo $victim['name']?>'><?php echo $victim['name']?></input>
                                </td>
                                <td style="margin-left:30%;text-align: left;"><?php echo $victim['address']?></td>
                                <td style="margin-left:30%;text-align: left;"><?php echo $victim['regionName']?></td>
                                <td style="margin-left:30%;text-align: center;"><?php echo $victim['mobile'] ?></td>

								<td style="margin-left:30%;text-align: center;"><?php echo $victim['totalDamage'] ?></td>

                               
                            </tr>

                            <?php    } 
                        unset($_SESSION['results']);
                  ?>

                        </tbody>

                    </table>
                 <div>
                 </fieldset>   








	</div>
</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


<script>
$(document).ready(function() {
    $("#resultTable").DataTable({
        dom: 'Bfrtip',
        buttons: [
        'print','pdf'
    ]
    });
});
</script>

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
                //   backgroundColor:' rgb(194, 238, 252)',
                  hoverBackgroundColor:' rgb(27, 233, 164)',
                  borderColor:'rgb(169, 249, 252)',
                  borderWidth: 4
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