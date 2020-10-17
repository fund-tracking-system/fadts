<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>

<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">



      <form method="post" action="" id="form">
         <fieldset class="searchBackgroundFS">
            <h2 style="margin-bottom:50px;">Search By NID</h2>
            <fieldset class="searchBar">
               <div class="form-row ">
                  <label for="NID-number" class="searchBarLable"><b>NID Number:</b></label>
                  <input class="form-control searchInput" id='NID-number' placeholder="9 7 2 8 1 0 1 7 7 v"
                     name="NID"></input>
                  <button type="submit" class="btn btn-primary btnNav">Search</button>
               </div>
            </fieldset>
         </fieldset>
      </form>




      <form>
         <fieldset class="searchBackgroundFS">
            <h2>UPDATE PEOPLE DATA</h2>

            <div class="form-row">
               <label for="name " class="inputLable"><b>Full Name:</b></label>
               <input class="form-control Input" id="name" name="name" value="name display only" readonly></input>
            </div>

            <div class="form-row">
               <label for="Address" class="inputLable"><b>Address:</b></label>
               <input class="form-control Input" id="address" name="address"
                  placeholder="Opatha,ganegoda,Elptye,Galle"></input>
            </div>

            <div>
               <label for="birth-date" class="inputLable"><b>Birth Date:</b></label>
               <input class="form-control InputOne" id='birthDate' name="birthDate" value="YYYY/MM/DD" readonly></input>
               <small> </small>
               <label for="birthNO" class="inputLable LableTwo"><b>Birth Certificate
                     No:</b></label>
               <input class="form-control InputTwo" id='birthvertifiacateNo' name="birthCertificateNo" readonly></input>
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


            <div>
               <label class='inputLable' for="job"><b>Job:</b></label>
               <input class="form-control InputOne" id='job' name="job"></input>
               <label for='job-type' class="inputLable LableTwo"><b>Job Type:</b></label>
               <input class="form-control InputTwo" id='job-type' name="JobType"></input>
            </div>



            <div class="form-row">
               <label for="trustee" class="inputLable"><b>Trustee
                  </b></label>
               <input id="trustee" class="form-control Input" readonly></input>
            </div>



            <div>
               <label class='inputLable' for="phone-number"><b>Phone Number1:</b></label>
               <input class="form-control InputOne" id='phone-number-1' readonly name="phoneNumber1"></input>

               <label class='inputLable LableTwo' for="phone-number"><b>Phone Number2:</b></label>
               <input class="form-control InputTwo" id='phone-number2' name="phoneNumber2" readonly></input>
            </div>



            <div class="form-row">
               <label class="inputLable" for="CivilStatus"><b>Civil</br>status:</b></label>
               <select class="form-control Input" name="trustee" id="civilStatus" name="civilStatus">
                  <option value="UnMarrried">Married</option>
                  <option value="Married">Maried</option>
               </select>
            </div>


            <div class="Twobtn">

               <button type="submit" class='confirm-button btn btn-primary '>Confirm</button>
               <button class='confirm-button btn btn-primary '>View List</button>
            </div>




         </fieldset>

      </form>
   </div>
</div>
<?php include VIEW.'footer.php' ?>