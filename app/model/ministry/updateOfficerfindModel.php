<?php 
    if (isset($_POST['nicSubmit'])) {
        //start session to access session variables
        session_start();

        //store flag in session variables
        $_SESSION['flag'] = 11;

        //database connection file calling
        require 'connectionOOP.php';

        //prepare and bind
        $query =   'SELECT user.userid, user.username, user.usernid, user.email, user.password, user.userrole, user.region, region.name, region.level, user.loginStatus 
                    FROM user 
                    INNER JOIN region ON user.region = region.regionId
                    WHERE usernid = ?';
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $nid);

        //if nid is set
        if (isset($_POST['nid']) && $_POST['nid']!="") {
            $nid = $_POST['nid'];  

            //execute prepared statement
            $stmt->execute();
            $result = $stmt->get_result();

            //fetch query results
            $data = $result->fetch_array(MYSQLI_ASSOC);

            if (empty($data)) {
                //store results in session variables
                $_SESSION['officer_id'] = -1;
            }
            else {   
                //determine officer position from region level
                switch ($data['level']) {
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
                $_SESSION['officer_id'] = $data['userid'];
                $_SESSION['officer_name'] = $data['username'];
                $_SESSION['officer_nid'] = $data['usernid']; 
                $_SESSION['officer_email'] = $data['email'];
                $_SESSION['officer_logStat'] = $data['loginStatus'];
                //$_SESSION['officer_password'] = $data['password'];
                $_SESSION['officer_role'] = $position;
                $_SESSION['assign_region_id'] = $data['region'];
                $_SESSION['assign_region_name'] = $data['name']; 
                $_SESSION['assign_region_level'] = $data['level'];
            }

            //close statement
            $stmt->close();
        }
        else {
            //store results in session variables
            session_start();
            $_SESSION['officer_id'] = -1;
        }

        //close connection
        $con->close();
        
        //redirecting to view
        header("Location:/fadts/ministry/updateOfficerView"); 
        exit(); 
    } 
    else {
        //redirecting to home
        header("Location:/fadts/home/indexModel"); 
        exit(); 
    }     
?>