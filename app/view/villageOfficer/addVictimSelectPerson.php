<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>

<div style="background-color:#ced4da">

   <div>

      <form>
         <div class="SearchByCriteriaform1">
            <fieldset style="background-color:#fffef4; height:600px;">
               <h2 style="margin-bottom:80px;">Add People Victimes Form</h2>


               <div class="form-row">
                  <label for="person-id" style="margin-left:120px;margin-bottom:18px;"><b>Person ID:</b></label>
                  <input class="form-control" id="person-id"
                     style="margin-left:300px;margin-bottom:50px;margin-right:250px; margin-top:-4%;"
                     aria-describedby="validationServer03Feedback" placeholder="972810177v" ></input>
               </div>


               <div class="form-row">
                  <label for="name" style="margin-left:120px;margin-bottom:18px;"><b>Amount of Damage:</b></label>
                  <input class="form-control" id="damage-amount"
                     style="margin-left:300px;margin-bottom:50px;margin-right:250px;margin-top:-4%;"
                     aria-describedby="validationServer03Feedback"></input>
               </div>
               <div class="form-row">
                  <label for="name" style="margin-left:120px;margin-bottom:18px;"><b>Location:</b></label>
                  <input class="form-control" id="location"
                     style="margin-left:300px;margin-bottom:50px;margin-right:250px;margin-top:-4%;"
                     aria-describedby="validationServer03Feedback"></input>
               </div>
               <div class="form-row">
                  <label for="name" style="margin-left:120px;margin-bottom:18px;"><b>Description:</b></label>
                  <textarea class="form-control" id="description"
                     style="margin-left:300px;margin-bottom:50px;margin-right:250px;margin-top:-4%;   min-height: 130px; line-height: 20px;" role="textbox"
                     aria-describedby="validationServer03Feedback"></textarea>
               </div>


               <button style="margin-left: 66%; width:13%" type="submit" class="btn btn-primary">Add Person</button>
            </fieldset>
         </div>
      </form>
   </div>

</div>

<?php include VIEW.'footer.php' ?>