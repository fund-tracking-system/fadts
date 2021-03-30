
<?php


   $myRegion=$_SESSION['region']; //get officer region


   
      $sql1="SELECT superRegion  From region Where region.regionId=$myRegion";
      $result1=$con->query($sql1);                                                  // set distric region 
      $res1=$result1->fetch_all(MYSQLI_ASSOC);

   foreach($res1 as $data1)
      { 

         $_SESSION['districtRegion']=$data1['superRegion'];

       }

      $districtRegion= $_SESSION['districtRegion'];                   //  save district region to session varible




      $sql2="SELECT superRegion  From region Where region.regionId= $districtRegion";   //select  provincial  region
      $result2=$con->query($sql2);
      $res2=$result2->fetch_all(MYSQLI_ASSOC);

         
   foreach($res2 as $data2)
      { 
         
         $_SESSION['provincialRegion']=$data2['superRegion'];

      }


      $provincialRegion= $_SESSION['provincialRegion'];              // stor divisional region to session varible


      
      $sql12="SELECT id,type  From incometype";
      $result12=$con->query($sql12);                                                  
      $res12=$result12->fetch_all(MYSQLI_ASSOC);
     $_SESSION['incomeTypes']=$res12;








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



$today=date("y-m-d");
$year = date("y",strtotime($today));

foreach($resl as  $data){



   $date=$data['publishedTime'];
   $month = date("m",strtotime($date));

   $fundYear=date("y",strtotime($date));
   

   if(($year-1)==$fundYear)
   {

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
      else if($month ==9){
   
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



   // exit();



   // echo $month;
   

}

// var_dump($resl);



//select district Region  
$sql1="SELECT * From person Inner join  region ON region.regionId=person.region Where region.superRegion=$myRegion";
$result1=$con->query($sql1);
$res1=$result1->fetch_all(MYSQLI_ASSOC);


// job type get for diagram
foreach($res1 as $mydash){

   if($mydash['job']=="Private firm"){
      $privateCount++;
   }
   if($mydash['job']=="Government firm"){
      $governmentCount++;
   }
   if($mydash['job']=="Government pension"){
      $retireCount++;
   }
   if($mydash['job']=="Self employed"){
      $selfEmployeeCount++;
   }
   if($mydash['job']=="Unemployed"){
      $joblessCount++;
   }
   // if($mydash['job']=="Self employed"){
   //    $Selfemployed++;
   // }
}
$_SESSION['privateCount']=$privateCount;

$_SESSION['retireteCount']=$retireCount;

$_SESSION['selfEmployeeCount']=$selfEmployeeCount;

$_SESSION['governmentCount']=$governmentCount;

$_SESSION['JoblessCount']=$joblessCount;
   

// for get age variations
foreach($res1 as $mydash)
{
   $dateOfBirth=$mydash['birthDate'];
   $today=date("y-m-d");
   $diff=date_diff(date_create($dateOfBirth),date_create($today));
    
   if($diff->format('%y')>=65)
   {
      // echo "high";
      $olders++;
   }
   
   elseif ($diff->format('%y')>=25) 
   {
      // echo "up in 25";
      $midagers++;
   }

   elseif ($diff->format('%y')>=18) 
   {
      // echo "up in 18";
      $youngsters++;
   }

   elseif ($diff->format('%y')>=0) 
   {
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
         type: 'bar', // The type of chart we want to create
         data: {
            labels: ['January','February','March','April','May','June','July','August','September','Octomber','November','December'],
            datasets: [{
                  label: 'Past Year Fund Distribution',
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