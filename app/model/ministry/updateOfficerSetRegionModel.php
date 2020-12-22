<?php 
    session_start();

    //database connection file calling
    require 'connectionOOP.php';	
    
    //prepare and bind
    $query = 'SELECT name FROM region WHERE regionId = ?';
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $id);

    //assign values from session variables
    $id = $_SESSION['assign_region_id'];

    //execute prepared statement
    $stmt->execute();
    $result = $stmt->get_result();

    //fetch query results
    $data = $result->fetch_array(MYSQLI_ASSOC);
    
    //close connection
    $stmt->close();
    $con->close();
    
    //determine officer position from region level
    switch ($_SESSION['assign_region_level']) {
        case 0:
            $position = 'Auditor';
            break;
        case 1:
            $position = 'Provincial Secretary';
            break;
        case 2:
            $position = 'District Secretary';
            break; 
        case 3:
            $position = 'Divisional Secretary';
            break;
        case 4:
            $position = 'Village Officer';
            break;    
    }

    //store results in session variables
    $_SESSION['assign_region_name'] = $data['name']; 
    $_SESSION['officer_role'] = $position;
    
    //redirecting to view
    header("Location:/fadts/ministry/updateOfficerView2"); 
    exit(); 
?>