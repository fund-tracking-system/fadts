<!DOCTYPE html>
<html>
    <head>
        <title>View Person History Records</title>
        <link rel="stylesheet" type="text/css" href="viewHistory.css">     
        <?php 
            //$data = "";
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
            $query1 = 'SELECT editor, updateTime, personId, nid, headOfFamily, phone, birthDate, birthCertificateNo, name, region, job, civilStatus, trustee FROM officerhistory WHERE nid = ?';
            $stmt1 = $conn->prepare($query1);
            $stmt1->bind_param("s", $nid);

            $query2 = 'SELECT editor, updateTime, personId, nid, headOfFamily, phone, birthDate, birthCertificateNo, name, region, job, civilStatus, trustee FROM officerhistory WHERE editor = ?';
            $stmt2 = $conn->prepare($query2);
            $stmt2->bind_param("s", $editor);

            //if submit button is activated
            if (isset($_POST['submit'])) {
                if (isset($_POST['nid'])) {
                    $nid = $_POST['nid'];

                    //execute prepared statement
                    $stmt1->execute();
                    $result = $stmt1->get_result();
                }
                else (isset($_POST['editor'])) {
                    $editor = $_POST['editor'];

                    //execute prepared statement
                    $stmt2->execute();
                    $result = $stmt2->get_result();
                }
                // else {
                //     $sql = "SELECT updateTime, officerId, nid, email, region, loginStatus, name, position FROM officerhistory";
                //     $result = $conn->query($sql);
                // }
                $from = $_POST['from'];
                $to = $_POST['to'];

                //fetch query results
                $data = $result->fetch_all(MYSQLI_ASSOC);
                //header('location: index.php'); //redirecting to index page 
            }
        ?>
    </head>

    <body>
        <h2 id = 'heading1'>FADTS|View History</h2>

        <div class='divOut'>
            <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label class = 'label-form'>Person NID:</label><br>
                <input type = 'text' name = "nid" class = 'input-form'></input>
                <br>

                <label class = 'label-form'>Editor NID:</label><br>
                <input type = 'text' name = "editor" class = 'input-form'></input>
                
                <div>
                    <label class = 'label-form'>Update Time:</label><br>
                    <input type = 'text' name = "from" class = 'input-form'></input>
                    <span class = 'spanTo'>  to</span>
                    <input type = 'text' name = "to" class = 'input-form'></input>
                </div>
                
                <button type = "submit" name = "submit" class = 'submit'>Search</button>
            </form>



            <h3 class = 'textLine'>Filtered results:</h3>

            <hr>

            <div class = 'divTable'>
                <fieldset style = "padding: 35px 50px">
                    <table>
                        <thead>
                            <tr>
                                <th>Editor ID</th>
                                <th>Timestamp</th>
                                <th>Person ID</th>
                                <th>NID</th>
                                <th>Head of Family</th>
                                <th>Phone</th>
                                <th>Birth date</th>
                                <th>Birth certificate no</th>
                                <th>Name</th>
                                <th>Region</th>
                                <th>Job</th>
                                <th>Civil status</th>
                                <th>Trustee</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <?php
                            foreach($data as $row) {
                                print " <tr> ";
                                    foreach ($row as $attribute=>$value) {
                                        print " <td>$value</td> ";
                                    }

                                    /*
                                    print " <td> $row['updateTime'] </td> ";
                                    print " <td> $row['officerId'] </td> ";
                                    print " <td> $row['nid'] </td> ";
                                    print " <td> $row['email'] </td> ";
                                    print " <td> $row['region'] </td> ";
                                    print " <td> $row['loginStatus'] </td> ";
                                    print " <td> $row['name'] </td> ";
                                    print " <td> $row['position'] </td> ";
                                    */
                                print " </tr> ";
                            }
                        ?>
                    </table>
                </fieldset>
            </div>
        </div>
    </body>
</html>