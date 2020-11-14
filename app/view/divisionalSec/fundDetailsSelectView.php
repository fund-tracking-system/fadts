<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">

        <form>
            <fieldset class="BackgroundFS">
                <h2>SELECT FUND </h2>

            <fieldset class="tableBar">
                <div class="tbleMargin">


                    <table id="resultTable" class="display nowrap">
                        <thead>
                            <tr>
                                <th><B>Fund ID</B></th>
                                <th><B>Fund Name</B></th>
                                <th><B>Date</B></th>
                                <th><B>View</B></th>
                            </tr>
                        </thead>
                        <?php foreach($_SESSION['fundList'] as $fund){
                         
                                 
                                     ?>

                        <tbody>

                            <tr>
                                <td><input type="hidden" name="fundid" style="margin-left:30%;"
                                        value='<?php echo $fund['fundId']?>'><?php echo $fund['fundId']?></input>
                                </td>
                                <td><B style="margin-left:30%;"><?php echo $fund['name']?></B></td>
                                <td><B style="margin-left:30%;"><?php echo $fund['publishedTime'] ?></B></td>
                                <td><a href="/fadts/divisional/funddetailModel?fundId=<?php echo $fund['fundId'] ?>"
                                        class="btn btn-primary" style="margin-left:40%;"><B>VIEW</B></a>
                                </td>
                            </tr>


                        </tbody>









                        <?php    } 
                        unset($_SESSION['results']);
                  ?>






                    </table>
                 <div>
                 </fieldset>                
            </fieldset>
        </form>


    </div>
</div>




<script>
$(document).ready(function() {
    $("#resultTable").DataTable();
});
</script>

<?php include VIEW.'includes/footer.php'?>