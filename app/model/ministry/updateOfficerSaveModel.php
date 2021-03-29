<?php 
    if (isset($_POST['confirm'])) {
        session_start();

        //database connection file calling
        require 'connectionOOP.php';

        //prepare and bind
        $query = 'UPDATE user SET username=?, usernid=?, email=?, userrole=?, region=?, loginStatus=? WHERE userid=?';
        $stmt = $con->prepare($query);
        $stmt->bind_param("sssssss", $name, $nid, $email, $position, $region, $loginStatus, $id);
    
        //determine officer position from region level
        switch ($_SESSION['assign_region_level']) {
            case 0:
                $position = 'auditor';
                break;
            case 1:
                $position = 'provincialsec';
                break;
            case 2:
                $position = 'districtsec';
                break; 
            case 3:
                $position = 'divisionalsec';
                break;
            case 4:
                $position = 'villageofficer';
                break;    
        }

        //assign values from post
        $name = $_POST['name'];
        $nid = $_POST['nid'];
        $email = $_POST['email'];
        $region = $_SESSION['assign_region_id'];
        $loginStatus = $_POST['loginStatus'];
        $id = $_SESSION['officer_id'];

        //execute prepared statement
        $stmt->execute();
        
        //close statement
        $stmt->close();

        //reset password
        if ($_POST['password'] == "yes") {
            //prepare and bind
            $query = 'UPDATE user SET password=? WHERE userid=?';
            $stmt = $con->prepare($query);
            $stmt->bind_param("ss", $password, $id);

            $password = password_hash("123456", PASSWORD_DEFAULT);

            //execute prepared statement
            $stmt->execute();
            
            //close statement
            $stmt->close();
        }

        //close connection
        $con->close();

        //unset form data stored in session variables
        unset($_SESSION['officer_id']);
        unset($_SESSION['officer_name']);
        unset($_SESSION['officer_nid']); 
        unset($_SESSION['officer_email']); 
        unset($_SESSION['officer_logStat']);
        //unset($_SESSION['officer_password']); 
        unset($_SESSION['officer_role']);    
        unset($_SESSION['assign_region_id']); 
        unset($_SESSION['assign_region_name']);
        unset($_SESSION['assign_region_level']);
        unset($_SESSION['assign_region_id']);  
        
        //redirecting to view
        header("Location:/fadts/ministry/updateOfficerView?result=success"); 
        exit(); 
    
    } 
    else if (isset($_POST['setRegion'])) {
        //store results in session variables
        session_start();

        //store flag in session variables
        $_SESSION['flag'] = 21;

        //store input in session variables
        $_SESSION['officer_name'] = $_POST['name'];
        $_SESSION['officer_nid'] = $_POST['nid'];
        $_SESSION['officer_email'] = $_POST['email'];
        $_SESSION['officer_logStat'] = $_POST['loginStatus'];
        
        //next redirect URL
        $_SESSION['next_model'] = "Location:/fadts/ministry/updateOfficerSetRegionModel"; 
    
        //redirecting to assignRegion view
        header("Location:/fadts/assignRegion/assignRegionView");  
        exit(); 
    } 
    else {
        //redirecting to home
        header("Location:/fadts/home/indexModel"); 
        exit(); 
    }    
?>