<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>



<?php
 
$controller = $_SESSION['controller'];

 $email = $_SESSION['email'];
// $username = strtok($email, '@');
//$username = "jihaninanayakkara"; // the email must be valid. if note the calendar will not be visibled.
require 'connection.php';   // database connection file calling
// $userid=$_SESSION['userid'];

// $sql="SELECT title FROM events WHERE userid=$userid ";
// $res=$con->query($sql);
// $rgn=$res->fetch_all(MYSQLI_ASSOC); 

// foreach ($rgn as $key ) {
//     $_SESSION['title']=$key['title'];
// } 
// var_dump($_SESSION['title']);

switch($controller){

   case "divisional": 
?>

<?php
$myRegion=$_SESSION['region'];

$_SESSION['privateCount']=0;
$privateCount=0;

$_SESSION['retireteCount']=0;
$retireCount=0;

$_SESSION['selfEmployeeCount']=0;
$selfEmployeeCount=0;

$_SESSION['governmentCount']=0;
$governmentCount=0;

$_SESSION['JoblessCount']=0;
$joblessCount=0;

// get age variations 

$_SESSION['studentCount']=0;
$studentCount=0;

$_SESSION['youngsters']=0;
$youngsters=0;

$_SESSION['midagers']=0;
$midagers=0;

$_SESSION['olders']=0;
$olders=0;






$myRegion=$_SESSION['region'];
$myRegion;


//select district Region  

$sql1="SELECT superRegion  From region Where region.regionId=$myRegion";
$result1=$con->query($sql1);
$res1=$result1->fetch_all(MYSQLI_ASSOC);

foreach($res1 as $data1){ 
$_SESSION['districtRegion']=$data1['superRegion'];

}
$districtRegion= $_SESSION['districtRegion'];                   //  save district region


//select provincial  Region
$sql2="SELECT superRegion  From region Where region.regionId= $districtRegion";
$result2=$con->query($sql2);
$res2=$result2->fetch_all(MYSQLI_ASSOC);
foreach($res2 as $data2){ 
$_SESSION['provincialRegion']=$data2['superRegion'];

}


$provincialRegion= $_SESSION['provincialRegion'];





$sql4="SELECT region.name,amountPerPerson,publishedTime from fund   inner join recipient ON recipient.fundId=fund.fundId inner join person ON person.personId=recipient.personId  inner join region ON person.region=region.regionId where region.superRegion=$myRegion";
$results=$con->query($sql4);
$resl=$results->fetch_all(MYSQLI_ASSOC);

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

foreach($resl as  $data){
   $date=$data['publishedTime'];
   $month = date("m",strtotime($date));
   // echo $month;
   if($month ==1){
      $jan=$jan+$data['amountPerPerson'];
   }
   if($month ==2){
      $feb=$feb+$data['amountPerPerson'];
   }
   if($month ==3){
      $march=$march+$data['amountPerPerson'];
   }
   if($month ==4){
      $april=$april+$data['amountPerPerson'];
   }
   if($month ==5){
      $may=$may+$data['amountPerPerson'];
   }
   if($month ==6){
      $june=$june+$data['amountPerPerson'];
   }
   if($month ==7){
      $july=$july+$data['amountPerPerson'];
   }
   if($month ==8){
      $august=$august+$data['amountPerPerson'];
   }
   if($month ==9){
      $september=$september+$data['amountPerPerson'];
   }
   if($month ==10){
      $oct=$oct+$data['amountPerPerson'];
   }
   if($month ==11){
      $nove=$nove+$data['amountPerPerson'];
   }
   if($month ==12){
      $dec=$dec+$data['amountPerPerson'];
   }
}
$_SESSION['jan']=$jan;
$_SESSION['feb']=$feb;
$_SESSION['march']=$march;
$_SESSION['may']=$may;
$_SESSION['april']=$april;
$_SESSION['june']=$june;
$_SESSION['july']=$july;
$_SESSION['august']=$august;
$_SESSION['september']=$september;
$_SESSION['october']=$oct;
$_SESSION['november']=$nove;
$_SESSION['december']=$dec;

// var_dump($resl);



//select district Region  
$sql1="SELECT * From person Inner join  region ON region.regionId=person.region Where region.superRegion=$myRegion";
$result1=$con->query($sql1);
$res1=$result1->fetch_all(MYSQLI_ASSOC);


// job type get for diagram
foreach($res1 as $mydash){

   if($mydash['job']=="Private"){
      $privateCount++;
   }
   if($mydash['job']=="Goverment"){
      $governmentCount++;
   }
   if($mydash['job']=="Retired"){
      $retireCount++;
   }
   if($mydash['job']=="SelfEmployee"){
      $selfEmployeeCount++;
   }
   if($mydash['job']=="Jobless"){
      $joblessCount++;
   }
}
$_SESSION['privateCount']=$privateCount;

$_SESSION['retireteCount']=$retireCount;

$_SESSION['selfEmployeeCount']=$selfEmployeeCount;

$_SESSION['governmentCount']=$governmentCount;

$_SESSION['JoblessCount']=$joblessCount;

// for get age variations
foreach($res1 as $mydash){
   $dateOfBirth=$mydash['birthDate'];
   $today=date("y-m-d");
   $diff=date_diff(date_create($dateOfBirth),date_create($today));
   if($diff->format('%y')>=65){
      // echo "high";
      $olders++;
   }
   elseif ($diff->format('%y')>=25) {
      // echo "up in 25";
      $midagers++;
   }
   elseif ($diff->format('%y')>=18) {
      // echo "up in 18";
      $youngsters++;
   }
   elseif ($diff->format('%y')>=0) {
      // echo "student";
      $studentCount++;
   }
   // echo 'your'.$diff->format('%y').'years old';
   // echo '<br>';


}
// store the counting in session varbles
$_SESSION['studentCount']=$studentCount;

$_SESSION['youngsters']=$youngsters;

$_SESSION['midagers']=$midagers;

$_SESSION['olders']=$olders;




?>

<div class="divisionDashboard">
   <div class="grid_box">
      <div class="box-1">
      <div class="nav_link"><B>INCOME METHOD</B></div>

         <canvas id="Chart1"></canvas>
         <input class="form-control details" type="hidden" id='privateCount'
                              value="<?php echo $_SESSION['privateCount']?>" readonly></input>

         <input class="form-control details" type="hidden" id='retireteCount'
                              value="<?php echo $_SESSION['retireteCount']?>" readonly></input>

         <input class="form-control details" type="hidden" id='selfEmployeeCount'
                              value="<?php echo $_SESSION['selfEmployeeCount']?>" readonly></input>

         <input class="form-control details" type="hidden" id='governmentCount'
                              value="<?php echo $_SESSION['governmentCount']?>" readonly></input>

         <input class="form-control details" type="hidden" id='JoblessCount'
                              value="<?php echo $_SESSION['JoblessCount']?>" readonly></input>
      </div>
      <div class="box-2">
      <div class="nav_link"><B>AGE GROUP</B></div>
         <canvas id="Chart2"></canvas>



         <input class="form-control details" type="hidden" id='studentCount'
                              value="<?php echo $_SESSION['studentCount']?>" readonly></input>

         <input class="form-control details" type="hidden" id='youngsters'
                              value="<?php echo $_SESSION['youngsters']?>" readonly></input>

         <input class="form-control details" type="hidden" id='midagers'
                              value="<?php echo $_SESSION['midagers']?>" readonly></input>

         <input class="form-control details" type="hidden" id='olders'
                              value="<?php echo $_SESSION['olders']?>" readonly></input>

      
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
            <!-- <?php //echo $_SESSION['userrole']; ?> -->
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

      var privateCount = $("#privateCount").val();
      var retireteCount = $("#retireteCount").val();
      var governmentCount = $("#governmentCount").val();
      var JoblessCount = $("#JoblessCount").val();
      var selfEmployeeCount = $("#selfEmployeeCount").val();

      var x= 180;
      var ctx = document.getElementById('Chart1').getContext('2d');
      var chart = new Chart(ctx, {
         type: 'pie',
         data: {
            labels: ['Goverment', 'Private', 'Retired','unemployee','SelfEmployee'],
            datasets: [{
                  label: '# fund release',
                  data: [governmentCount,privateCount,retireteCount,JoblessCount,selfEmployeeCount],
                  backgroundColor: [
                     '#16a085',
                     ' #668cff',
                     '#004080',
                     '#b30000',
                     '#f1c40f'
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


   $(function () {
      
      var studentCount = $("#studentCount").val();
      var youngsters = $("#youngsters").val();
      var midagers = $("#midagers").val();
      var olders = $("#olders").val();




      var ctx = document.getElementById('Chart2').getContext('2d');
      var chart = new Chart(ctx, {
         type: 'doughnut',
         data: {
            labels: ['0-18 years', '18-24 years', '25-64 years' ,'65 years and above'],
            datasets: [{
                  label: '# fund release',
                  data: [studentCount,youngsters,midagers,olders],
                  backgroundColor: [
                     '#16a085',
                     '#f1c40f',
                     '#2980b9',
                     '#004080'
                  ],
                  borderColor: [
                     '#16a085',
                     '#f1c40f',
                     '#2980b9',
                     '#004080'
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

   var jan=<?php echo $_SESSION['jan'];?>;
   var feb=<?php echo $_SESSION['feb'];?>;
   var march=<?php echo $_SESSION['march'];?>;
   var april=<?php echo $_SESSION['april'];?>;
   var may=<?php echo $_SESSION['may'];?>;
   var june=<?php echo $_SESSION['june'];?>;
   var july=<?php echo $_SESSION['july'];?>;
   var august=<?php echo $_SESSION['august'];?>;
   var september=<?php echo $_SESSION['september'];?>;
   var october=<?php echo $_SESSION['october'];?>;
   var december=<?php echo $_SESSION['december'];?>;
   var november=<?php echo $_SESSION['november'];?>;
      // ChartJS
      var ctx = document.getElementById('Chart3').getContext('2d');
      console.log(Chart.defaults.scale.ticks);
      Chart.defaults.scale.ticks.beginAtZero=true;
      var chart = new Chart(ctx, {
         type: 'bar', // The type of chart we want to create
         data: {
            labels: ['January','February','March','April','May','June','July','August','September','Octomber','November','December'],
            datasets: [{
                  label: 'Fund Distribution',
                  data: [jan,feb,march,april,may,june,july,august,september,october,november,december],
                  backgroundColor:'#668cff',
                  hoverBackgroundColor:'#698CD1',
                  //borderColor:'#00FF00',
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

<?php

   break;

   case "village":  // vilage  officers sidebar elements 
   
?>

   <?php 

   $myRegion=$_SESSION['region'];
   $lowIncome=0;
   $midIncome=0;
   $highIncome=0;
   $_SESSION['lowIncome']=0;
   $_SESSION['midIncome']=0;
   $_SESSION['highIncome']=0;

      $sql1="SELECT * From person  Where region=$myRegion";
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
      $_SESSION['lowIncome']=$lowIncome;
      $_SESSION['midIncome']=$midIncome;
      $_SESSION['highIncome']=$highIncome;




$sql1="SELECT superRegion  From region Where region.regionId=$myRegion";
$result1=$con->query($sql1);
$res1=$result1->fetch_all(MYSQLI_ASSOC);

foreach($res1 as $data1){ 

$_SESSION['divisional']=$data1['superRegion'];


}

$divisional= $_SESSION['divisional'];                   //  save divisional region



//select provincial  Region

$sql2="SELECT superRegion  From region Where region.regionId= $divisional";
$result2=$con->query($sql2);
$res2=$result2->fetch_all(MYSQLI_ASSOC);

foreach($res2 as $data2){ 

$_SESSION['distric']=$data2['superRegion']; //save distric region

}


$distric= $_SESSION['distric'];


//select provincial  Region

$sql2="SELECT superRegion  From region Where region.regionId= $distric";
$result2=$con->query($sql2);
$res2=$result2->fetch_all(MYSQLI_ASSOC);

foreach($res2 as $data2){ 
   
$_SESSION['provincial']=$data2['superRegion'];

}


$provincial= $_SESSION['provincial'];





$sql4="SELECT region.name,amountPerPerson,publishedTime from fund   inner join recipient ON recipient.fundId=fund.fundId inner join person ON person.personId=recipient.personId  inner join region ON person.region=region.regionId where region.regionId=$myRegion";
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

foreach($resl as  $data){
   $date=$data['publishedTime'];
   $month = date("m",strtotime($date));
   // echo $month;
   if($month ==1){
      $jan=$jan+$data['amountPerPerson'];
   }
   if($month ==2){
      $feb=$feb+$data['amountPerPerson'];
   }
   if($month ==3){
      $march=$march+$data['amountPerPerson'];
   }
   if($month ==4){
      $april=$april+$data['amountPerPerson'];
   }
   if($month ==5){
      $may=$may+$data['amountPerPerson'];
   }
   if($month ==6){
      $june=$june+$data['amountPerPerson'];
   }
   if($month ==7){
      $july=$july+$data['amountPerPerson'];
   }
   if($month ==8){
      $august=$august+$data['amountPerPerson'];
   }
   if($month ==9){
      $september=$september+$data['amountPerPerson'];
   }
   if($month ==10){
      $oct=$oct+$data['amountPerPerson'];
   }
   if($month ==11){
      $nove=$nove+$data['amountPerPerson'];
   }
   if($month ==12){
      $dec=$dec+$data['amountPerPerson'];
   }
}
$_SESSION['jan']=$jan;
$_SESSION['feb']=$feb;
$_SESSION['march']=$march;
$_SESSION['may']=$may;
$_SESSION['april']=$april;
$_SESSION['june']=$june;
$_SESSION['july']=$july;
$_SESSION['august']=$august;
$_SESSION['september']=$september;
$_SESSION['october']=$oct;
$_SESSION['november']=$nove;
$_SESSION['december']=$dec;

// var_dump($resl);

   
   
   ?>

<div class="divisionDashboard">
   <div class="grid_box">
      <div class="box-1">
      <div class="nav_link"><B>GROSS INCOME</B></div>

         <canvas id="Chart1"></canvas>
      </div>
      <div class="box-2">
         <div class="nav_link"><B>Predefined Fund</B></div>
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

      var lowIncome=<?php echo $_SESSION['lowIncome']; ?>;
      var highIncome=<?php  echo $_SESSION['highIncome'];?>;
      var midIncome=<?php echo $_SESSION['midIncome'];?>;
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
      var ctx = document.getElementById('Chart2').getContext('2d');
      var chart = new Chart(ctx, {
         type: 'doughnut',
         data: {
            labels: ['Samuddi', 'Mahapola','Adult Fund','Not receiving Any Fund'],
            datasets: [{
                  label: '# fund release',
                  data: [20,5,25,10],
                  backgroundColor: [
                     '#16a085',
                     '#00FF00',
                     '#2980b9',
                     ' red'
                  ],
                  borderColor: [
                     '#16a085',
                     '#00FF00',
                     '#2980b9',
                     'red'
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


            
            var jan=<?php echo $_SESSION['jan'];?>;
            var feb=<?php echo $_SESSION['feb'];?>;
            var march=<?php echo $_SESSION['march'];?>;
            var april=<?php echo $_SESSION['april'];?>;
            var may=<?php echo $_SESSION['may'];?>;
            var june=<?php echo $_SESSION['june'];?>;
            var july=<?php echo $_SESSION['july'];?>;
            var august=<?php echo $_SESSION['august'];?>;
            var september=<?php echo $_SESSION['september'];?>;
            var october=<?php echo $_SESSION['october'];?>;
            var december=<?php echo $_SESSION['december'];?>;
            var november=<?php echo $_SESSION['november'];?>;



      // ChartJS
      var ctx = document.getElementById('Chart3').getContext('2d');
      console.log(Chart.defaults.scale.ticks);
      Chart.defaults.scale.ticks.beginAtZero=true;
      var chart = new Chart(ctx, {
         type: 'line', // The type of chart we want to create
         data: {
            labels: ['January','February','March','April','May','June','July','August','September','Octomber','November','December'],
            datasets: [{
                  label: 'Fund distribution Progress',
                  data: [jan,feb,march,april,may,june,july,august,september,october,november,december],
                  backgroundColor:'#95bcff',
                  hoverBackgroundColor:'#00FF00',
                  borderColor:'rgb(18, 164, 212)',
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






<?php

   break;

   case "audit":  // divisional secretary's sidebar elements 
   
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
                  backgroundColor:'#4cd84c',
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


<?php

   break;

   case "ministry":  // divisional secretary's sidebar elements 
   
?>

<?php 

         
   $myRegion=$_SESSION['region'];
   $lowIncome=0;
   $midIncome=0;
   $highIncome=0;
   $_SESSION['lowIncome']=0;
   $_SESSION['midIncome']=0;
   $_SESSION['highIncome']=0;

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
      $_SESSION['lowIncome']=$lowIncome;
      $_SESSION['midIncome']=$midIncome;
      $_SESSION['highIncome']=$highIncome;






      


$sql4="SELECT amountPerPerson,publishedTime,recipient.deliveryTime from fund   inner join recipient ON recipient.fundId=fund.fundId inner join person ON person.personId=recipient.personId where recipient.deliveryStatus=1";
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

foreach($resl as  $data){
   $date=$data['deliveryTime'];
   $month = date("m",strtotime($date));
   // echo $month;
   if($month ==1){
      $jan=$jan+$data['amountPerPerson'];
   }
   if($month ==2){
      $feb=$feb+$data['amountPerPerson'];
   }
   if($month ==3){
      $march=$march+$data['amountPerPerson'];
   }
   if($month ==4){
      $april=$april+$data['amountPerPerson'];
   }
   if($month ==5){
      $may=$may+$data['amountPerPerson'];
   }
   if($month ==6){
      $june=$june+$data['amountPerPerson'];
   }
   if($month ==7){
      $july=$july+$data['amountPerPerson'];
   }
   if($month ==8){
      $august=$august+$data['amountPerPerson'];
   }
   if($month ==9){
      $september=$september+$data['amountPerPerson'];
   }
   if($month ==10){
      $oct=$oct+$data['amountPerPerson'];
   }
   if($month ==11){
      $nove=$nove+$data['amountPerPerson'];
   }
   if($month ==12){
      $dec=$dec+$data['amountPerPerson'];
   }
}
$_SESSION['jan']=$jan;
$_SESSION['feb']=$feb;
$_SESSION['march']=$march;
$_SESSION['may']=$may;
$_SESSION['april']=$april;
$_SESSION['june']=$june;
$_SESSION['july']=$july;
$_SESSION['august']=$august;
$_SESSION['september']=$september;
$_SESSION['october']=$oct;
$_SESSION['november']=$nove;
$_SESSION['december']=$dec;







 
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


      var lowIncome=<?php  echo $_SESSION['lowIncome'];?>;
      var highIncome=<?php echo $_SESSION['highIncome'];?>;
      var midIncome=<?php echo $_SESSION['midIncome'];?>;


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


     
   var jan=<?php echo $_SESSION['jan'];?>;
   var feb=<?php echo $_SESSION['feb'];?>;
   var march=<?php echo $_SESSION['march'];?>;
   var april=<?php echo $_SESSION['april'];?>;
   var may=<?php echo $_SESSION['may'];?>;
   var june=<?php echo $_SESSION['june'];?>;
   var july=<?php echo $_SESSION['july'];?>;
   var august=<?php echo $_SESSION['august'];?>;
   var september=<?php echo $_SESSION['september'];?>;
   var october=<?php echo $_SESSION['october'];?>;
   var december=<?php echo $_SESSION['december'];?>;
   var november=<?php echo $_SESSION['november'];?>;








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


<?php 
   
   break; 

   }

?>

<?php include VIEW.'includes/footer.php' ?>
