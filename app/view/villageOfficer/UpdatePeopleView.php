<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>

<div class="all_bacground_clor">


   <form method="post" action="">
      <div class="SearchByCriteriaform1">

         <fieldset style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px;">
            <h2 style="margin-bottom:50px;">Search By NID</h2>
            <fieldset style="padding-top:15px; margin-right:50px; margin-left:20px;border-radius:10px; ">
               <div class="form-row " style="display: flex;">
                  <div style="display: flex; ">
                     <label for="NID-number" style="margin-left:150px; margin-top:10px;margin-bottom:-25px; "><b>
                           NID:</b></label>
                     <input class="form-control " id='NID-number'
                        style="margin-left:100px;margin-bottom:20px;margin-right:600px; margin-top:5px;padding-right:30px;"
                        placeholder="972810177v"></input>


                     <div class='button '>

                        <button type="submit" class='submit-button btn btn-primary btn btn-primary'
                           style="margin-left:-550px;margin-top:0px; padding-bottom:10px;">Search</button>
                     </div>
                  </div>
               </div>

            </fieldset>

         </fieldset>

   </form>




   <form>
      <fieldset style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px;padding-top:20px; ">

         <h2 style="margin-bottom:50px;">UPDATE PEOPLE DATA</h2>


         <div class="form-row">
            <label for="name " style="margin-left:70px;margin-bottom:18px;"><b>Name:</b></label>
            <input class="form-control" id="name"
               style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-40px;"
               value="name display only" readonly></input>
         </div>

         <div class="form-row">
            <label for="civil-status" style="margin-left:50px;margin-bottom:-35px;"><b> Address:</b></label>
            <input class="form-control" id="civil-status"
               style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-8px;"
               aria-describedby="validationServer03Feedback" required></input>
         </div>

         <div style="display:flex;">
            <label for="birth-date" style="margin-left:70px;margin-bottom:18px;"><b>Birth Date:</b></label>
            <input class="form-control" id='date' style="margin-left:30px;margin-right:150px;"
               value="Birth date read only" readonly></input>
            <small> </small>
            <label for="birth-date" style="margin-left:70px;margin-bottom:18px;"><b>Birth Certificate
                  No:</b></label>
            <input class="form-control" id='date' style="margin-left:150px;margin-bottom:20px;margin-right:150px;"
               aria-describedby="validationServer03Feedback" readonly></input>
         </div>



         <div class="form-row">
            <label for="region" style="margin-left:70px;margin-bottom:18px;"><b>Region:</b></label>
            <select class="form-control" name="region"
               style="margin-left:150px;margin-bottom:20px;margin-right:150px;margin-top:-40px;" id="region">
               <option value="volvo">Volvo</option>
               <option value="saab">Saab</option>
               <option value="mercedes">Mercedes</option>
               <option value="audi">Audi</option>
            </select>
         </div>

         <div style="display:flex;">
            <label class='phone-number-label' for="job" style="margin-left:70px;margin-bottom:18px;"><b>Job:</b></label>
            <input class="form-control" id='job' style="margin-left:40px;margin-bottom:20px;margin-right:150px;"
               aria-describedby="validationServer03Feedback" required></input>
            <label for='job-type' style="margin-left:70px;margin-bottom:18px;"><b>Job Type:</b></label>
            <input class="form-control" id='job-type' style="margin-left:150px;margin-bottom:20px;margin-right:150px;"
               aria-describedby="validationServer03Feedback" required></input>
         </div>



         <fieldset
            style="margin-top:20px;margin-bottom:20px;margin-left:20px; margin-right:110px;padding-top:30px; border-radius:10px; ">
            <div class="form-row">
               <label for="civil-status" style="margin-left:70px;margin-bottom:-35px;"><b>Trustee
                  </b></label>
               <input class="form-control" id="civil-status"
                  style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-8px;"
                  aria-describedby="validationServer03Feedback" readonly></input>
            </div>

            <div class="form-row">
               <div style="display:flex;">
                  <label class='phone-number-label' for="phone-number"
                     style="margin-left:70px;margin-bottom:18px;"><b>Phone Number1:</b></label>
                  <input class="form-control" id='phone-number'
                     style="margin-left:10px;margin-bottom:20px;margin-right:150px;"
                     aria-describedby="validationServer03Feedback" readonly></input>




                  <label class='phone-number-label' for="phone-number"
                     style="margin-left:70px;margin-bottom:18px;"><b>Phone Number2:</b></label>
                  <input class="form-control" id='phone-number'
                     style="margin-left:150px;margin-bottom:20px;margin-right:150px;"
                     aria-describedby="validationServer03Feedback" readonly></input>
               </div>
            </div>
         </fieldset>
         <div class="form-row">
            <label class='trustee-label' for="CivilStatus"
               style="margin-left:70px;margin-bottom:18px; margin-top:30px;"><b>Civil</br>status:</b></label>
            <select class="form-control" name="trustee" id="trustee"
               style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-60px;"
               aria-describedby="validationServer03Feedback" required>
               <option value="UnMarrried">Married</option>
               <option value="Married">Maried</option>
            </select>

         </div>
         <div class='buttons' style="margin-left:870px;">

            <button type="submit" class='confirm-button btn btn-primary '>Confirm</button>
            <button class='confirm-button btn btn-primary '>View List</button>
         </div>

      </fieldset>

   </form>
</div>
<?php include VIEW.'footer.php' ?>