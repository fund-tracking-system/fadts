<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">



      <form method="post" action="/fadts/village/nicSearchModel?view=" id="form">
         <fieldset class="BackgroundFS">
            <h2>SEARCH BY NIC</h2>
            <fieldset class="searchBar">
               <div class="form-row ">
                  <label for="NID-number" class="searchBarLable"><b>NID Number:</b></label>
                  <input class="form-control searchInput" id="NID-number" name="NID"></input>
                  <button type="submit" class="btn btn-primary btnNav">Search</button>
               </div>
            </fieldset>
         </fieldset>
      </form>


      <form method="post" id="form">
         <fieldset class="BackgroundFS">
            <h2>SEARCH BY CRITERIA</h2>
            <fieldset class="searchBar" style=" padding:0%;padding-top:3%;">    

            <div>
               <label class="inputLable"><b>Age:</b></label>
               <input class="form-control InputOne" name="age1"></input><span class="inputLable LableTwo"> <b>
                     to</b></span>
               <input class="form-control InputTwo" name="age2"></input>
            </div>

            <div class='form-row'>
               <label class="inputLable " style=><b>Job Type</br></label>
               <label class="inputLable" style ="padding-right:1000px;"></b></label>

               <select class="form-control Input" onclick="showCheckboxes() ">
                  <!-- <option>Select an option</option> select kree mnwada kyla pennanna onna methana -->
               </select>
               <!-- <div class="overSelect"></div> - -->

               <div id="checkboxes" class="checksbox" name="checkbox">

                  <label for="one" class="form-control">
                     <input type="checkbox" id="Goverment" name="Goverment" />&nbsp; &nbsp;Goverment</label>
                  <label for="two" class="form-control">
                     <input type="checkbox" id="Private" name="Private" /> &nbsp; &nbsp;Private</label>
                  <label for="three" class="form-control">
                     <input type="checkbox" id="Retired" name="Retired" /> &nbsp; &nbsp; Retired</label>
                  <label for="four" class="form-control">
                     <input type="checkbox" id="Own Bussiness" name="Own Bussiness" /> &nbsp; &nbsp;Own
                     Bussiness</label>
                  <label for="four" class="form-control">
                     <input type="checkbox" id="SelfEmployee" name="Own Bussiness" /> &nbsp; &nbsp;Self Employee</label>
                  <label for="four" class="form-control">
                     <input type="checkbox" id="Jobless" name="jobless" /> &nbsp; &nbsp;Jobless</label>
               </div>
            </div>




            <fieldset class="searchBar">
               <div>
                  <label class="inputLable"><b>Age:</b></label>
                  <input class="form-control InputOne" name="age1"></input><span class="inputLable LableTwo"> <b>
                        to</b></span>
                  <input class="form-control InputTwo" name="age2"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="job type"><b>Income Type :</b></label>
                  <select class="js-example-responsive" multiple="multiple" style="position:sticky;top:60px;overflow:scroll;  width:550px;" id="job" name="job">
                     <option value="government">Government</option>
                     <option value="private">Private</option>
                     <option value="retired">Retired</option>
                     <option value="business_owner">Business owner</option>
                     <option value="self_employeed">Self employeed</option>
                     <option value="jobless">Jobless</option>
                  </select>
               </div>

               <div style="  padding-top: 30px; ">
                  <label class="inputLable"><b>Prolonged</br>
                  </label>
                  <label class="inputLable">
                     Disorders/Diseases:</b></label>

                  <div class='radio1'>
                     <input type="radio" id="have-pro" name="prolonged" value="have" class="radioHaveInput">
                     <label for="have-pro" class="radioHaveLable"></label><span><b>Have</b></span>
                  </div>
                  <div class='radio2'>
                     <input type="radio" id="no-pro" name="prolonged" value="no">
                     <label for="no-pro" class="radioLbl2"></label><span><b>No</b></span>
                  </div>
               </div>
               <div style="  padding-top: 30px; ">
                  <label class="inputLable"><b></br>
                  </label>
                  <label class="inputLable">
                  Civil Status :</b></label>

                  <div class='radio1'>
                     <input type="radio" id="have-pro" name="prolonged" value="have" class="radioHaveInput">
                     <label for="have-pro" class="radioHaveLable"></label><span><b>Married</b></span>
                  </div>
                  <div class='radio2'>
                     <input type="radio" id="no-pro" name="prolonged" value="no">
                     <label for="no-pro" class="radioLbl2"></label><span><b>Unmarried</b></span>
                  </div>
               </div>

               <div class="margn">

                  <label class="inputLable"><b>Gross Income:</b></label>
                  <input class="form-control InputOne" ame="income1"></input><span class="inputLable LableTwo">
                     <b> to</b></span>
                  <input class="form-control InputTwo" name="income2 "></input>

               </div>


               <div class='form-row'>
                  <label class="inputLable"><b>Current Funds :</br></label>
                  <select class="js-example-responsive" multiple="multiple" style='position:sticky;top:60px;overflow:scroll;  width:550px;' id="funds" name="funds">
                     <option value="government">Samurdhi</option>
                     <option value="private">Samurdhi Eligible List</option>
                     <option value="retired">Adults Fund</option>
                     <option value="business_owner">Mahapola</option>
                     <option value="self_employeed">Other Gov Funds</option>
                  </select>
               </div>


               <div class='button '>

                  <button type="submit" class=' btn btn-primary signlebtn'>Search
                     Here</button>
               </div>

            </fieldset>
         </fieldset>
      </form>
   </div>
</div>



<!-- checkBox scriptFiles  -->




<script>
$(document).ready(function() {
   $('#job').select2();
   $('#funds').select2();
});
</script>




<?php include VIEW.'includes/footer.php' ?>