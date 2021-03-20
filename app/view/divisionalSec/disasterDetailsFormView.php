<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">
        <?php
            require 'connection.php'; 
            $myRegion=$_SESSION['region'];








            //select district Region  

                $sql1="SELECT superRegion  From region Where region.regionId=$myRegion";
                $result1=$con->query($sql1);
                $res1=$result1->fetch_all(MYSQLI_ASSOC);

                foreach($res1 as $data1){ 
                $_SESSION['districtRegion']=$data1['superRegion'];

                }
                $districtRegion= $_SESSION['districtRegion'];                   //  save district region


//select provincial  Region


                $sql2="SELECT superRegion  From region Where region.regionId= $districtRegion";
                $result2=$con->query($sql2);
                $res2=$result2->fetch_all(MYSQLI_ASSOC);
                foreach($res2 as $data2){ 
                $_SESSION['provincialRegion']=$data2['superRegion'];

                }


                $provincialRegion= $_SESSION['provincialRegion'];               //save provincial region

                
//echo$_SESSION['provincialRegion'];





        $officer_region=$_SESSION['region'];
















            // echo $myRegion;
            $myRegion; 
            
            $sql="SELECT disaster.disasterId,disaster.name,disaster.type,disaster.date,region.regionId as regionID,region.name as ren
            FROM disaster 
            INNER JOIN disasterregion 
            ON disaster.disasterId=disasterregion.disasterId 
            INNER JOIN region ON 
            region.regionId=disasterregion.regionId 
            WHERE region.superRegion=$myRegion or region.regionId=$myRegion or region.regionId=$provincialRegion or region.regionId=$provincialRegion or region.regionId=1 ";
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