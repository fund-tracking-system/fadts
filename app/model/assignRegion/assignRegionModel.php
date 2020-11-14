<?php 
    //db credentials
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'pdodb';

    //create connection
    $conn = new mysqli($host, $user, $password, $dbname);

    //Check connection
    if ($conn->connect_error) {
    die("Database not connected: " . $conn->connect_error);
    }
    
    //prepare and bind
    $query = 'SELECT regionId, name, level FROM region WHERE name LIKE ? AND level LIKE ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $name, $level);

    //if name is set
    if (isset($_POST['name'])) {
        $name = "%{$_POST['name']}%";  
    }
    else {
        $name = "%";
    }

    if ($_POST['level'] != 0) {
        $level = $_POST['level'];  
    }
    else {
        $level = "%";
    } 

    //execute prepared statement
    $stmt->execute();
    $result = $stmt->get_result();
    
    //fetch query results
    $data = $result->fetch_all(MYSQLI_ASSOC);

    //store results in session variables
    session_start();
    $_SESSION['query_results'] = $data;

    //store officer position in session variables
    switch ($_POST['level']) {
        case 0:
            $_SESSION['officer_position'] = 'auditor';
            break;
        case 1:
            $_SESSION['officer_position'] = 'provincial secretary';
            break;
        case 2:
            $_SESSION['officer_position'] = 'district secretary';
            break; 
        case 3:
            $_SESSION['officer_position'] = 'divisional secretary';
            break;
        case 4:
            $_SESSION['officer_position'] = 'village officer';
            break;    
    } 

    //close connection
    $stmt->close();
    $conn->close();
    
    //redirecting to view
    header("Location:/fadts/assignRegion/assignRegionView"); 
    exit(); 
?>