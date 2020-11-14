<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>




<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">




        <form>
            <fieldset class="BackgroundFS">
                <h2>SELECT UPDATE PEOPLE</h2>
                <div style="margin:50px;">
                    <table id="resultTable" class="display nowrap">
                        <thead>
                            <tr>
                                <th><B>PERSON NIC </B></th>
                                <th><B>PERSON NAME</B></th>
                                <th><B>ADDRESS</B></th>
                                <th><B>PHONE NUMBER</B></th>

                                <th><B>ACTION</B></th>
                            </tr>
                        </thead>

                        <?php foreach($_SESSION['updateNotifiResult'] as $typeOne){
                         
                     
                         ?>


                        <tbody>

                            <tr>
                                <td><input type="hidden" style="margin-left:30%;"
                                        value='<?php echo $typeOne['notificationId']?>'><?php echo $typeOne['nid']?></input>
                                </td>

                                <td><B style="margin-left:30%;"><?php echo $typeOne['name'] ?></B></td>
                                <td><B style="margin-left:30%;"><?php echo $typeOne['address'] ?></B></td>
                                <td><B style="margin-left:30%;"><?php echo $typeOne['phone'] ?></B></td>
                                <td><a href="/fadts/village/setUpdateModel?nid=<?php echo $typeOne['nid'] ?>" class="btn btn-primary"
                                        style="margin-left:40%;"><B>UPDATE</B></a>
                                </td>
                            </tr>

                        </tbody>


                        <?php    } 
                        unset($_SESSION['notification_res']);
                  ?>
                    </table>
                </div>







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