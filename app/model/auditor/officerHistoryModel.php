<?php 
    session_start();

    if(isset($_POST['submit'])) {
        require 'connection.php';  //link to mysql connection

        if(isset($_POST['officer_nid']) && $_POST['officer_nid'] != "") {
            $officer = $_POST['officer_nid'];

            //prepare and bind
            $query =   'SELECT user.userid
                        FROM user 
                        WHERE usernid = ?';
            $stmt = $con->prepare($query);
            $stmt->bind_param("s", $officer);

            //execute prepared statement
            $stmt->execute();
            $result = $stmt->get_result();

            //fetch query results
            $data = $result->fetch_array(MYSQLI_ASSOC);

            if (empty($data)) {
                //close connection
                $stmt->close();
                $con->close();

                header("Location:/fadts/audit/officerHistoryView?result=invalid_officer"); 
                exit();
            }
            else {                   
                //store results in session variables
                $officer = $data['userid'];
            }

            //close statement
            $stmt->close();
        }    
        else $officer = "";

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

                header("Location:/fadts/audit/officerHistoryView?result=invalid_editor"); 
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
        $query =   "SELECT officerhistory.updateTime, officerhistory.officerId, officerhistory.editorId, officerhistory.nid, officerhistory.email, region.name AS region, officerhistory.loginStatus, officerhistory.name AS name, officerhistory.position 
                    FROM officerhistory 
                    INNER JOIN region ON officerhistory.region = region.regionId"; 

        //set count    
        $count = 0;
        
        if(!empty($officer) || !empty($editor)) {
            $query = $query." WHERE";

            if(!empty($officer)) {
                $query = $query." officerhistory.officerId = ".$officer;
                $count++;
            }  
            if(!empty($editor)) {
                if($count) {
                    $query = $query." AND";
                }

                $query = $query." officerhistory.editorId = ".$editor;
            }
        }

        $qryRes = $con->query($query) ;
        $data = $qryRes->fetch_all(MYSQLI_ASSOC);

        //store results in session variables
        $_SESSION['query_results'] = $data;

        //close connection
        $con->close();
        
        //redirecting to view
        header("Location:/fadts/audit/officerHistoryView"); 
        exit(); 
    }    
?>