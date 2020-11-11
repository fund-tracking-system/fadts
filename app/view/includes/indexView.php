<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php
 
$controller = $_SESSION['controller'];
$email = $_SESSION['email'];
$username = strtok($email, '@');
//$username = "jihaninanayakkara"; // the email must be valid. if note the calendar will not be visibled. 



switch($controller){

   case "divisional": 
?>

<div class="divisionDashboard">
   <div class="grid_box">
      <div class="box-1">
         <img src="/fadts/app/img/Sri_Lanka_Map.png" alt="matara district">
      </div>
      <div class="box-2">
         <?php echo $_SESSION['userrole'];?>
      </div>
      <div class="box-3">
         <iframe src="https://calendar.google.com/calendar/embed?src=<?php echo $username;?>%40gmail.com&ctz=Asia%2FColombo" style="border: 0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
      </div>
      <div class="box-4">
         <div>
            <canvas id="Chart"></canvas>
         </div>
      </div>
   </div>
</div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
  $(function () {
      // ChartJS
      var ctx = document.getElementById('Chart').getContext('2d');
      var chart = new Chart(ctx, {
         // The type of chart we want to create
         type: 'bar',
         data: {
            labels: ['2015', '2016', '2017', '2018', '2019', '2020'],
            datasets: [{
                  label: '# of Votes',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                     'rgba(255, 99, 132, 0.2)',
                     'rgba(54, 162, 235, 0.2)',
                     'rgba(255, 206, 86, 0.2)',
                     'rgba(75, 192, 192, 0.2)',
                     'rgba(153, 102, 255, 0.2)',
                     'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                     'rgba(255, 99, 132, 1)',
                     'rgba(54, 162, 235, 1)',
                     'rgba(255, 206, 86, 1)',
                     'rgba(75, 192, 192, 1)',
                     'rgba(153, 102, 255, 1)',
                     'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
            }]
         },
         options: {
            scales: {
                  yAxes: [{
                     ticks: {
                        beginAtZero: true
                     }
                  }]
            },
            maintainAspectRatio: false

         }
      }); 
      chart.canvas.parentNode.style.height = '100%';

  });
</script>







<?php 
   
   break; 

   }

?>

<?php include VIEW.'includes/footer.php' ?>
