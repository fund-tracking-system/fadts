<?php
    if (isset($_POST['fundSubmit'])) {
        //database connection file calling
        require 'connectionOOP.php';

        //prepare and bind
        $query =   'SELECT person.nid, person.name, user.usernid, user.username 
                    FROM eligibility 
                    INNER JOIN person ON person.personId = eligibility.personId
                    INNER JOIN user ON user.userid = eligibility.editor
                    WHERE eligibility.predefinedFundId = ?';
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $id);

        //set id value
        $id = $_POST['select-PreFund'];

        //execute prepared statement
        $stmt->execute();
        $result = $stmt->get_result();
        
        //fetch query results
        $data = $result->fetch_all(MYSQLI_ASSOC);

        //store results in session variables
        session_start();

        //store results in session variables
        if (empty($data)) {        
            $_SESSION['eligibility_list'] = -1;
        }
        else {   
            $_SESSION['eligibility_list'] = $data;
        }    

        //set flag in session variables
        $_SESSION['flag'] = 15;

        //close connection
        $stmt->close();
        $con->close();
        
        //redirecting to view
        header("Location:/fadts/ministry/viewEligibilityView"); 
        exit(); 
    } 
    else {
        //redirecting to home
        header("Location:/fadts/home/indexModel"); 
        exit(); 
    }      
?>