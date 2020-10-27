<?php 
    $data = "";
    //include('model.php'); 

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

    // $sql = "SELECT updateTime, officerId, nid, email, region, loginStatus, name, position FROM officerhistory";
    // $result = $conn->query($sql);
    // $data = $result->fetch_all(MYSQLI_ASSOC);
    // header('location: index.php'); //redirecting to index page 

    //prepare and bind
    $query = 'SELECT updateTime, officerId, nid, email, region, loginStatus, name, position FROM officerhistory WHERE nid = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $nid);

    //if submit button is activated
    
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

    // $from = $_POST['from'];
    // $to = $_POST['to'];
        
    //fetch query results
    $data = $result->fetch_all(MYSQLI_ASSOC);

    header("Location:/fadts/audit/officerHistoryView"); //redirecting to view
    exit(); 
?>