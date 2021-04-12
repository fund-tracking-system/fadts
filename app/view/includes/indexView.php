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




<?php include VIEW.'includes/divisionalIndexView.php' ?>   

<!-- ******************************************************************************************************************************** -->







<?php

   break;

   case "village":  // vilage  officers sidebar elements 
   
?>
  

<?php include VIEW.'includes/vilageIndexView.php' ?>   



<!-- ******************************************************************************************************************************** -->



<?php

   break;

   case "audit":  // The Audior's sidebar elements 
   
?>



<?php include VIEW.'includes/auditIndexView.php' ?>   




<!-- ********************************************************************************************************************************* -->


<?php

   break;

   case "ministry":  // divisional secretary's sidebar elements 
   
?>


<!-- here include ministry index -->

<?php include VIEW.'includes/minstryIndexView.php' ?>   



<!-- ******************************************************************************************************************************** -->



<?php 
   
   break; 

   }

?>

<?php include VIEW.'includes/footer.php' ?>
