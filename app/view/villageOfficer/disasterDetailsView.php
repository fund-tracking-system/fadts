<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">
        <?php
            require 'connection.php'; 
            $myRegion=$_SESSION['region'];
            $myRegion;
            //select divisional Region  regions
            $sql1="SELECT superRegion  From region Where region.regionId=$myRegion";
            $result1=$con->query($sql1);
           $res1=$result1->fetch_all(MYSQLI_ASSOC);

           foreach($res1 as $data1){ 
           $_SESSION['divisionalRegion']=$data1['superRegion'];

           }
           $divisionRegion= $_SESSION['divisionalRegion'];
           //select districtRegion
           $sql2="SELECT superRegion  From region Where region.regionId= $divisionRegion";
           $result2=$con->query($sql2);
          $res2=$result2->fetch_all(MYSQLI_ASSOC);
          foreach($res2 as $data2){ 
            $_SESSION['districRegion']=$data2['superRegion'];
 
            }


            $districRegion= $_SESSION['districRegion'];
            //select ProvincialRegion
            $sql3="SELECT superRegion  From region Where region.regionId= $districRegion";
            $result3=$con->query($sql3);
           $res3=$result3->fetch_all(MYSQLI_ASSOC);
           foreach($res3 as $data3){ 
             $_SESSION['provincialRegion']=$data3['superRegion'];
  
             }

             $provincialRegion=$_SESSION['provincialRegion'];
             echo$_SESSION['provincialRegion'];


            //get region disasters
            
            $sql="SELECT disaster.disasterId,disaster.name,disaster.type,disaster.date,region.name as ren
            FROM disaster INNER JOIN disasterregion ON disaster.disasterId=disasterregion.disasterId INNER JOIN region ON region.regionId=disasterregion.regionId WHERE 
            region.regionId= $divisionRegion OR region.regionId= $districRegion Or region.regionId=$provincialRegion or region.regionId=0 or region.regionId= $myRegion";
            $result=$con->query($sql);
            $res=$result->fetch_all(MYSQLI_ASSOC); 


            $_SESSION['disasterList']=$res;
               
        ?>

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
                                    <td><input type="hidden" name="disasterId" style="margin-left:30%;"
                                            value='<?php echo $disaster['type']?>'><?php echo $disaster['type']?></input>
                                    </td>
                                    <td><B style="margin-left:30%;"><?php echo $disaster['ren']?></B></td>
                                    <td><B style="margin-left:30%;"><?php echo $disaster['name']?></B></td>
                                    <td><B style="margin-left:30%;"><?php echo $disaster['date'] ?></B></td>
                                    <td><a href="/fadts/divisional/disasterDetailModel?disasterId=<?php echo $disaster['disasterId'] ?>"
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
    $("#resultTable").DataTable();
});
</script>

<?php include VIEW.'includes/footer.php'?>