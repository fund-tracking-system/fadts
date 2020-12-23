<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">
        <?php
            require 'connection.php'; 
            $myRegion=$_SESSION['region'];
            // echo $myRegion;
            $myRegion;
            
            $sql="SELECT disaster.disasterId,disaster.name,disaster.type,disaster.date,region.name as ren
            FROM disaster 
            INNER JOIN disasterregion 
            ON disaster.disasterId=disasterregion.disasterId 
            INNER JOIN region ON 
            region.regionId=disasterregion.regionId 
            WHERE region.superRegion=$myRegion or region.regionId=$myRegion or region.superRegion=Null";
            $result=$con->query($sql);
            $res=$result->fetch_all(MYSQLI_ASSOC); 
            $_SESSION['disasterList']=$res;
               
        ?>

        <form>
            <fieldset class="BackgroundFS">
                <h2>Disaster FUND </h2>

                <fieldset class="tableBar">
                    <div class="tbleMargin">

                        <table id="resultTable" class="display" method="get";>
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
                            <?php foreach($_SESSION['disasterList'] as $disaster){
                         
                                 
                         ?>
                                <tr> 
                                    <td><input type="hidden" name="disasterId" style="margin-left:30%;"
                                            value='<?php echo $disaster['type']?>'><?php echo $disaster['type']?></input>
                                    </td>
                                    <td><B style="margin-left:30%;"><?php echo $disaster['ren']?></B></td>
                                    <td><B style="margin-left:30%;"><?php echo $disaster['name']?></B></td>
                                    <td><B style="margin-left:30%;"><?php echo $disaster['date'] ?></B></td>
                                    <td><a href="/fadts/divisional/disasterDetailModel?disasterId=<?php echo $disaster['disasterId'] ?>"
                                            class="btn btn-primary" style="margin-left:40%;"><B>VIEW</B></a>
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
    $("#resultTable").DataTable();
});
</script>

<?php include VIEW.'includes/footer.php'?>