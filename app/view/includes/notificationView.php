<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>


<?php

                  require 'connection.php'; 
                  

                  $region = $_SESSION['region'];
                                 
                  $rgn = "SELECT* FROM person WHERE region=$region";
                  $rgnRes = $con->query($rgn) ;
                  $res=$rgnRes->fetch_all(MYSQLI_ASSOC); 
                  
                  $_SESSION['region_result']=$res


                  ?>
                  



<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">




        <form>
            <fieldset class="BackgroundFS">
                <h2> NOTIFICATION</h2>

                <div class="tbleMargin">


                    <table id="resultTable" class="display nowrap">
                        <thead>
                            <tr>
                                <th><B>NOTIFICATION ID</B></th>
                                <th><B>Fund TYPE</B></th>
                                <th><B>ACTION</B></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>





            </fieldset>




        </form>





    </div>
</div>



<script>
$(document).ready(function() {
    $("#resultTable").DataTable();
});
</script>
<?php include VIEW.'includes/footer.php' ?>