<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor" id="content">
   <div class="SearchByCriteriaform1">
      <form method="post" id="formAddPeople" action="/fadts/divisional/searchFundModel">
         <fieldset class="BackgroundFS">
        
            <fieldset class="searchBar">
<h2> Search Fund </h2>
             


         
               <!-- for region -->

               <div class="form-row" style="margin-bottom:50px;">
                  <label for="region" class="inputLable" style="margin-right:285px;"><b>Region :</b></label>

                  <?php

                  require 'connection.php'; 
                  

                  $region = $_SESSION['region'];
                                 
                  $rgn = "SELECT regionid,superRegion,name FROM region WHERE level=4 AND superRegion=$region";
                  $rgnRes = $con->query($rgn) ;
                  $res=$rgnRes->fetch_all(MYSQLI_ASSOC); 
                  
                  ?>
                  <select id='region' class='form-control Input' name='region' id='region'
                     style='position:sticky;top:60px;overflow:scroll;  width:544px; '>
                     <option value="" disabled selected>Select region</option>
                     <?php 
                              foreach($res as $data){ 
                                echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';
                              }
                           ?>
               </div>
               <div><input type="hidden"></input></div>


               <div class="form-row">
                  <label for="Name" class="inputLable"><b>Name :</b></label>
                  <input class="form-control Input" id="name" name="name" placeholder="Name in full"></input>

               </div>

               <div class="form-row">
                  <label for="Name" class="inputLable"><b>how many Years Befor :</b></label>
                  <input class="form-control Input" id="name" name="year" placeholder="Number Of Years"></input>

               </div>


               





               <div class="Twobtns">
                  <button type="submit" class="btn btn-primary">Confirm and Submit</button>
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
</script>


<?php include VIEW.'includes/footer.php' ?>