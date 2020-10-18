<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<link rel="stylesheet" type="text/css" href="viewHistory.css">

<h2 id = 'heading1'>FADTS|View History</h2>

<div class='divOut'>
    <form method = "post" action = "/fadts/audit/officerHistoryModel">
        <label class = 'label-form'>Officer NID:</label><br>
        <input type = 'text' name = "nid" class = 'input-form'></input>
        
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
                        <th>Timestamp</th>
                        <th>Officer ID</th>
                        <th>NID</th>
                        <th>E-mail</th>
                        <th>Region</th>
                        <th>LogStat</th>
                        <th>Name</th>
                        <th>Position</th>
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

<?php include VIEW.'includes/footer.php' ?>