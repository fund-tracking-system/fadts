<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">



      <form method="post" action="/fadts/village/nicSearchModel?view=searchPeople" id="formSearch1">
      <fieldset class="BackgroundFS">
            <h2>SEARCH BY NIC</h2>
            <fieldset class="searchBar">
               <div class="form-row ">
                  <label for="NID-number" class="searchBarLable"><b>NIC Number :</b></label>
                  <input  class="form-control searchInput" id="NID-number" placeholder="Type Nice here"
                     name="NID"></input>
                  <button type="submit" class="btn btn-primary btnNav ">Search</button>
               </div>
            </fieldset>
         </fieldset>
      </form>


      <form method="post" id="formSearch2">
         <fieldset class="BackgroundFS">
            <h2>SEARCH BY CRITERIA</h2>

            <fieldset class="searchBar" style=" padding:0%;padding-top:3%;">
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

               <div  style="margin-left:50px;">
                  <label class="inputLable"><b>Age:</b></label>
                  <input class="form-control InputOne" value=18 name="ageStart"></input>
                  <span class="inputLable LableTwo"><b>to</b></span>
                  <input class="form-control InputTwo"style="margin-left:810px;" value=80 name="ageEnd"></input>
               </div>


               
               <div style="margin-left:50px;">
                  <label class="inputLable"><b>Gross Income (Rs):</b></label>
                  <input class="form-control InputOne" name="incomeStart" value=0></input>
                  <span class="inputLable LableTwo"><b>to</b></span>
                  <input class="form-control InputTwo"style="margin-left:810px;" name="incomeEnd" value=1000000></input>
               </div>



               <div class="form-row" style="margin-left:50px;">
                  <label class="inputLable" for="disorder"><b> Disorder/Disease :</b></label>
                  <select class="form-control Input" style="width:605px;margin-right:10px;" id="disorder" name="disorder">
                     <option value="" selected>Not select</option>
                     <option value="no">Without Disorder/Diease</option>
                     <option value="yes">With Disorder/Diease</option>
                  </select>
               </div>

               <div class="form-row"style="margin-left:50px;">
                  <label class="inputLable" for="CivilStatus"><b>Civil Status :</b></label>
                  <select class="form-control Input" id="civilStatus"style="width:605px;margin-right:10px;margin-left:250px;" name="civilStatus">
                     <option value="" selected>Not select</option>
                     <option value="0">Unmarried</option>
                     <option value="1">Married</option>
                  </select>
               </div>

              
 

               <div class='form-row'style="margin-left:50px;">
                  <label class="inputLable" style="margin-right:21%;"><b>Current Funds :</br>
                  </label>
                  <select class="js-example-responsive" multiple="multiple"
                     style='top:60px; overflow:scroll;width:600px; ' id="funds" name="funds[]">

                     <?php 
                     foreach($_SESSION['fundList'] as $fund){ ?>

                     <option value="<?php echo $fund['Id']?>"><?php echo $fund['name']?></option>

                     <?php    } 
                     unset($_SESSION['fundList']); ?>

                  </select>
               </div>
               <input hidden disabled></input>


               <div class='form-row' style="margin-top:50px;margin-left:50px;">
                  <label class="inputLable" for="incomeType" style="margin-right:19%; margin-bottom:6%"><b>Income Type / (s) :
                  </label>
                  <select class="js-example-responsive" multiple="multiple"
                     style='top:60px; overflow:scroll;width:600px; ' id="incomeType" name="incomeType[]">

                     <?php 
                     foreach($_SESSION['incomeTypes'] as $incomeType){ ?>

                     <option value="<?php echo $incomeType['id']?>"><?php echo $incomeType['type']?></option>

                     <?php    } 
                     unset($_SESSION['incomeTypes']); ?>

                  </select>
               </div>
               <input hidden disabled></input>


               <div class='Twobtns ' style="margin-top:30px;margin-bottom:30px; margin-left:590px;">

                  <button type="submit" name="submit" class='btn btn-primary '>Search
                     Here</button>
               </div>

            </fieldset>
         </fieldset>
      </form>
   </div>
</div>



<script>
$(document).ready(function() {
   $('#job').select2();
   $('#funds').select2();
   $('#incomeType').select2();
});
</script>


<?php include VIEW.'includes/footer.php' ?>