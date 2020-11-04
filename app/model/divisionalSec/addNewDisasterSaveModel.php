<?php
    session_start();

    require 'connection.php';   // database connection file calling
    
    //create connection

    echo $_SESSION['disaster_disasterName'];


    $query='INSERT INTO disaster (type,     name,      date,  description )VALUES(?,?,?,?)';
    $stmt=$con->prepare($query);
    $stmt->bind_param('ssss',$disaster,$disasterName,$date,$description);




    $disaster= $_SESSION['disaster_type'];
    $disasterName= $_SESSION['disaster_disasterName'];
    $date= $_SESSION['disaster_date'];
    $description= $_SESSION['disaster_description'];

   echo $disasterName;
 


    $stmt->execute();
    $stmt->close();


     //redirecting to view
    //  header("Location:/fadts/divisional/ViewAddNewDisaster"); 


     $con->close();

     unset($_SESSION['disaster_type']);
     unset($_SESSION['disaster_disasterName']);
     unset($_SESSION['disaster_date']);
     unset($_SESSION['disaster_description']);



    
   
  

?>