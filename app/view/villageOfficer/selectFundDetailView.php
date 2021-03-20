<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>
<?php
require 'connection.php'; 
// $disasterId = $_GET['disasterId'];

?>


<div class="all_bacground_clor">
	<div class="SearchByCriteriaform1">
	<h2 style="margin-bottom:30px;"> FUND DETAILS ANALYSIS</h2>
    <!-- <h2><?php //echo  $_SESSION['SelectFundName'];?></h2> -->
		<div class="grid_box1">
			<div class="box1">
				<div>
				<h1><?php echo  $_SESSION['SelectFundName'];?></h1>
				</div>

				<canvas id="Chart1" style="padding:5px; background-image: linear-gradient( rgb(241, 240, 240),white,rgb(241, 240, 240)); "></canvas>
				<!-- <canvas id="Chart1" style="height: 370px; width: 70%;"></canvas> -->
				
			</div>
			<div class="box9">
				<div style="display:inline-block;">
					<a href="/fadts/divisional/recipeintView" class="btn btn-primary" style="float:left; margin: 15px; margin-top: 55px;"><B>Recepient List</B></a>

				</div>
			</div>
			<!-- <div style="display:inline-block;">
				<a href="" class="btn btn-primary" style="float:left;"><B>Victim Search</B></a>
				<a href="" class="btn btn-primary" style="float:right;"><B>Add Victims</B></a>
						
				
				
				
			</div>
		 -->
			<div class="box2">
				<h1 class="dashboard-title">Per Person</h1>
				<h3 class="fontwhite" ><?php echo $_SESSION['amountPerPerson']?></h3>
			</div>
			<div class="box3">
				<h1 class="dashboard-title">Fund Amount</h1>
				<h3 class="fontwhite" ><?php echo $_SESSION['amountPerPerson']*$_SESSION['totalRecipients']?></h3>
			</div>
			<div class="box4">
				<h1 class="dashboard-title">Analyse Region</h1>
				<h3 class="fontwhite" ><?php echo  $_SESSION['regionName']?></h3>
			</div>
			<div class="box5">
				<h1 class="dashboard-title">Published Day</h1>
				<h3 class="fontwhite" ><?php echo $_SESSION['publishedTime']?></h3>
            </div>
            <div class="box67">
            <h1 class="fontwhite">Delivered Amount
                <?php echo "--------> ";?>
                <?php echo $_SESSION['fundDelivered'] ?> Persons</h1><br>
               
			</div>
			
			<div class="box8">
				<!-- <h1>Affected Area</h1> -->
                <h1 class="fontwhite">
                Undelivered amount
                <?php echo "-----> ";?><?php echo $_SESSION['fundUndelivered'] ?> Persons
                </h1>
                
			</div>
		</div>

<!-- 
		<fieldset class="tableBar">
                <div class="tbleMargin">


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
                        <?//php foreach($_SESSION['victimadata'] as $victim){                              
                         ?>
                            <tr>
                                <td><input type="hidden" name="fundid" style="margin-left:30%;"
                                        value='<?//php echo $victim['name']?>'><?//php echo $victim['name']?></input>
                                </td>
                                <td><B style="margin-left:30%;"><?// php echo $victim['address']?></B></td>
                                <td><B style="margin-left:30%;"><?//php echo $victim['regionName']?></B></td>
                                <td><B style="margin-left:30%;"><?//php echo $victim['mobile'] ?></B></td>

								<td><B style="margin-left:30%;"><?//php echo $victim['totalDamage'] ?></B></td>

                               
                            </tr>

                            <?//php    } 
                       // unset($_SESSION['results']);
                  ?>

                        </tbody>

                    </table>
                 <div>
                 </fieldset>    -->








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
            labels: ['Fund Delivered','Undelivered'],
            datasets: [{
                  label: 'Fund Delivere Analysis',
                  data: [100,200],
                  backgroundColor: [
                     '#16a085',
                     '#102240',
                     
                  ],
                  hoverBackgroundColor:'rgb(18, 164, 212)',
                  borderColor:'#3c79e6',
                  borderWidth: 2
            }]
         },
         options: {
            rotation:Math.PI*0.5,
            animation:{
               animatescale:true
            },
            maintainAspectRatio: false

         }
      }); 
     
	});
  
</script>




 

	




<?php include VIEW.'includes/footer.php' ?>