<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php
 
$controller = $_SESSION['controller'];
// $email = $_SESSION['email'];
// $username = strtok($email, '@');
//$username = "jihaninanayakkara"; // the email must be valid. if note the calendar will not be visibled. 

switch($controller){

   case "divisional": 
?>


<div class="divisionDashboard">
   <div class="grid_box">
      <div class="box-1">
      <div class="nav_link"><B>FUND DELIVERY ANALYSIS</B></div>

         <canvas id="Chart1"></canvas>
      </div>
      <div class="box-2">
         <canvas id="Chart2"></canvas>
      </div>
      <div class="box-3" id="box_3">
         <div id="calendardate">
            <p id="calendar_day"></p>
            <p id="calendar_date"></p>
            <p id="calendar_month_year"></p>
         </div>
      </div>
      <div class="box-4">
         <div>
            <canvas id="Chart3"></canvas>
         </div>
      </div>
   </div>
</div>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
   $( document ).ready(function() {
      $('#box_3').click(function(){
         window.location.href='/fadts/calender/ViewCalender';
      })
   });

  $(function () {
      // ChartJS
      var ctx = document.getElementById('Chart3').getContext('2d');
      console.log(Chart.defaults.scale.ticks);
      Chart.defaults.scale.ticks.beginAtZero=true;
      var chart = new Chart(ctx, {
         type: 'bar', // The type of chart we want to create
         data: {
            labels: ['January','February','March','April','May','June','July','August','September','Octomber','November','December'],
            datasets: [{
                  label: 'Fund Release Per Month',
                  data: [100,200,400,300,250,140,370,200,300,200],
                  backgroundColor:'#4cd84c',
                  hoverBackgroundColor:'#00FF00',
                  // borderColor:'#00FF00',
                  borderWidth: 2
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


  $(function () {
      var ctx = document.getElementById('Chart1').getContext('2d');
      var chart = new Chart(ctx, {
         type: 'doughnut',
         data: {
            labels: ['Delivered amount', 'Undelivered amount', 'Total Reipient amount',],
            datasets: [{
                  label: '# fund release',
                  data: [20,5,25],
                  backgroundColor: [
                     '#16a085',
                     '#f1c40f',
                     '#2980b9'
                  ],
                  borderColor: [
                     '#16a085',
                     '#f1c40f',
                     '#2980b9'
                  ],
                  borderWidth: 1
            }]
         },
         options: {
            rotation:Math.PI*0.5,
            animation:{
               animatescale:true
            },
            
         }
      }); 
      chart.canvas.parentNode.style.height = '100%';

  });



function calendar(){
   var day=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
   var month=['January','February','March','April','May','June','July','August','September','October','November','December'];
   var d=new Date();
   console.log(day[d.getDay()]);
   $('#calendar_day').text(day[d.getDay()]);
   // setText('calendar_day', day[d.getDay()]);
   setText('calendar_date', d.getDate());
   setText('calendar_month_year', month[d.getMonth()]+' '+(1900+d.getYear()));
};

//this function will set the text value of tags
function setText(id, val){
    if(val < 10){
        val = '0' + val;    //add leading 0 if val < 10
    }
    document.getElementById(id).innerHTML = val;
};

//call calendar() when page load
window.onload = calendar;


</script>

<?php

   break;

   case "village":  // divisional secretary's sidebar elements 
   
?>
<div class="divisionDashboard">
   <div class="grid_box">
      <div class="box-1">
         <canvas id="Chart1"></canvas>
      </div>
      <div class="box-2">
         
        
      </div>
      <div class="box-3" id="box_3">
         <div id="calendardate">
            <p id="calendar_day"></p>
            <p id="calendar_date"></p>
            <p id="calendar_month_year"></p>
         </div>
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
   $( document ).ready(function() {
      $('#box_3').click(function(){
         window.location.href='/fadts/calender/ViewCalender';
      })
   });

  $(function () {
      // ChartJS
      var ctx = document.getElementById('Chart3').getContext('2d');
      var chart = new Chart(ctx, {
         type: 'line', // The type of chart we want to create
         data: {
            labels: ['2015', '2016', '2017', '2018', '2019', '2020'],
            datasets: [{
                  label: '# fund release',
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


   function calendar(){
   var day=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
   var month=['January','February','March','April','May','June','July','August','September','October','November','December'];
   var d=new Date();
   console.log(day[d.getDay()]);
   $('#calendar_day').text(day[d.getDay()]);
   // setText('calendar_day', day[d.getDay()]);
   setText('calendar_date', d.getDate());
   setText('calendar_month_year', month[d.getMonth()]+' '+(1900+d.getYear()));
   };

//this function will set the text value of tags
function setText(id, val){
    if(val < 10){
        val = '0' + val;    //add leading 0 if val < 10
    }
    document.getElementById(id).innerHTML = val;
   };

//call calendar() when page load
window.onload = calendar;
</script>

<?php

   break;

   case "audit":  // divisional secretary's sidebar elements 
   
?>

<div class="divisionDashboard">
   <div class="grid_box">
      <div class="box-1">
         <canvas id="Chart1"></canvas>
      </div>
      <div class="box-2">
         
        
      </div>
      <div class="box-3" id="box_3">
         <div id="calendardate">
            <p id="calendar_day"></p>
            <p id="calendar_date"></p>
            <p id="calendar_month_year"></p>
         </div>
      </div>
      <div class="box-4">
         <div>
            <canvas id="Chart"></canvas>
         </div>
      </div>
   </div>
</div>



<?php

   break;

   case "ministry":  // divisional secretary's sidebar elements 
   
?>

<div class="divisionDashboard">
   <div class="grid_box">
      <div class="box-1">
         <canvas id="Chart1"></canvas>
      </div>
      <div class="box-2">
         
        
      </div>
      <div class="box-3" id="box_3">
         <div id="calendardate">
            <p id="calendar_day"></p>
            <p id="calendar_date"></p>
            <p id="calendar_month_year"></p>
         </div>
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
   $( document ).ready(function() {
      $('#box_3').click(function(){
         window.location.href='/fadts/calender/ViewCalender';
      })
   });

  $(function () {
      // ChartJS
      var ctx = document.getElementById('Chart3').getContext('2d');
      var chart = new Chart(ctx, {
         type: 'line', // The type of chart we want to create
         data: {
            labels: ['2015', '2016', '2017', '2018', '2019', '2020'],
            datasets: [{
                  label: '# fund release',
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


   function calendar(){
   var day=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
   var month=['January','February','March','April','May','June','July','August','September','October','November','December'];
   var d=new Date();
   console.log(day[d.getDay()]);
   $('#calendar_day').text(day[d.getDay()]);
   // setText('calendar_day', day[d.getDay()]);
   setText('calendar_date', d.getDate());
   setText('calendar_month_year', month[d.getMonth()]+' '+(1900+d.getYear()));
};

//this function will set the text value of tags
function setText(id, val){
    if(val < 10){
        val = '0' + val;    //add leading 0 if val < 10
    }
    document.getElementById(id).innerHTML = val;
};

//call calendar() when page load
window.onload = calendar;
</script>









<?php 
   
   break; 

   }

?>

<?php include VIEW.'includes/footer.php' ?>
