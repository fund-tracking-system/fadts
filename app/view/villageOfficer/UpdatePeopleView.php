<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php if(isset($_SESSION['updateResults'])) $result = $_SESSION['updateResults']; 
      unset($_SESSION['updateResults'],$_SESSION['personRegion']) ?>


<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">


      <form method="post" action="/fadts/village/nicSearchModel?view=updatePeople" id="formUpdateVillage">
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




      <form method="POST" action="/fadts/village/updatePeopleModel" id="updateVillage">
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
                  <input class="form-control Input" id="name" name="name" readonly
                     value="<?php echo isset($result) ? $result['name']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label for="address" class="inputLable"><b>Address :</b></label>
                  <input class="form-control Input" id="address" name="address" 
                     value="<?php echo isset($result) ? $result['address']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label for="birth-date" class="inputLable"><b>Birth Date :</b></label>
                  <input class="form-control Input" id='birthDate' name="birthDate"
                     value="<?php echo isset($result) ? $result['birthDate']:"" ?>" readonly></input>
               </div>

               <div class="form-row" style="margin-bottom:50px;">
                    <label for="tnid" class="inputLable" style="margin-right:140px;"><b>Family Head :</b></label>

                    <?php
                        require 'connection.php'; 
                        $region = $_SESSION['region'];                     
                        $rgns = "SELECT nid,personId FROM person WHERE region=$region";
                        $rgnRess = $con->query($rgns) ;
                        $ress=$rgnRess->fetch_all(MYSQLI_ASSOC);                           
                    ?>
                    <select  class='form-control Input' name='headOfFamily' id='headOfFamily'
                            style="position:sticky;top:60px;overflow:scroll;  width:530px;">
                        <option value="<?php echo isset($result) ? $result['personId'] : ""?>" hidden selected><?php echo isset($result) ? $result['nid'] : ""?></option>
                        <?php 
                            foreach($ress as $data){
                            echo '<option value="'.$data['personId'].'">'.$data['nid'].'</option>';
                            }
                        ?>
                    </select>
                </div>
               <!-- this field is use for send nid to the model -->
               <div class="form-row">
                  <input type="hidden" name="nid" value="<?php echo isset($result) ? $result['nid']:""?>"></input>
               </div>

               <div class="form-row">
                  <label for="monthlyIncome" class="inputLable"><b>Monthly Income (Rs.) :</b></label>
                  <input class="form-control Input" id="monthlyIncome" name="monthlyIncome" 
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></input>
               </div>
                
               <div class="form-row">
                  <label class="inputLable" for="disordered"><b>Prolonged Disorder/Disease :</b></label>
                  <select class="form-control Input" id="disordered" name="disordered">

                     <option
                        value="<?php echo isset($result) ? $result['disordered'] :"" ?>"
                        selected hidden>

                        <?php echo isset($result) ? ( ($result['disordered']=="yes") ? "With Disorder/Diease":"Without Disoeder/Diease" ) :"" ?>

                     </option>

                     <option value="no">Without Disoeder/Diease</option>
                     <option value="yes">With Disorder/Diease</option>
                  </select>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="CivilStatus"><b>Civil status :</b></label>
                  <select class="form-control Input" id="civilStatus" name="civilStatus">

                     <option
                        value="<?php echo isset($result) ?$result['civilStatus'] :"" ?>"
                        selected hidden>

                        <?php echo isset($result) ? ( ($result['civilStatus']=="0") ? "Unmarried":"Married" ) :"" ?>

                     </option>

                     <option value="0">Unmarried</option>
                     <option value="1">Married</option>
                  </select>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="job type"><b>Income Type :</b></label>
                  <select class="form-control Input" id="job" name="job">
                     <option value="<?php echo isset($result) ? $result['job']:"" ?>" selected hidden>
                        <?php echo isset($result) ? $result['job']:"" ?></option>
                     <option value="government">Government</option>
                     <option value="private">Private</option>
                     <option value="retired">Retired</option>
                     <option value="business_owner">Business owner</option>
                     <option value="self_employeed">Self employeed</option>
                     <option value="jobless">Jobless</option>
                  </select>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="dead"><b>Dead or Alive :</b></label>
                  <select class="form-control Input" id="dead" name="dead">

                     <option value="<?php echo isset($result) ? $result['dead'] :"" ?>"
                     selected hidden >

                        <?php echo isset($result) ? ( ($result['dead']=="no") ? "Alive":"Dead" ) :"" ?>

                     </option>

                     <option value="no">Alive</option>
                     <option value="yes">Dead</option>
                  </select>
               </div>

               <div class="Twobtn">
                  <button type="submit" name="submit" class="btn btn-primary" 
                  <?php echo isset($result)? "":"disabled" ?> >Confirm and Update</button>

               </div>

            </fieldset>
         </fieldset>

      </form>
   </div>
</div>


<script>
$(document).ready(function() {
    $('#headOfFamily').select2();
});
</script>

<?php include VIEW.'includes/footer.php' ?>