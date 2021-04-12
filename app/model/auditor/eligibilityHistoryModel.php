<<<<<<< HEAD
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
=======
<?php 
    session_start();

    if(isset($_POST['submit'])) {
        require 'connection.php';  //link to mysql connection

        if(isset($_POST['person_nid']) && $_POST['person_nid'] != "") {
            $person = $_POST['person_nid'];

            //prepare and bind
            $query =   'SELECT personId
                        FROM person 
                        WHERE nid = ?';
            $stmt = $con->prepare($query);
            $stmt->bind_param("s", $person);

            //execute prepared statement
            $stmt->execute();
            $result = $stmt->get_result();

            //fetch query results
            $data = $result->fetch_array(MYSQLI_ASSOC);

            if (empty($data)) {
                //close connection
                $stmt->close();
                $con->close();

                header("Location:/fadts/audit/eligibilityHistoryView?result=invalid_person"); 
                exit();
            }
            else {                   
                //store results in session variables
                $person = $data['personId'];
            }

            //close statement
            $stmt->close();
        }    
        else $person = "";

        if(isset($_POST['editor_nid']) && $_POST['editor_nid'] != "") {
            $editor = $_POST['editor_nid'];

            //prepare and bind
            $query =   'SELECT user.userid
                        FROM user 
                        WHERE usernid = ?';
            $stmt = $con->prepare($query);
            $stmt->bind_param("s", $editor);

            //execute prepared statement
            $stmt->execute();
            $result = $stmt->get_result();

            //fetch query results
            $data = $result->fetch_array(MYSQLI_ASSOC);

            if (empty($data)) {
                //close connection
                $stmt->close();
                $con->close();

                header("Location:/fadts/audit/eligibilityHistoryView?result=invalid_editor"); 
                exit();
            }
            else {                   
                //store results in session variables
                $editor = $data['userid'];
            }

            //close statement
            $stmt->close();
        }    
        else $editor = "";
        
        //build query
        $query =   "SELECT predefinedFundId, personId, editor, updateTime
                    FROM eligibilityhistory"; 

        //set count    
        $count = 0;
        
        if(!empty($person) || !empty($editor)) {
            $query = $query." WHERE";

            if(!empty($person)) {
                $query = $query." personId = ".$person;
                $count++;
            }  
            if(!empty($editor)) {
                if($count) {
                    $query = $query." AND";
                }

                $query = $query." editor = ".$editor;
            }
        }

        $qryRes = $con->query($query);
        $data = $qryRes->fetch_all(MYSQLI_ASSOC);

        //store results in session variables
        $_SESSION['query_results'] = $data;

        //close connection
        $con->close();

        //store flag in session variables
        $_SESSION['flag'] = 12;
        
        //redirecting to view
        header("Location:/fadts/audit/eligibilityHistoryView"); 
        exit(); 
    }   
>>>>>>> cb3f905dd30fbd12a7aa0a8cf2a9591e4dea3ebd
?>