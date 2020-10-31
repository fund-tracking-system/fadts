<?php
    session_start();

    require 'connection.php';   // database connection file calling
    
    //create connection
    

    $query='INSERT INTO person (nid) VALUES(?)';
    $stmt=$con->prepare($query);
    $stmt->bind_param('s',$nid);

    
    $nid= $_SESSION['people_nid'];
    echo("hee");
    echo $nid;

    $stmt->execute();
    
    //close connection
    $stmt->close();
    $con->close();

    unset($_SESSION['people_nid']);

    
    //redirecting to view
    // header("Location:/fadts/divisional/ViewAddPeople"); 


?>