<?php include VIEW.'header.php' ?>

<?php include VIEW.'ministry/sidebar.php' ?>

<div>

   <form>
      <div class="SearchByCriteriaform1">
         <fieldset
            style="background-color:#fffef4; ">
            <h2 style="margin-bottom:50px;">View Fund Details</h2>
            <fieldset Style="margin:2%;border-radius:5px; padding-top:2%; ">
               <legend style="padding-left:5px; padding-right:5px;"><b>&nbsp;Search Pre Defined Functions</b></legend>
               <div class="form-row " style="display: flex;">
                  <div style="display: flex;">
                     <label for="Defined-Fund"
                        style="margin-left:230px;margin-bottom:5px; margin-top:5px; padding-right:70px;"><b>Select:</b></label>
                     <select class="form-control" name="disaster" id="disaster"
                        style="margin-left:80px;margin-bottom:20px;margin-right:5px; margin-top:-.5% ; padding-right:50px;">
                        <option value="Samurdhi">Samurdhi </option>
                        <option value="Disable">Disable </option>
                        <option value="Wedihiti">Adult Allowance</option>
                        <option value="Govi wishrama wetup">Govi wishrama wetup </option>

                     </select>
                     <small></small>

                     <div class='button '>

                        <button type="submit" class='submit-button btn btn-primary btn btn-primary'
                           style="margin-left:80px;margin-top:-5px; padding-bottom:10px; padding-right:40px;padding-left:40px;">Search</button>
                     </div>
                  </div>
               </div>
            </fieldset>
         </fieldset>
   </form>



   <form>
      <fieldset
         style="background-color:#fffef4;">

         <fieldset Style="margin:2%;border-radius:5px; padding-top:2%;">
            <legend style="padding-left:5px; padding-right:5px;"><b>&nbsp;Search Manually Defined Funds</b></legend>

            <div class="form-row" style="margin-top:30px;">
               <label for="officer-id" style="margin-left:150px;margin-bottom:23px;"><b>Fund Name:</b></label>
               <input class="form-control" id="officer-id"
                  style="margin-left:280px;margin-bottom:50px;margin-right:250px; margin-top:-4%;"
                  aria-describedby="validationServer03Feedback" required></input>

            </div>
            <div class="form-row " style="margin-bottom:30px;">
               <label for="disaster" style="margin-left:150px;margin-bottom:18px;"><b>Fund Type:</b></label>
               <select class="form-control" name="disaster" id="disaster"
                  style="margin-left:280px;margin-bottom:20px;margin-right:250px; margin-top:-3.5%" ;>
                  <option value="Fire">Fire </option>
                  <option value="Flood">Flood </option>
                  <option value="lewgini">Tsunami </option>
                  <option value="Nayayeem">Nayayeem </option>
                  <option value="Sulisulan">Sulisulan </option>
                  <option value="Lewgini">Lewgini </option>
               </select>
            </div>
            <div class="form-row">
               <label for="date" style="margin-left:140px;margin-bottom:18px;"><b>Disaster Date:</b></label>
               <input placeholder="YYYY/MM/DD" class="form-control" id='date'
                  style="margin-left:280px;margin-bottom:60px;margin-right:250px; margin-top:-3.5%;"
                  aria-describedby="validationServer03Feedback" required></input>
               <small></small>
            </div>

            <div class='button '>

               <button type="submit" class='submit-button  btn btn-primary'
                  style=" float: right; padding-left:20px;padding-right:20px;padding-top:10px; padding-bottom:10px; margin-right:230px; margin-Bottom:30px;;">Search
               </button>
            </div>



         </fieldset>
      </fieldset>




   </form>



</div>
<?php include VIEW.'footer.php'?>