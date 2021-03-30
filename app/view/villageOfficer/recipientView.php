<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">

    <h2>RECIPIENT LIST </h2>

    <fieldset class="tableBar">

                <div class="tbleMargin">




                    <!-- <h2 style="margin-top:20px;margin-bottom:30px;">Recipient List</h2> -->
                    <table id="resultTable" class="display nowrap">
                    <h2><?php echo $_SESSION['SelectFundName']?></h2>
                        <thead>
                            <tr>
                                <th><B>Recipient </B></th>
                                <th><B>Address</B></th>
                                <!-- <th><B>Region</B></th> -->
                                <th><B>Phone Number</B></th>
                                <th><B>Dilivery Status</B></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($_SESSION['selectFundDetails'] as $fund){                              
                         ?>
                            <tr>
                                <td><input type="hidden" name="fundid" style="margin-left:30%;"
                                        value='<?php echo $fund['fundId']?>'><?php echo $fund['name']?></input>
                                </td>
                                <td style="margin-left:30%;text-align: left;"><?php echo $fund['address']?></td>
                                <!-- <td style="margin-left:30%;"><?php echo $fund['regionName']?></td> -->
                                <td style="margin-left:30%;text-align: center;"><?php echo $fund['mobile'] ?></td>

                                <td style="margin-left:30%;text-align: center;"><?php 
                                 if ( $fund['deliveryStatus']==1 ){
                                     echo " Dilivered !";

                                 }else{
                                     echo "Pending !";

                                    
                                 }

                                 
                                 
                                 ?></td>
                               
                            </tr>

                            <?php    } 
                        
                  ?>

                        </tbody>

                    </table>
                 <div>
                 </fieldset>


    </div>
</div>

<script>
$(document).ready(function() {
    $("#resultTable").DataTable({
        dom: 'Bfrtip',
        buttons: [
        'print','pdf'
    ]
    });
});
</script>
<?php include VIEW.'includes/footer.php' ?>