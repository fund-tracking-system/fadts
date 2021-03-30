<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1"> 
        <?php
            require 'connection.php'; 
            $myRegion=$_SESSION['region'];
            $provincialRegion= $_SESSION['provincialRegion'];               //save provincial region
            $districtRegion= $_SESSION['districtRegion']; 
 
            // echo $myRegion."</br>";
            
            // echo $provincialRegion."</br>";
            // echo $districtRegion;
            // exit();

            
            $sql="SELECT   disaster.name,disaster.disasterId,victim.totalDamage,disaster.type,disaster.date,region.regionId as regionID,region.name as ren
            FROM  disasterregion 
            INNER JOIN  disaster
            ON disaster.disasterId=disasterregion.disasterId
            INNER JOIN region ON 
            region.regionId=disasterregion.regionId
            left join victim ON 
            victim.disasterId=disaster.disasterId           
            WHERE (region.superRegion=$myRegion 
            or disasterregion.regionId=$myRegion
             or disasterregion.regionId=$provincialRegion 
             or disasterregion.regionId=$districtRegion 
             or disasterregion.regionId=1)  ";
          
        //   $sql="SELECT disaster.disasterId, disaster.name,disaster.type,disaster.date 
        //   FROM disaster 
        //   INNER JOIN victim 
        //   ON victim.disasterId=disaster.disasterId
        //   Inner JOIN person ON person.personId=victim.personId
        //   inner join disasterregion ON disasterregion.disasterId=disaster.disasterId 
        // ";
        //  $sql=  "SELECT disaster.disasterId, disaster.name, disaster.type, disaster.date
        //         FROM disaster
        //         INNER JOIN victim 
        //         ON disaster.disasterId = victim.disasterId
        //         WHERE disasterregion.regionId = $myRegion  
        //         OR disasterregion.regionId = $districtRegion 
        //         OR disasterregion.regionId = $provincialRegion
        //         OR disasterregion.regionId = 1 
        //         OR disasterregion.regionId 
        //         IN (SELECT region.regionId 
        //             FROM region 
        //             WHERE region.superRegion = $myRegion);";


            $result=$con->query($sql);
            $res=$result->fetch_all(MYSQLI_ASSOC); 
            $_SESSION['disasterList']=$res;
               
        ?>

        <form>
            <fieldset class="BackgroundFS">
                <h2>Disaster List </h2>

                <fieldset class="tableBar">
                    <div class="tbleMargin">

                        <table id="resultTable" class="display" method="get";>
                            <thead>
                                <tr>
                                    <!-- <th><B>Disaster ID</B></th> -->
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
                                    <td><a href="/fadts/divisional/disasterDetailModel?disasterId=<?php echo $disaster['disasterId'] ?>&regionId=<?php echo $disaster['regionID']?>"
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