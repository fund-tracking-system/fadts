<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">

    <h2 style="margin-bottom:30px;"> DISASTER VICTIMS LIST</h2>

    <fieldset class="tableBar" style="margin-top:20px;">
                <div class="tbleMargin">
                <h2> <?php echo $_SESSION['disasterName'];?></h2>




                    <table id="resultTable" class="display nowrap">
                        <thead>
                            <tr>
                                <th><B>Victim Name </B></th>
                                <th><B>Address</B></th>
                                <th><B>Region</B></th>
                                <th><B>Phone Number</B></th>
                                <th><B>Victim Damage</B></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($_SESSION['victimadata'] as $victim){                              
                         ?>
                            <tr>
                                <td><input type="hidden" name="fundid" style="margin-left:30%;"
                                        value='<?php echo $victim['name']?>'><?php echo $victim['name']?></input>
                                </td>
                                <td style="margin-left:30%;text-align: left;"><?php echo $victim['address']?></td>
                                <td style="margin-left:30%;text-align: left;"><?php echo $victim['regionName']?></td>
                                <td style="margin-left:30%;text-align: center;"> <?php echo $victim['mobile'] ?></td>

								<td style="margin-left:30%;text-align: center;"><?php echo $victim['totalDamage'] ?></td>

                               
                            </tr>

                            <?php    } 
                        unset($_SESSION['results']);
                  ?>

                        </tbody>

                    </table>
                 <div>
                 </fieldset>   


    </div>
</div>

<script>
$(document).ready(function() {
    $("#resultTable").DataTable();
});
</script>
<?php include VIEW.'includes/footer.php' ?>