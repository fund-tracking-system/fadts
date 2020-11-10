<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php
 
$controller = $_SESSION['controller'];

switch($controller){

   case "divisional": 
?>




<div class="SearchByCriteriaform1">
   <div class="content">
      <div class="box-1">
         <img src="./fadts/app/img/" alt="sri lanka map">
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




<?php 
   
   break; 

   }

?>

<?php include VIEW.'includes/footer.php' ?>