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
    $query = 'SELECT updateTime, officerId, nid, email, region, loginStatus, name, position FROM officerhistory WHERE nid = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $nid);

    //if nid is set
    if (isset($_POST['nid']) && $_POST['nid'] != 0) {
        $nid = $_POST['nid'];

        //execute prepared statement
        $stmt->execute();
        $result = $stmt->get_result();
    }
    else {
        $sql = "SELECT updateTime, officerId, nid, email, region, loginStatus, name, position FROM officerhistory";
        $result = $conn->query($sql);
    }
    
    //fetch query results
    $data = $result->fetch_all(MYSQLI_ASSOC);

    //store results in session variables
    session_start();
    $_SESSION['query_results'] = $data;

    //close connection
    $stmt->close();
    $conn->close();
    
    //redirecting to view
    header("Location:/fadts/audit/officerHistoryView"); 
    exit(); 
?>