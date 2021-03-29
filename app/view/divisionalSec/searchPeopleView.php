<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">

      <form method="post" id="formCriteria" action="/fadts/divisional/criteriaSearchModel">
         <fieldset class="BackgroundFS">
            <h2>SEARCH BY CRITERIA</h2>

            <fieldset class="searchBar" style=" padding:0%;padding-top:3%;">

               <div style="margin-left:50px;">
                  <label class="inputLable"><b>Age:</b></label>
                  <input class="form-control InputOne" name="ageStart"></input><span class="inputLable LableTwo"> <b>
                        to</b></span>
                  <input class="form-control InputTwo" style="margin-left:810px;" name="ageEnd"></input>
               </div>

               <div class="margn" style=margin-left:50px;>

                  <label class="inputLable"><b>Gross Income:</b></label>
                  <input class="form-control InputOne" name="incomeStart"></input><span class="inputLable LableTwo">
                     <b> to</b></span>
                  <input class="form-control InputTwo" style= "margin-left:810px;" name="incomeEnd"></input>

               </div>




               <div class="form-row" style="margin-bottom:50px;margin-left:50px;">
                  <label for="region" class="inputLable" style="margin-right:275px;"><b>Region :</b></label>

                  <?php

                  require 'connection.php'; 
                  

                  $region = $_SESSION['region'];
                                 
                  $rgn = "SELECT regionid,superRegion,name FROM region WHERE level=4 AND superRegion=$region";
                  $rgnRes = $con->query($rgn) ;
                  $res=$rgnRes->fetch_all(MYSQLI_ASSOC); 
                  
                  ?>
                  <select id='region' class='form-control Input' name='region' id='region'
                     style='position:sticky;top:60px;overflow:scroll;  width:620px; '>
                     <option value="<?php echo $_SESSION['region'] ?>" >Whole Divisional Regions </option>
                     <?php 
                              foreach($res as $data){ 
                                echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';
                              }
                           ?>
               </div>
               <div><input type="hidden"></input></div>

               <div class="form-row" style="margin-left:50px;">
                  <label class="inputLable" for="job type" style="margin-right:21.5%;"><b>Income Type :</b></label>
                  <select class="js-example-responsive" multiple="multiple"
                     style="position:sticky;top:60px;overflow:scroll; padding-right:480px;  " id="job" name="incomeType[]">
                    <?php 
                     foreach($_SESSION['incomeTypes'] as $incomeType){ ?>

                     <option value="<?php echo $incomeType['id']?>"><?php echo $incomeType['type']?></option>

                     <?php    } 
                     unset($_SESSION['incomeTypes']); ?>
                  </select>
               </div>

               <!-- <div style="  padding-top: 30px; margin-left:50px; ">
                  <label class="inputLable"><b>Prolonged</br>
                  </label>
                  <label class="inputLable" style="margin-right:3.5%;">
                     Disorders/Diseases:</b></label>

                  <div class='radio1' style=margin-left:130px;>
                     <input type="radio" id="have-pro" name="prolonged" value="have" class="radioHaveInput">
                     <label for="have-pro" class="radioHaveLable"></label><span><b>Have</b></span>
                  </div>
                  <div class='radio2'>
                     <input type="radio" id="no-pro" name="prolonged" value="no">
                     <label for="no-pro" class="radioLbl2"></label><span><b>No</b></span>
                  </div>
               </div> -->



               <div class="form-row" style="margin-left:50px;margin-top:60px;">
                  <label class="inputLable" for="disorder"><b> Disorder/Disease :</b></label>
                  <select class="form-control Input" style="width:625px;margin-left:330px;margin-right:100px;" id="disorder" name="disorder">
                     <option value="" selected>Not select</option>
                     <option value="no">Without Disorder/Diease</option>
                     <option value="yes">With Disorder/Diease</option>
                  </select>
               </div>

               <div class="form-row"style="margin-left:50px;">
                  <label class="inputLable" for="CivilStatus"><b>Civil Status :</b></label>
                  <select class="form-control Input" id="civilStatus"style="width:625px;margin-left:330px;margin-right:100px;" name="civilStatus">
                     <option value="" selected>Not select</option>
                     <option value="0">Unmarried</option>
                     <option value="1">Married</option>
                  </select>
               </div>

               <!-- <div style="  padding-top: 30px; " >
                  </br> -->


 

                  <!-- <label class="inputLable" style="margin-right:9%;margin-left:50px;"><b>
                        Civil Status :</b></label>

                  <div class='radio1'style=margin-left:130px;>
                     <input type="radio" id="have-pro" name="prolonged" value="have" class="radioHaveInput">
                     <label for="have-pro" class="radioHaveLable"></label><span><b>Married</b></span>
                  </div>
                  <div class='radio2'>
                     <input type="radio" id="no-pro" name="prolonged" value="no">
                     <label for="no-pro" class="radioLbl2"></label><span><b>Unmarried</b></span>
                  </div>
               </div> -->

               


               <div class='form-row'style="margin-left:50px;">
                  <label class="inputLable" style="margin-right:19%;"><b>Current Funds :</br>
                  </label>
                  <select class="js-example-responsive" multiple="multiple"
                     style='position:sticky;top:60px;overflow:scroll; width:625px;' id="funds" name="funds[]">
                     <?php 
                     foreach($_SESSION['fundList'] as $fund){ ?>

                     <option value="<?php echo $fund['Id']?>"><?php echo $fund['name']?></option>

                     <?php    } 
                     unset($_SESSION['fundList']); ?>
                  </select>
               </div>


              


               <div class='Twobtns ' style="margin-top:60px;margin-bottom:30px; margin-left:600px;">

                  <button type="submit" name="submit" class=' btn btn-primary'>Search
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
   $('#region').select2();
});
</script>



<?php include VIEW.'includes/footer.php' ?>