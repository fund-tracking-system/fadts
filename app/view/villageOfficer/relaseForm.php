<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>

<div style="background-color:#ced4da">

   <div>

      <form>
         <div class="SearchByCriteriaform1">
            <fieldset style="background-color:#fffef4;">
               <h2 style="margin-bottom:80px;">Fund Release Form</h2>


               <div class="form-row">
                  <label for="person-id" style="margin-left:120px;margin-bottom:18px;"><b>Person ID:</b></label>
                  <input class="form-control" id="person-id"
                     style="margin-left:280px;margin-bottom:50px;margin-right:250px; margin-top:-4%;"
                     aria-describedby="validationServer03Feedback" value="person Name" readonly></input>
               </div>


               <div class="form-row">
                  <label for="name" style="margin-left:120px;margin-bottom:18px;"><b>Name:</b></label>
                  <input class="form-control" id="name"
                     style="margin-left:280px;margin-bottom:50px;margin-right:250px;margin-top:-4%;"
                     aria-describedby="validationServer03Feedback" value="person Name" readonly></input>
               </div>
               <div class="form-row">
                  <label for="name" style="margin-left:120px;margin-bottom:18px;"><b>Amount:</b></label>
                  <input class="form-control" id="name"
                     style="margin-left:280px;margin-bottom:50px;margin-right:250px;margin-top:-4%;"
                     aria-describedby="validationServer03Feedback" value="Name is read only" readonly></input>
               </div>



               <div class="form-row">
                  <label for="name" style="margin-left:120px;margin-bottom:18px;"><b>Phone Number:</b></label>
                  <input class="form-control" id="name"
                     style="margin-left:280px;margin-bottom:50px;margin-right:250px;margin-top:-4%;"
                     aria-describedby="validationServer03Feedback" value="0932876272" readonly></input>
               </div>


               <div class="form-row">
                  <label for="name" style="margin-left:120px;margin-bottom:18px;"><b>OTP:</b></label>
                  <input class="form-control" id="OTP"
                     style="margin-left:280px;margin-bottom:50px;margin-right:250px;margin-top:-4%;"
                     aria-describedby="validationServer03Feedback" placeholder="Enter Validation Code" ></input>
               </div>

               <div class='button '>
                  <div class='buttons' style="margin-left:780px;margin-bottom:20px;">

                     <button type="submit" class='confirm-button btn btn-primary '>Req OTP</button>
                     <button class='confirm-button btn btn-primary '> Confirm</button>
                  </div>
               </div>

         </div>
      </form>
   </div>

</div>

<?php include VIEW.'footer.php' ?>