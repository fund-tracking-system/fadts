<?php
     // store results in session varibles 
     session_start();

     require 'connection.php';      //link to  classes

    //get submitted data
     $_SESSION['disaster_type']=$_POST['disaster'];
     $_SESSION['disaster_disasterName']=$_POST['disasterName'];
     $_SESSION['disaster_date']=$_POST['date'];
     $_SESSION['disaster_description']=$_POST['description'];










    //next redirect URL
     $_SESSION['next_model'] = "Location:/fadts/divisional/addNewDisasterSaveModel"; 
      header("Location:/fadts/divisional/addNewDisasterSaveModel");  





    
?>