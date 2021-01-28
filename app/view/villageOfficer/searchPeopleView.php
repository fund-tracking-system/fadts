<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">



      <form method="post" action="/fadts/village/nicSearchModel?view=searchPeople" name="singlePersonSearch" id="form">
         <fieldset class="BackgroundFS">
            <h2>SEARCH BY NIC</h2>
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
                  <label for="NID-number" class="searchBarLable"><b>NIC Number:</b></label>
                  <input style="margin-left:90px; width:450px;" class="form-control searchInput" id="NID-number"
                     name="nic"></input>
                  <button type="submit" name="submit" class="btn btn-primary btnNav ">Search</button>
                  <!-- <a href="/fadts/village/personDetails" class="btn btn-primary btnNav">Search</a> -->
               </div>
            </fieldset>
         </fieldset>
      </form>



      <form method="post" action="/fadts/village/" name="serchByCriteria" id="form">
         <fieldset class="BackgroundFS">
            <h2>SEARCH BY CRITERIA</h2>

            <fieldset class="searchBar">

               <div >
                  <label class="inputLable"><b>Age:</b></label>
                  <input class="form-control InputOne" name="ageStart"></input>
                  <span class="inputLable LableTwo"><b>to</b></span>
                  <input class="form-control InputTwo" name="ageEnd"></input>
               </div>


               <div class="form-row">
                  <label class="inputLable" for="disorder"><b>Prolonged Disorder/Disease :</b></label>
                  <select class="form-control Input" id="disorder" name="disorder">
                     <option value="" disabled selected>Not select</option>
                     <option value="no">Without Disorder/Diease</option>
                     <option value="yes">With Disorder/Diease</option>
                  </select>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="CivilStatus"><b>Civil Status :</b></label>
                  <select class="form-control Input" id="civilStatus" name="civilStatus">
                     <option value="" disabled selected>Not select</option>
                     <option value="0">Unmarried</option>
                     <option value="1">Married</option>
                  </select>
               </div>

               <div class='form-row'>
                  <label class="inputLable" for="incomeType" style="margin-right:20%; margin-bottom:6%"><b>Income Type / (s) :</br>
                  </label>
                  <select class="js-example-responsive" multiple="multiple"
                     style='top:60px; overflow:scroll; padding-right:510px;' id="incomeType" name="incomeType[]">
                     <option value="government">Government</option>
                     <option value="private">Private</option>
                     <option value="retired">Government pension</option>
                     <option value="business_owner">Business owner</option>
                     <option value="self_employeed">Self employeed</option>
                     <option value="jobless">Jobless</option>
                  </select>
               </div>
               <input hidden disabled></input>

               <div>
                  <label class="inputLable"><b>Gross Income:</b></label>
                  <input class="form-control InputOne" ame="incomeStart"></input>
                  <span class="inputLable LableTwo"><b>to</b></span>
                  <input class="form-control InputTwo" name="incomeEnd"></input>
               </div>


               <div class='form-row'>
                  <label class="inputLable" style="margin-right:22%;"><b>Current Funds :</br>
                  </label>
                  <select class="js-example-responsive" multiple="multiple"
                     style='top:60px; overflow:scroll; padding-right:510px;' id="funds" name="funds[]">
                     <option value="government">Samurdhi</option>
                     <option value="private">Samurdhi Eligible List</option>
                     <option value="retired">Adults Fund</option>
                     <option value="business_owner">Mahapola</option>
                     <option value="self_employeed">Other Gov Funds</option>
                  </select>
               </div>
               <input hidden disabled></input>


               <div class='button ' style="margin-top:30px;">

                  <button type="submit" name="submit" class='btn btn-primary signlebtn'>Search
                     Here</button>
               </div>

            </fieldset>
         </fieldset>
      </form>
   </div>
</div>



<script>
$(document).ready(function() {
   $('#incomeType').select2();
   $('#funds').select2();
});
</script>


<?php include VIEW.'includes/footer.php' ?>