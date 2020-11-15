<?php 
    //database connection file calling
    require 'connectionOOP.php';

    //prepare and bind
    $query = 'SELECT username, usernid, email, userrole, region, loginStatus FROM user WHERE usernid = ?';
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $nid);

    //$stmt->bind_param("ssssss", $name, $nid, $email, $position, $region, $loginStatus);

    //if nid is set
    if (isset($_POST['nid']) && $_POST['nid']!="") {
        $nid = $_POST['nid'];  

        //execute prepared statement
        $stmt->execute();
        $result = $stmt->get_result();

        //fetch query results
        $data = $result->fetch_all(MYSQLI_ASSOC);

        //store results in session variables
        session_start();

        if (empty($data)) {
            $_SESSION['query_results'] = -1;
        }
        else {            
            $_SESSION['query_results'] = $data;
        }

        //close statement
        $stmt->close();
    }
    else {
        session_start();
        $_SESSION['query_results'] = -1;
    }

    //close connection
    $con->close();
    
    //redirecting to view
    header("Location:/fadts/ministry/updateOfficerView"); 
    exit(); 
?>