
<?php 

         
$myRegion=$_SESSION['region'];
$lowIncome=0;
$midIncome=0;
$highIncome=0;


   $sql1="SELECT * From person";
   $result1=$con->query($sql1);
   $res1=$result1->fetch_all(MYSQLI_ASSOC);

   foreach($res1 as $data){

      if($data['monthlyIncome']>=100000){

         $highIncome++;

      }
      elseif($data['monthlyIncome']>=30000){

         $midIncome++;

      }
      else{

         $lowIncome++;

      }

   }
 



   


$sql4="SELECT amountPerPerson,publishedTime,recipient.deliveryTime from fund   inner join recipient ON recipient.fundId=fund.fundId inner join person ON person.personId=recipient.personId";
$results=$con->query($sql4);
$resl=$results->fetch_all(MYSQLI_ASSOC);
// var_dump($resl);

$jan=0;
$feb=0;
$march=0;
$april=0;
$may=0;
$june=0;
$july=0;
$august=0;
$september=0;
$oct=0;
$nove=0;
$dec=0;



$today=date("y-m-d");
$year = date("y",strtotime($today));

foreach($resl as  $data){


$date=$data['publishedTime'];
$month = date("m",strtotime($date));


$fundYear=date("y",strtotime($date));



if(($year-1)==$fundYear){


   if($month ==1){

      $jan=$jan+$data['amountPerPerson'];
   
   }
   else if($month ==2){
   
      $feb=$feb+$data['amountPerPerson'];
   
   }
   else if($month ==3){
   
      $march=$march+$data['amountPerPerson'];
   
   }
   else if($month ==4){
   
      $april=$april+$data['amountPerPerson'];
   
   }
   else if($month ==5){
   
      $may=$may+$data['amountPerPerson'];
   
   }
   else if($month ==6){
   
      $june=$june+$data['amountPerPerson'];
   
   }
   else if($month ==7){
   
      $july=$july+$data['amountPerPerson'];
   
   }
   else if($month ==8){
   
      $august=$august+$data['amountPerPerson'];
   
   }
   else if($month==9){
   
      $september=$september+$data['amountPerPerson'];
   
   }
   else if($month ==10){
   
      $oct=$oct+$data['amountPerPerson'];
   
   }
   else if($month ==11){
   
      $nove=$nove+$data['amountPerPerson'];
   
   }
   else if($month ==12){
   
      $dec=$dec+$data['amountPerPerson'];
   
   }


}


// echo $month;

}


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






         
      }



?>



<div class="divisionDashboard">
<div class="grid_box">
   <div class="box-1">
   <div class="nav_link"><B>GROSS INCOME</B></div>

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


   var lowIncome=<?php  echo $lowIncome;?>;
   var highIncome=<?php echo $highIncome;?>;
   var midIncome=<?php echo $midIncome;?>;


   var ctx = document.getElementById('Chart1').getContext('2d');
   var chart = new Chart(ctx, {
      type: 'doughnut',
      data: {
         labels: ['Law Income', 'Middle Income','High Income',],
         datasets: [{
               label: '# fund release',
               data: [lowIncome,midIncome,highIncome],
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

            
         var jan=<?php echo $vjan?>;
         var feb=<?php echo $vfeb;?>;
         var march=<?php echo $vmarch;?>;
         var april=<?php echo $vapril;?>;
         var may=<?php echo $vmay;?>;
         var june=<?php echo $vjune;?>;
         var july=<?php echo $vjuly;?>;
         var august=<?php echo $vaugust;?>;
         var september=<?php echo $vseptember;?>;
         var october=<?php echo $voct;?>;
         var december=<?php echo $vdec;?>;
         var november=<?php echo $vnove;?>;






   var ctx = document.getElementById('Chart2').getContext('2d');
   console.log(Chart.defaults.scale.ticks);
   Chart.defaults.scale.ticks.beginAtZero=true;
   var chart = new Chart(ctx, {
      type: 'horizontalBar', // The type of chart we want to create
      data: {
         labels: ['January','February','March','April','May','June','July','August','September','Octomber','November','December'],
         datasets: [{
               label: 'Victims per Month',
               data: [jan,feb,march,april,may,june,july,august,september,october,november,december],
               backgroundColor:'#4cd84c',
               hoverBackgroundColor:'rgb(4, 17, 41)',
               borderColor:'rgb(4, 17, 41)',
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


  
var jan=<?php echo $jan?>;
var feb=<?php echo $feb;?>;
var march=<?php echo $march;?>;
var april=<?php echo $april;?>;
var may=<?php echo $may;?>;
var june=<?php echo $june;?>;
var july=<?php echo $july;?>;
var august=<?php echo $august;?>;
var september=<?php echo $september;?>;
var october=<?php echo $oct;?>;
var december=<?php echo $dec;?>;
var november=<?php echo $nove;?>;








   // ChartJS
   var ctx = document.getElementById('Chart3').getContext('2d');
   console.log(Chart.defaults.scale.ticks);
   Chart.defaults.scale.ticks.beginAtZero=true;
   var chart = new Chart(ctx, {
      type: 'line', // The type of chart we want to create
      data: {
         labels: ['January','February','March','April','May','June','July','August','September','Octomber','November','December'],
         datasets: [{
               label: 'Deliveries Made Last Year',
               data: [jan,feb,march,april,may,june,july,august,september,october,november,december],
               // backgroundColor:'#4cd84c',
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