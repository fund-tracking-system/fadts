<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">

        <form method="post" action="/fadts/divisional/fundDetailModel">
            <fieldset class="BackgroundFS">
                <h2>SELECT FUND </h2>



                <div class="form-row" style="margin-bottom:50px;">
                    <label for="tnid" class="inputLable" style="margin-right:185px;"><b>Region :</b></label>

                    <?php

                  require 'connection.php'; 
                  

                  $region = $_SESSION['region'];
                                 
                  $rgn = "SELECT regionid,superRegion,name FROM region WHERE level=4 AND superRegion=$region";
                  $rgnRes = $con->query($rgn) ;
                  $res=$rgnRes->fetch_all(MYSQLI_ASSOC); 
                  
                  $_SESSION['region_result']=$res
                  
                  ?>


                    <select id='region' class='form-control Input' name='region' id='region'
                        style='position:sticky;top:60px;overflow:scroll;  width:550px; '>
                        <option value="<?php echo $region?> ">MY DIVISION</option>
                        <?php 
                             foreach($res as $data){
                                echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';
                              }
                                ?>
                    </select>

                </div>





                <div class="tbleMargin">


                    <table id="resultTable" class="display nowrap">
                        <thead>
                            <tr>
                                <th><B>Fund Name</B></th>
                                <th><B>Fund Name</B></th>
                                <th><B>Date</B></th>
                                <th><B>View</B></th>
                            </tr>
                        </thead>
                        <?php foreach($_SESSION['fundList'] as $fund){
                         
                                 
                                     ?>

                        <tbody>

                            <tr>
                                <td><input type="hidden" name="fundId" style="margin-left:30%;"><?php echo $fund['fundId']?></input>
                                </td>
                                <td><B style="margin-left:30%;"><?php echo $fund['name']?></B></td>
                                <td><B style="margin-left:30%;"><?php echo $fund['publishedTime'] ?></B></td>
                                <td><button class="btn btn-primary" style="margin-left:40%;"><B>VIEW</B></button>
                                </td>
                            </tr>


                        </tbody>









                        <?php    } 
                        unset($_SESSION['results']);
                  ?>






                    </table>
                    <div>

            </fieldset>
        </form>


    </div>
</div>




<script>
$(document).ready(function() {
    $("#resultTable").DataTable();
});
</script>

<script>
$(document).ready(function() {
    $('#region').select2();
});
</script>
<?php include VIEW.'includes/footer.php'?>