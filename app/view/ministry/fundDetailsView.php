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
                        <tbody>
                        <?php foreach($_SESSION['fundList'] as $fund){                              
                         ?>    

                            <tr>
                                <td><input type="hidden" name="fundid" style="margin-left:30%;"
                                        value='<?php echo $fund['fundId']?>'><?php echo $fund['fundId']?></input>
                                </td>
                                <td style="margin-left:30%"><?php echo $fund['name']?></td>
                                
                                <td style="margin-left:30%;text-align: center;"><?php echo ($fund['publishedTime']) ?></td>
                                <td style="margin-left:-10%;text-align: center;"><a href="/fadts/ministry/funddetailModel?fundId=<?php echo $fund['fundId'] ?>"
                                        class="btn btn-primary" style="margin-left:40%;"><B>VIEW</B></a>
                                </td>
                            </tr> 

                            <?php    } 
                        unset($_SESSION['results']);
                  ?>

                        </tbody>

                    </table>
                 <div>
                 </fieldset>     
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