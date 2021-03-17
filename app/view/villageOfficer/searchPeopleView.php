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
               </div>
            </fieldset>
         </fieldset>
      </form>



      <form method="post" action="/fadts/village/criteriaSearchModel" name="serchByCriteria" id="form">
         <fieldset class="BackgroundFS">
            <h2>SEARCH BY CRITERIA</h2>

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

               <div >
                  <label class="inputLable"><b>Age:</b></label>
                  <input class="form-control InputOne" value=18 name="ageStart"></input>
                  <span class="inputLable LableTwo"><b>to</b></span>
                  <input class="form-control InputTwo" value=80 name="ageEnd"></input>
               </div>


               <div class="form-row">
                  <label class="inputLable" for="disorder"><b>Prolonged Disorder/Disease :</b></label>
                  <select class="form-control Input" id="disorder" name="disorder">
                     <option value="" selected>Not select</option>
                     <option value="no">Without Disorder/Diease</option>
                     <option value="yes">With Disorder/Diease</option>
                  </select>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="CivilStatus"><b>Civil Status :</b></label>
                  <select class="form-control Input" id="civilStatus" name="civilStatus">
                     <option value="" selected>Not select</option>
                     <option value="0">Unmarried</option>
                     <option value="1">Married</option>
                  </select>
               </div>

               <div class='form-row'>
                  <label class="inputLable" for="incomeType" style="margin-right:20%; margin-bottom:6%"><b>Income Type / (s) :
                  </label>
                  <select class="js-example-responsive" multiple="multiple"
                     style='top:60px; overflow:scroll; padding-right:510px;' id="incomeType" name="incomeType[]">

                     <?php 
                     foreach($_SESSION['incomeTypes'] as $incomeType){ ?>

                     <option value="<?php echo $incomeType['id']?>"><?php echo $incomeType['type']?></option>

                     <?php    } 
                     unset($_SESSION['incomeTypes']); ?>

                  </select>
               </div>
               <input hidden disabled></input>

               <div>
                  <label class="inputLable"><b>Gross Income (Rs):</b></label>
                  <input class="form-control InputOne" name="incomeStart" value=0></input>
                  <span class="inputLable LableTwo"><b>to</b></span>
                  <input class="form-control InputTwo" name="incomeEnd" value=1000000></input>
               </div>


               <div class='form-row'>
                  <label class="inputLable" style="margin-right:22%;"><b>Current Funds :</br>
                  </label>
                  <select class="js-example-responsive" multiple="multiple"
                     style='top:60px; overflow:scroll; padding-right:510px;' id="funds" name="funds[]">

                     <?php 
                     foreach($_SESSION['fundList'] as $fund){ ?>

                     <option value="<?php echo $fund['Id']?>"><?php echo $fund['name']?></option>

                     <?php    } 
                     unset($_SESSION['fundList']); ?>

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