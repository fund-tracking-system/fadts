<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1 ">
    
    <form method="post" action="/fadts/ministry/....." id="formAddOfficer">
            <fieldset class="BackgroundFS" style="margin-top:-30px;">
                <h2> </h2>

                <fieldset class="searchBar"> 

    <div class="form-row">
                <label for="loginStatus" class="inputLable"><b>Required REgion:</b></label>

                  <select class="form-control Input" id="regionArea" name="regionType">
                     <option value="" disabled selected><center>   Required Region </center></option>
                     <option value="0">Island Wide</option>
                     <option value="1">Province</option>
                     <option value="2">District</option>
                  </select>
               </div>

<hr>

               <br>
               <br>
               <br>
               <br>

               <div class="form-row" style="margin-bottom:50px;">
                  <label for="region" class="inputLable" style="margin-right:215px;"><b>Province Region :</b></label>

                  <?php

                  require 'connection.php'; 
                  

                  $region = $_SESSION['region'];
                                 
                  $rgn = "SELECT regionid,superRegion,name FROM region WHERE level=4 AND superRegion=$region";
                  $rgnRes = $con->query($rgn) ;
                  $res=$rgnRes->fetch_all(MYSQLI_ASSOC); 
                  
                  ?>
                  <select id='region' class='form-control Input' name=''
                     style='position:sticky;top:60px;overflow:scroll;  width:544px; '>
                     <option value="" disabled selected>Select Province region</option>
                     <?php 
                              foreach($res as $data){
                                echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';
                              }
                           ?>
               </div>
               <div><input type="hidden"></input></div>





               <div class="form-row" style="margin-bottom:50px;">
                  <label for="region" class="inputLable" style="margin-right:225px;"><b>District Region :</b></label>

                  <?php

                  require 'connection.php'; 
                  

                  $region = $_SESSION['region'];
                                 
                  $rgn = "SELECT regionid,superRegion,name FROM region WHERE level=4 AND superRegion=$region";
                  $rgnRes = $con->query($rgn) ;
                  $res=$rgnRes->fetch_all(MYSQLI_ASSOC); 
                  
                  ?>
                  <select class='form-control Input' name='Distcrictregion' id='Distcrictregion'
                     style='position:sticky;top:60px;overflow:scroll;  width:544px; '>
                     <option value="" disabled selected>Select District region</option>
                     <?php 
                              foreach($res as $data){
                                echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';
                              }
                           ?>
               </div>
               <div><input type="hidden"></input></div>




               <div class="form-row" style="margin-bottom:50px;">
                  <label for="region" class="inputLable" style="margin-right:205px;"><b>Divisional  Region :</b></label>

                  <?php

                  require 'connection.php'; 
                  

                  $region = $_SESSION['region'];
                                 
                  $rgn = "SELECT regionid,superRegion,name FROM region WHERE level=4 AND superRegion=$region";
                  $rgnRes = $con->query($rgn) ;
                  $res=$rgnRes->fetch_all(MYSQLI_ASSOC); 
                  
                  ?>
                  <select  class='form-control Input' name='Divisionalregion' id='Divisionalregion'
                     style='position:sticky;top:60px;overflow:scroll;  width:544px; '>
                     <option value="" disabled selected>Select Divisional region</option>
                     <?php 
                              foreach($res as $data){
                                echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';
                              }
                           ?>
               </div>
               <div><input type="hidden"></input></div>



                              
               <div class="Twobtns">
                  <button type="submit" class="btn btn-primary">Search Region Details</button>
               </div>

                              


</fieldset>
</fieldset>
</form>

</div>



</div>

<script>
$(document).ready(function() {
   $('#region').select2();
});


$(document).ready(function() {
   $('#Distcrictregion').select2();
});



$(document).ready(function() {
   $('#Divisionalregion').select2();
});
</script>




<?php include VIEW.'includes/footer.php'?>