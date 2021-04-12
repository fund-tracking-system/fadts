<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>
<?php
 require 'connection.php';              
    $region=$_SESSION['region'];             
                  $rgn = "SELECT* FROM notification INNER JOIN person ON person.nid=notification.nid WHERE person.region=$region AND notification.type=1";
                  $rgnRes = $con->query($rgn) ;
                  $notif_res=$rgnRes->fetch_all(MYSQLI_ASSOC);                 
                  $_SESSION['notification_res']=$notif_res;
                  ?>
<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form>
            <fieldset class="BackgroundFS">
                <h2> NOTIFICATION</h2>
                <div class="tbleMargin">
                    <table id="resultTable" class="display nowrap">
                        <thead>
                            <tr>
                                <th><B>NOTIFICATION id </B></th>
                                <th><B>NOTIFICATION</B></th>
                                <th><B>NOTIFICATION TIME</B></th>

                                <th><B>ACTION</B></th>
                            </tr>
                        </thead>

                        <?php foreach($_SESSION['notification_res'] as $notifications){                                                            
                         ?>
                        <tbody>
                            <tr>
                                <td><input type="hidden"  style="margin-left:30%;"
                                        value='<?php echo $notifications['notificationId']?>'><?php echo $notifications['notificationId']?></input>
                                </td>
                                <td><B style="margin-left:10%;">You have to update  newly added these peoples </B></td>
                                <td><B style="margin-left:10%;"><?php echo $notifications['date'] ?></B></td>
                                <td><a href="/fadts/includes/notificationViewModel?type=<?php echo $notifications['type'] ?>"
                                        class="btn btn-primary" style="margin-left:10%;"><B>VIEW NOTIFICATION</B></a>
                                </td>
                            </tr>
                        <?php break; ?>
                        </tbody>
                        <?php    } 
                        unset($_SESSION['notification_res']);
                  ?>
                    </table>
            </fieldset>
        </form>
    </div>
</div>



<script>
$(document).ready(function() {
    $("#resultTable").DataTable();
});
</script>
<?php include VIEW.'includes/footer.php' ?>