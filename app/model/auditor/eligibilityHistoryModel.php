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
    $query = 'SELECT predefinedFundId, personId, editor, updateTime FROM eligibilityhistory WHERE personId = ?';
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $nid);	

    //if nid is set
    if (isset($_POST['nid']) && $_POST['nid'] != 0) {
        $nid = $_POST['nid'];

        //execute prepared statement
        $stmt->execute();
        $result = $stmt->get_result();
    }
    else {
        $sql = "SELECT predefinedFundId, personId, editor, updateTime FROM eligibilityhistory";
        $result = $con->query($sql);
    }
    
    //fetch query results
    $data = $result->fetch_all(MYSQLI_ASSOC);

    //store results in session variables
    session_start();
    $_SESSION['query_results'] = $data;

    //close connection
    $stmt->close();
    $con->close();
    
    //redirecting to view
    header("Location:/fadts/audit/eligibilityHistoryView"); 
    exit(); 
?>