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
                                <th><B>Region</B></th>
                                <th><B>Region Level</B></th>
                                <th><B>Date</B></th>
                                <th><B>View</B></th> 
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($_SESSION['fundList'] as $fund){                              
                         ?>
                            <tr>
                                <td style="margin-left:30%;text-align: left;"><input type="hidden" name="fundid" style="margin-left:30%;"
                                        value='<?php echo $fund['fundId']?>'><?php echo $fund['fundId']?></input>
                                </td>
                                <td style="margin-left:30%;text-align: left;"><?php echo $fund['name']?></td>
                                <td style="margin-left:30%;text-align: left;"><?php echo $fund['ren']?></td>
                                <td style="margin-left:30%;text-align: left;"><?php 
                                 if ( $fund['lvl']!=4 ){
                                     echo " Division Area";

                                 }else{
                                     echo "Grama Niladari Area";

                                    
                                 }

                                 
                                 
                                 ?></td>
                                <td style="margin-left:30%;text-align: left;"><?php echo $fund['publishedTime'] ?></td>
                                <td style="margin-left:30%;text-align: left;"><a href="/fadts/divisional/funddetailModel?fundId=<?php echo $fund['fundId'] ?>"
                                        class="btn btn-primary" style="margin-left:20%;"><B>VIEW</B></a>
                                </td>
                            </tr>

                            <?php    } 
                        unset($_SESSION['results']);
                  ?>

                        </tbody>

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