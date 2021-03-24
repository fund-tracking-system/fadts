<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php 
   if(isset($_SESSION['updateResults'])){
      $result = $_SESSION['updateResults'];
      $personRegion = $_SESSION['personRegion'];
      unset($_SESSION['updateResults'],$_SESSION['personRegion']);
   } 
?>


<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">


      <form method="post" action="/fadts/divisional/nicSearchModel?view=updatePeople" >
         <fieldset class="BackgroundFS">
            <h2>UPDATE PEOPLE DATA</h2>
            <fieldset class="searchBar">

            <?php 
               if(isset($_GET['searcherror'])){
         
                  $error = $_GET['searcherror'];
                  if($error == "db_conn_err"){
                     echo '<div class="alert alert-danger" role="alert">Database connection error! Please try again</div>';
                  }
                  if($error == "wrong_region"){
                     echo '<div class="alert alert-danger" role="alert">You can\'t view other regions data!</div>';
                  }
                  if($error == "wrong_nid_or_dead"){
                     echo '<div class="alert alert-danger" role="alert">This NIC is wrong or this person does not exist!</div>';
                  }
                  if($error == "no_records"){
                     echo '<div class="alert alert-danger" role="alert">No records found!</div>';
                  }        
               }   
            ?>

               <div class="form-row ">
                  <label for="NID-number" class="searchBarLable"><b>NIC Number :</b></label>
                  <input class="form-control searchInput" id='NID-number'
                     placeholder="<?php echo isset($result) ? $result['nid']:"Type here NIC"?>" name="nic"></input>
                  <button type="submit" class="btn btn-primary btnNav" name="submit">Search</button>
               </div>
            </fieldset>
         </fieldset>
      </form>




      <form method="POST" action="/fadts/divisional/updatePeopleModel" id="formUpdate">
         <fieldset class="BackgroundFS">

            <fieldset class="searchBar">

            <?php 
               if(isset($_GET['error'])){
         
                  $error = $_GET['error'];
                  if($error == "db_conn_err"){
                     echo '<div class="alert alert-danger" role="alert">Database connection error! Please try again</div>';
                  }
                  if($error == "update_success"){
                     echo '<div class="alert alert-success" role="alert">Updation is successful!</div>';
                  }        
               }   
            ?>


               <div class="form-row">
                  <label for="name " class="inputLable"><b>Full Name :</b></label>
                  <input class="form-control Input" id="name" name="name"
                     value="<?php echo isset($result) ? $result['name']:"" ?>"></input>
               </div>



               
               


               <div class="form-row">
                  <label for="birth-date" class="inputLable"><b>Birth Date :</b></label>
                  <input class="form-control Input" id='birthDate' name="birthDate"
                     value="<?php echo isset($result) ? $result['birthDate']:"" ?>" readonly></input>
                  <small> </small>
               </div>

               <div class="form-row">
                  <label for="birthNO" class="inputLable"><b>Birth Certificate No :</b></label>
                  <input class="form-control Input" id="birthCertificateNo" name="birthCertificateNo"
                     value="<?php echo isset($result) ? $result['birthCertificateNo']:"" ?>" readonly></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="validRegion"><b>Region Enable/Disable :</b></label>
                  <select class="form-control Input" id="validRegion" name="validRegion">

                     <option
                        value="<?php echo isset($result) ? $result['validRegion'] :"" ?>"
                        selected hidden 
                     >
                        <?php echo isset($result) ? ( ($result['validRegion']=="yes") ? "Enable":"Disable" ) :"" ?>
                     </option>

                     <option value="yes">Enable</option>
                     <option value="no">Disable</option>
                  </select>
               </div>


               <div class="form-row" style="margin-bottom:50px;">

                  <label for="tnid" class="inputLable" style="margin-right:285px;"><b>Region :</b></label>
                  <?php

                  require 'connection.php'; 
                                 
                  $rgn="SELECT level, regionid, superRegion,name  FROM region  WHERE level=4 ";
                  $rgnRes=$con->query($rgn) ;
                  $res=$rgnRes->fetch_all(MYSQLI_ASSOC);
                  
                  $_SESSION['region_result']=$res;  //for assign region  ?>

                  <select id='region' class='form-control Input'  name='region' id='region'
                  style='position:sticky;top:60px;overflow:scroll;  width:544px; '>
                     <option value="<?php echo isset($result) ? $result['region']:"" ?>" selected hidden>
                        <?php echo  isset($personRegion) ? $personRegion['name']:"" ?>
                     </option>
                     <?php 
                     foreach($res as $data){
                        if($data['superRegion']==$_SESSION['region']){
                           echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';
                     }
                  }
               ?>
               </div>

               <div class="form-row">
                  <input type="hidden" name="nid" value="<?php echo isset($result) ? $result['nid']:""?>"></input>
               </div>

               <div class="form-row">
                  <label for="trustee" class="inputLable"><b>Trustee :</b></label>
                  <input id="trustee" name="trustee" class="form-control Input"
                     value="<?php echo isset($result) ? $result['trustee']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="phone-number"><b>Contact No 1 :</b></label>
                  <input class="form-control Input" id="phone" name="phone"
                     value="<?php echo isset($result) ? $result['phone']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="phone-number"><b>Contact No 2 :</b></label>
                  <input class="form-control Input" id="phone_two" name="phone_two"
                     value="<?php echo isset($result) ? $result['phone_two']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="CivilStatus"><b>Civil status :</b></label>
                  <select class="form-control Input" id="civilStatus" name="civilStatus">

                     <option
                     value="<?php echo isset($result) ? $result['civilStatus'] :"" ?>"
                     selected hidden>
                        <?php echo isset($result) ? ( ($result['civilStatus']=="0") ? "Unmarried":"Married" ) :"" ?>
                     </option>

                     <option value="0">Unmarried</option>
                     <option value="1">Married</option>
                  </select>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="job type"><b>Income type :</b></label>
                  <select class="form-control Input" id="jobType" name="jobType">
                     <option value="<?php echo isset($result) ? $result['job']:"" ?>" selected hidden>
                        <?php echo isset($result) ? $result['job']:"" ?></option>
                     <option value="Government">Government</option>
                     <option value="Private">Private</option>
                     <option value="Retired">Government pension</option>
                     <option value="Business owner">Business owner</option>
                     <option value="Self employeed">Self employeed</option>
                     <option value="Jobless">Jobless</option>
                  </select>
               </div>


               <div class="form-row">
                  <label for="name " class="inputLable"><b>Adrress :</b></label>
                  <textarea class="form-control Input txtWidth"  id="address" name="address"><?php echo isset($result) ? $result['address']:"" ?></textarea>
               </div>


               <div class="Twobtns">
                  <button type="submit" name="submit" class="btn btn-primary"
                  <?php echo isset($result)? "":"disabled" ?>>Confirm and Update</button>

               </div>

            </fieldset>
         </fieldset>

      </form>
   </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
   $('#region').select2();
});
</script>


<?php include VIEW.'includes/footer.php' ?>