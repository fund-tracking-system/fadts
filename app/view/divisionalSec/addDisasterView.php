<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
   <div class='SearchByCriteriaform1'>

      <form class="form" id="formAddDisaster" method="POST" action="/fadts/divisional/addDisasterModel">

         <fieldset class=" BackgroundFS">
            <h2> ADD NEW DISASTER</h2>
            <fieldset class="searchBar">
            <?php 
               if(isset($_GET['error'])){
         
                  $error = $_GET['error'];
                  if($error == "db_conn_err"){
                     echo '<div class="alert alert-danger " role="alert">Database connection error! Please try again</div>';
                  }
                  if($error == "success"){
                     echo '<div class="alert alert-success " role="alert">Disaster records successfully added!</div>';
                  }       
               }   
            ?>

               <div class="form-row ">
                  <label for="disaster" class="inputLable"><b>Disaster Type:</b></label>
                  <select class="form-control Input" name="type" id="type">
                     <option value="Fire">Fire </option>
                     <option value="Flood">Flood </option>
                     <option value="Tsunami">Tsunami </option>
                     <option value="Landslide">LandSlide </option>
                     <option value="Tonado">Tonado </option>
                     <option value="Earthquake">Earthquake </option>
                     <option value="Drought">Drought</option>
                  </select>
               </div>


               <div class="form-row">
                  <label for="disaster-name" class="inputLable" type="hidden"><b>Disaster
                        Name:</b></label>
                  <input class="form-control Input" id="name" name="name"></input>
               </div>

               <div class="form-row">
                  <label for="date" class="inputLable"><b>Disaster Date:</b></label>
                  <input placeholder="YYYY/MM/DD" class="form-control Input" id="date" name="date" type="date"></input>
                  <small></small>
               </div>


               <div class="form-row" style="margin-bottom:50px;">

                  <label for="tnid" class="inputLable" style="margin-right:285px;"><b>Region :</b></label>
                  <?php

                  require 'connection.php'; 
                                 
                  $rgn="SELECT level, regionid, superRegion,name  FROM region  WHERE level=4 ";
                  $rgnRes=$con->query($rgn) ;
                  $res=$rgnRes->fetch_all(MYSQLI_ASSOC);
                  
                  $_SESSION['region_result']=$res;  //for assign region  ?>

                  <select id='region' class='form-control Input' multiple='multiple' name='region[]' id='region' style='position:sticky;top:60px;overflow:scroll;  width:530px;'>
                  <?php 
                  foreach($res as $data){
                     if($data['superRegion']==$_SESSION['region']){
                        // echo "<option value='$data['regionid']'>colombo</option>";
                        echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';

                     }
                  }
                  ?>
                  </select>
               </div>

               <div class="form-row">
                  <input type="hidden"></input>
               </div>
               

               <div class="form-row">
                  <label for="description" class="inputLable" ><b>Description:</b></label>
                  <textarea class="form-control Input txtWidth "   id="description" name="description" >  </textarea>

               </div>

               <!-- <div class='button '> -->

               <button type="submit" id="submit" name="submit" class='btn btn-primary signlebtn'>Add Disaster</button>
               <!-- </div> -->






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

<!-- text area -->
<!-- <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
   });
  </script> -->







<?php include VIEW.'includes/footer.php' ?>