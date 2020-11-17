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

    // //prepare and bind
    // $query =   'SELECT area.name
    //             FROM officerhistory 
    //             INNER JOIN region AS area ON officerhistory.region=area.regionId 
    //             WHERE officerhistory.officerId = (SELECT user.userid FROM user WHERE user.usernid = ?)';
    // $stmt = $con->prepare($query);
    // $stmt->bind_param("s", $nid);

    //prepare and bind
    $query =   'SELECT officerhistory.updateTime, officerhistory.officerId, officerhistory.nid, officerhistory.email, region.name AS region, officerhistory.loginStatus, officerhistory.name AS name, officerhistory.position 
                FROM officerhistory 
                INNER JOIN region ON officerhistory.region=region.regionId 
                WHERE officerhistory.officerId = (SELECT user.userid FROM user WHERE user.usernid = ?)';
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $nid);
    
    // //prepare and bind
    // $query = 'SELECT updateTime, officerId, nid, email, region, loginStatus, name, position FROM officerhistory WHERE nid = ?';
    // $stmt = $con->prepare($query);
    // $stmt->bind_param("s", $nid);

    //if nid is set
    if (isset($_POST['nid']) && $_POST['nid'] != 0) {
        $nid = $_POST['nid'];

        //execute prepared statement
        $stmt->execute();
        $result = $stmt->get_result();
    }
    else {
        $sql = "SELECT updateTime, officerId, nid, email, region, loginStatus, name, position FROM officerhistory";
        $result = $con->query($sql);
    }
    
    //fetch query results
    $data = $result->fetch_all(MYSQLI_ASSOC);

    var_dump($data);

    //store results in session variables
    session_start();
    $_SESSION['query_results'] = $data;

    //close connection
    $stmt->close();
    $con->close();
    
    //redirecting to view
    header("Location:/fadts/audit/officerHistoryView"); 
    exit(); 
?>