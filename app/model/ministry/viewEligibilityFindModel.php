<?php 
    //database connection file calling
    require 'connectionOOP.php';

    //prepare and bind
    $query = 'SELECT Id, name FROM predefinedfund WHERE name LIKE ?';
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $name);

    //if name is set
    if (isset($_POST['name'])) {
        $name = "%{$_POST['name']}%";  
    }
    else {
        $name = "%";
    }

    //execute prepared statement
    $stmt->execute();
    $result = $stmt->get_result();
    
    //fetch query results
    $data = $result->fetch_all(MYSQLI_ASSOC);

    //store results in session variables
    session_start();
    $_SESSION['query_results'] = $data;

    //close connection
    $stmt->close();
    $con->close();
    
    //redirecting to view
    header("Location:/fadts/ministry/viewEligibilityView"); 
    exit(); 
?>