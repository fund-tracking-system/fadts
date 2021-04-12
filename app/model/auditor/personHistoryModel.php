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

                header("Location:/fadts/audit/personHistoryView?result=invalid_person"); 
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

                header("Location:/fadts/audit/personHistoryView?result=invalid_editor"); 
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
        $query =   "SELECT personhistory.updateTime, personhistory.personId, personhistory.editor, personhistory.nid, personhistory.phone, personhistory.name AS name, region.name AS region, personhistory.job, personhistory.trustee
                    FROM personhistory 
                    INNER JOIN region ON personhistory.region = region.regionId"; 

        //set count    
        $count = 0;
        
        if(!empty($person) || !empty($editor)) {
            $query = $query." WHERE";

            if(!empty($person)) {
                $query = $query." personhistory.personId = ".$person;
                $count++;
            }  
            if(!empty($editor)) {
                if($count) {
                    $query = $query." AND";
                }

                $query = $query." personhistory.editor = ".$editor;
            }
        }

        $qryRes = $con->query($query);
        $data = $qryRes->fetch_all(MYSQLI_ASSOC);

        //store results in session variables
        $_SESSION['query_results'] = $data;

        //close connection
        $con->close();

        //store flag in session variables
        $_SESSION['flag'] = 13;
        
        //redirecting to view
        header("Location:/fadts/audit/personHistoryView"); 
        exit(); 
    }   
?>