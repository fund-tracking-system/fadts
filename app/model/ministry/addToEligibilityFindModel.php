<?php 
    if (isset($_POST['nicSubmit'])) {
        //start session to access session variables
        session_start();

        //store flag in session variables
        $_SESSION['flag'] = 16;

        //database connection file calling
        require 'connectionOOP.php';

        //get person details
        //prepare and bind
        $query =   'SELECT person.personId, person.name AS pname, person.address, person.job, person.civilStatus, person.region, region.name, region.level 
                    FROM person 
                    LEFT JOIN region ON person.region = region.regionId
                    WHERE nid = ?';
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
                $_SESSION['person_id'] = -1;
            }
            else { 
                //store results in session variables
                $_SESSION['person_id'] = $data['personId'];
                $_SESSION['person_name'] = $data['pname'];
                $_SESSION['person_nid'] = $nid; 
                $_SESSION['person_address'] = $data['address'];
                $_SESSION['person_job'] = $data['job'];
                $_SESSION['person_civilStatus'] = $data['civilStatus'];
                $_SESSION['person_region_id'] = $data['region'];
                $_SESSION['person_region_name'] = $data['name']; 
                $_SESSION['person_region_level'] = $data['level'];
            }

            //close statement
            $stmt->close();

            //get eligibility status of the person for the selected predefined fund
            //prepare and bind
            $query =   'SELECT EntryId FROM eligibility 
                        WHERE predefinedFundId = ? AND personId = ?';
            $stmt = $con->prepare($query);
            $stmt->bind_param("ss", $fund, $id);

            //get predefined fund id from session variable
            $fund = $_SESSION['fund_id']; 
            $id = $_SESSION['person_id']; 

            //execute prepared statement
            $stmt->execute();
            $result = $stmt->get_result();

            //fetch query results
            $data = $result->fetch_all(MYSQLI_ASSOC);

            if (empty($data)) {
                //store result in session variables
                $_SESSION['person_eligibility'] = 'Unlisted';
            }
            else { 
                //store result in session variables
                $_SESSION['person_eligibility'] = 'Listed';
            }

            //close statement
            $stmt->close();
        }
        else {
            //store results in session variables
            session_start();
            $_SESSION['person_id'] = -1;
        }

        //close connection
        $con->close();
        
        //redirecting to view
        header("Location:/fadts/ministry/addToEligibilityPersonView"); 
        exit(); 
    } 
    else {
        //redirecting to home
        header("Location:/fadts/home/indexModel"); 
        exit(); 
    }     
?>