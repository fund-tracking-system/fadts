<?php 
    /*
    //db credentials
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'pdodb';

    //create connection
    $con = new mysqli($host, $user, $password, $dbname);

    //Check connection
    if ($con->connect_error) {
    die("Database not connected: " . $con->connect_error);
    }
    */

    //database connection file calling
    require 'connectionOOP.php';
    
    //prepare and bind
    $query = 'SELECT regionId, name, level FROM region WHERE name LIKE ? AND level LIKE ?';
    $stmt = $con->prepare($query);
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

    //store level in session variables
    $_SESSION['region_level'] = $_POST['level'];

    //close connection
    $stmt->close();
    $con->close();
    
    //redirecting to view
    header("Location:/fadts/assignRegion/assignRegionView"); 
    exit(); 
?>