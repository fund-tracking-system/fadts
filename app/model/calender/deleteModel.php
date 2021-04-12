<?php

     // store results in session varibles 
    // session_start();

    // require 'connection.php'; 
    
    // $connect = new PDO('mysql:host=localhost;dbname=project', 'root', '');

    if(isset($_POST["id"]))
    {
    $connect = new PDO('mysql:host=localhost;dbname=project', 'root', '');
    $query = "DELETE from events WHERE id=:id";
    $statement = $connect->prepare($query);
    $statement->execute(
    array(
    ':id' => $_POST['id']
    )
    ); 
    }
    
    

    


?>