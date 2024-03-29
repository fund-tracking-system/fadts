<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">
     

        <form>
            <fieldset class="BackgroundFS">
                <h2>DISASTER LIST</h2>

                <fieldset class="tableBar">
                    <div class="tbleMargin">

                        <table id="resultTable" class="display">
                            <thead>
                                <tr>
                                    <th><B>Disaster Type</B></th>
                                 
                                    <th><B>Disaster Region</B></th>
                                    <th><B>Disaster Name</B></th>
                                    <th><B>Date</B></th>
                                    <th><B>View</B></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach($_SESSION['disasterList'] as $disaster){ ?>
                                <tr>
                                    <td style="margin-left:30%;text-align: left;"><input type="hidden" name="disasterId" style="margin-left:30%;"
                                            value='<?php echo $disaster['type']?>'> <?php echo $disaster['disasterId'] ?> <?php echo $disaster['type']?></input>
                                    </td>
                                    <td style="margin-left:30%;text-align: left;"><?php 

                                    if($disaster['lvl']==0){
                                         echo " Island Wide Disaster";
                                    }
                                    else if($disaster['disasterId']==1){
                                        echo "Provincial Wide Disaster";
                                    }
                                    else if($disaster['disasterId']==2){
                                        echo "Distric Wide Disaster";
                                    }
                                    else if($disaster['disasterId']==3){
                                        echo "Divisional Wide Disaster";
                                    }
                                    else{
                                        echo $disaster['ren'];
                                    }

                                    
                                    
                                    ?></td>

                                    <td style="margin-left:30%;text-align: left;"><?php echo $disaster['name']?></td>
                                    <td style="margin-left:30%;text-align: left;"><?php echo $disaster['date'] ?></B></td>
                                    <td><a href="/fadts/village/disasterDetailModel?disasterId=<?php echo $disaster['disasterId'] ?>"
                                            class="btn btn-primary" style="margin-left:20%;"><B>VIEW</B></a>
                                    </td>
                                </tr>
                                <?php    } unset($_SESSION['results']); ?>

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
    $("#resultTable").DataTable({
        dom: 'Bfrtip',
        buttons: [
        'print','pdf'
    ]
    });
});
</script>

<?php include VIEW.'includes/footer.php'?>