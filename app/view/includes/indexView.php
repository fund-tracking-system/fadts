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
         <img src="/fadts/app/img/Matara_district.svg" alt="matara district">
      </div>
      <div class="box-2">
         <?php echo $username;?>
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





<?php 
   
   break; 

   }

?>

<?php include VIEW.'includes/footer.php' ?>