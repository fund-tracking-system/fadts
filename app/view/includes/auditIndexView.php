<?php 



      
$sql5="SELECT person.personId,disaster.date FROM disaster INNER JOIN victim ON disaster.disasterId=victim.disasterId INNER JOIN person ON victim.personId=person.personId";
$results=$con->query($sql5);
$resl=$results->fetch_all(MYSQLI_ASSOC);

$vjan=0;
$vfeb=0;
$vmarch=0;
$vapril=0;
$vmay=0;
$vjune=0;
$vjuly=0;
$vaugust=0;
$vseptember=0;
$voct=0;
$vnove=0;
$vdec=0;



   
$today=date("y-m-d");
$year = date("y",strtotime($today));

      foreach($resl as  $data){
         
         $date=$data['date'];
         $month = date("m",strtotime($date));


         $disasterYear=date("y",strtotime($date));

         if(($year-1)==$disasterYear){


            
         }


         if($month ==1){

            $vjan=$vjan+1;
         
         }
         else if($month ==2){
         
            $vfeb=$vfeb+1;
         
         }
         else if($month ==3){
         
            $vmarch=$vmarch+1;
         
         }
         else if($month ==4){
         
            $vapril=$vapril+1;
         
         }
         else if($month ==5){
         
            $vmay=$vmay+1;
         
         }
         else if($month ==6){
         
            $vjune=$vjune+1;
         
         }
         else if($month ==7){
         
            $vjuly=$vjuly+1;
         
         }
         else if($month ==8){
         
            $vaugust=$vaugust+1;
         
         }
         else if($month ==9){
         
            $vseptember=$vseptember+1;
         
         }
         else if($month ==10){
         
            $voct=$voct+1;
         
         }
         else if($month ==11){
         
            $vnove=$vnove+1;
         
         }
         else if($month ==12){
         
            $vdec=$vdec+1;
         
         }





         
      }



?>





<div class="divisionDashboard">
   <div class="grid_box">
      <div class="box-1">
      <div class="nav_link"><B>CHANGES MADE</B></div>

         <canvas id="Chart1"></canvas> 
      </div>
      <div class="box-2">
      <!-- <div class="nav_link"><B>FUND DELIVERY ANALYSIS</B></div> -->
         <canvas id="Chart2"></canvas>
      </div>
      <div class="box-3" id="box_3">
      <!-- <h1><B><?php echo $_SESSION['username']?></B></h1>
      <h1><B><?php echo $_SESSION['userrole']?></B></h1>
      <h1><B><?php echo $_SESSION['regionName']?></B></h1> -->
         <div id="calendardate">
            <p id="calendar_day"></p>
            <p id="calendar_date"></p>
            <p id="calendar_month"></p>
            <p id="calendar_year"></p>
         </div>
         <div id="calendar_events" >
         <h3 class="colorEve">Your Events</h3>
            <!-- <?php echo $_SESSION['userrole']; ?> -->
            <?php

               $userid=$_SESSION['userid'];

               $sql="SELECT title,start_event FROM events WHERE events.userid=$userid ";
               $res=$con->query($sql);
               $rgn=$res->fetch_all(MYSQLI_ASSOC); 
               $event="You Have No Event";
               if($rgn==NULL){
                  print ' <h6> ' . $event . ' </h6>';
               }
               else{
                  foreach ($rgn as $key ) {
                     $_SESSION['title']=$key['title'];
                     $_SESSION['start_event']=$key['start_event'];
                     print ' <h6> ' . $key['start_event'] . ' </h6>';
                     print ' <h6> ' . $key['title'] . ' </h6>';
                     // print" <h3 style='color: black;'>'.$_SESSION['title'].'</h3>";
                  } 
                 

               }                       
            ?>
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
      var ctx = document.getElementById('Chart1').getContext('2d');
      var chart = new Chart(ctx, {
         type: 'doughnut',
         data: {
            labels: ['Village Officer', 'Division Secretary','Ministry',],
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
            rotation:Math.PI*-10.5,
            animation:{
               animatescale:true
            },
            
         }
      }); 
      chart.canvas.parentNode.style.height = '100%';

  });

  $(function () {
      // ChartJS
      var ctx = document.getElementById('Chart2').getContext('2d');
      console.log(Chart.defaults.scale.ticks);
      Chart.defaults.scale.ticks.beginAtZero=true;
      var chart = new Chart(ctx, {
         type: 'horizontalBar', // The type of chart we want to create
         data: {
            labels: ['January','February','March','April','May','June','July','August','September','Octomber','November','December'],
            datasets: [{
                  label: 'Victims per Year',
                  data: [100,200,400,300,250,140,370,200,300,200],
                  backgroundColor:'rgb(205, 252, 228)',
                  hoverBackgroundColor:'#00FF00',
                  borderColor:'#00FF00',
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
      // ChartJS
      var ctx = document.getElementById('Chart3').getContext('2d');
      console.log(Chart.defaults.scale.ticks);
      Chart.defaults.scale.ticks.beginAtZero=true;
      var chart = new Chart(ctx, {
         type: 'line', // The type of chart we want to create
         data: {
            labels: ['January','February','March','April','May','June','July','August','September','Octomber','November','December'],
            datasets: [{
                  label: 'deliveries Made',
                  data: [100,200,400,300,250,140,370,200,300,200],
                  backgroundColor:'rgb(154, 220, 241)',
                  hoverBackgroundColor:'rgb(114, 206, 236)',
                  borderColor:'rgb(114, 206, 236)',
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


  


function calendar(){
   var day=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
   var month=['January','February','March','April','May','June','July','August','September','October','November','December'];
   var d=new Date();
   console.log(day[d.getDay()]);
   $('#calendar_day').text(day[d.getDay()]);
   // setText('calendar_day', day[d.getDay()]);
   setText('calendar_date', d.getDate());
   setText('calendar_month', month[d.getMonth()]);
   setText('calendar_year', (1900+d.getYear()));
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
