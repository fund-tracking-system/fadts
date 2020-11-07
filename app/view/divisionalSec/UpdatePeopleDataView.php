<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">



      <form method="post" action="" id="form">
         <fieldset class="BackgroundFS">
            <h2>UPDATE PEOPLE DATA</h2>
            <fieldset class="searchBar">
               <div class="form-row " style="margin-left:80px;">
                  <label for="NID-number" class="searchBarLable"><b>NID Number:</b></label>
                  <input class="form-control searchInput" id='NID-number' placeholder="972810177v" name="NID"></input>
                  <button type="submit" class="btn btn-primary btnNav">Search</button>
               </div>
            </fieldset>
         </fieldset>
      </form>




      <form>
         <fieldset class="BackgroundFS">
            <!-- <h2>UPDATE PEOPLE DATA</h2> -->


            <fieldset class="searchBar">
               <div class="form-row">
                  <label for="name " class="inputLable"><b>Full Name:</b></label>
                  <input class="form-control Input" id="name" name="name" value="name display only" readonly></input>
               </div>



               <div class="form-row">
                  <label for="Address" class="inputLable"><b>Address:</b></label>
                  <input class="form-control Input" id="address" name="address"
                     placeholder="Opatha,ganegoda,Elptye,Galle"></input>
               </div>


               <div class="form-row">
                  <label for="birth-date" class="inputLable"><b>Birth Date:</b></label>
                  <input class="form-control Input" id='birthDate' name="birthDate" value="YYYY/MM/DD"
                     readonly></input>
                  <small> </small>
               </div>
               <div class="form-row">
                  <label for="birthNO" class="inputLable"><b>Birth Certificate No:</b></label>
                  <input class="form-control Input" id='birthvertifiacateNo' name="birthCertificateNo"
                     readonly></input>
               </div>


               <div class="form-row">
                  <label for="region" class="inputLable"><b>Region:</b></label>
                  <select class="form-control Input" name="region" id="region" name="region">
                     <option value="volvo">Volvo</option>
                     <option value="saab">Saab</option>
                     <option value="mercedes">Mercedes</option>
                     <option value="audi">Audi</option>
                  </select>
               </div>




               <div class="form-row">
                  <label for="trustee" class="inputLable"><b>Trustee
                     </b></label>
                  <input id="trustee" class="form-control Input"></input>
               </div>



               <div class="form-row">
                  <label class="inputLable" for="phone-number"><b>Contact No 1:</b></label>
                  <input class="form-control Input" id='phone-number-1' name="phoneNumber1"></input>
                </div>
                <div class="form-row">      
                  <label class="inputLable" for="phone-number"><b>Contact No 2:</b></label>
                  <input class="form-control Input" id='phone-number2' name="phoneNumber2"></input>
               </div>



               <div class="form-row">
                  <label class="inputLable" for="CivilStatus"><b>Civil status:</b></label>
                  <select class="form-control Input" name="trustee" id="civilStatus" name="civilStatus">
                     <option value="unmarried">Unmarried</option>
                     <option value="married">Married</option>
                  </select>
               </div>

               <div class='form-row'>
                  <label class="inputLable"><b>Job type </br></label>
                  <label class="inputLable"></b></label>

                  <select class="form-control Input" onclick="showCheckboxes() ">
                     <!-- <option>Select an option</option>  select krapua pennanna hadann ooona-->
                  </select>
                  <!-- <div class="overSelect"></div> -->

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
                        <input type="checkbox" id="SelfEmployee" name="Own Bussiness" /> &nbsp; &nbsp;Self
                        Employee</label>
                     <label for="four" class="form-control">
                        <input type="checkbox" id="Jobless" name="jobless" /> &nbsp; &nbsp;Jobless</label>
                  </div>
               </div>


               <div class="Twobtn">

                  <button type="submit" class=' btn btn-primary '>Confirm</button>
                  <button class=' btn btn-primary '>View List</button>
               </div>



            </fieldset>
         </fieldset>

      </form>
   </div>
</div>


<script type="text/javascript">
var expanded = false;

function showCheckboxes() {
   var checkboxes = document.getElementById("checkboxes");
   if (!expanded) {
      checkboxes.style.display = "block";
      expanded = true;
   } else {
      checkboxes.style.display = "none";
      expanded = false;
   }
}
</script>

<?php include VIEW.'includes/footer.php' ?>