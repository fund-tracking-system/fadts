<?php include VIEW.'header.php' ?>

<?php include VIEW.'ministry/sidebar.php' ?>

<div class="SearchByCriteriaform1">

   <form>
      
         <fieldset
            style="background-color:#fffef4; ">
            <h2 style="margin-bottom:50px;">View Fund Details</h2>
            <fieldset Style="margin:2%;border-radius:5px; padding:2%; ">
               <legend style="padding-left:5px; padding-right:5px;"><b>&nbsp;Search Pre Defined Functions</b></legend>
               <div class="form-row" style="margin-top:5%;">
                        <label for="select-fund" style="margin-left:200px;margin-bottom:18px;"><b>Select Predefined
                                Fund:</b></label>
                        <select name="select-fund" id="select-fund" name="fund" class="form-control"
                            style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                            <option value="Samurdhi">Samurdhi</option>
                            <option value="Disabled">Disabled</option>
                            <option value="govi vishrama">govi vishrama</option>
                            <option value="Wedihity deemana">Wedihity deemana</option>
                        </select>

                    </div>

                    <button style="margin-left: 78%; margin-top:-50px; width:13%; margin-bottom:20px;" type="submit"
                        class="btn btn-primary">Select</button>

            
            
            </fieldset>
         </fieldset>
   </form>



   <form>
      <fieldset
         style="background-color:#fffef4;">

         <fieldset Style="margin:2%;border-radius:5px; padding-top:2%;">
            <legend style="padding-left:5px; padding-right:5px;"><b>&nbsp;Search Manually Defined Funds</b></legend>

            <div class="form-row" style="margin-top:50px;">
               <label for="FundName" style="margin-left:200px;margin-bottom:23px;"><b>Fund Name:</b></label>
               <input class="form-control" id="fundName" name="fundName"
                  style="margin-left:350px;margin-bottom:50px;margin-right:250px; margin-top:-4%;"
                  aria-describedby="validationServer03Feedback" required></input>

            </div>
            <div class="form-row " style="margin-bottom:30px;">
               <label for="fundType" style="margin-left:200px;margin-bottom:18px;"><b>Fund Type:</b></label>
               <select class="form-control" name="Fund" id="Fund" name="fund"
                  style="margin-left:350px;margin-bottom:20px;margin-right:250px; margin-top:-3.5%" ;>
                  <option value="Fire">Fire </option>
                  <option value="Flood">Flood </option>
                  <option value="lewgini">Tsunami </option>
                  <option value="Nayayeem">Nayayeem </option>
                  <option value="Sulisulan">Sulisulan </option>
                  <option value="Lewgini">Lewgini </option>
               </select>
            </div>
            <div class="form-row">
               <label for="date" style="margin-left:200px;margin-bottom:18px;"><b>Disaster Date:</b></label>
               <input placeholder="YYYY/MM/DD" class="form-control" id='date' name="date"
                  style="margin-left:350px;margin-bottom:60px;margin-right:250px; margin-top:-3.5%;"
                  aria-describedby="validationServer03Feedback" required></input>
               <small></small>
            </div>

            <div class='button '>

               <button type="submit" class='submit-button  btn btn-primary'
                  style=" float: right; padding-left:30px;padding-right:30px;padding-top:10px; padding-bottom:10px; margin-right:240px; margin-Bottom:30px;;">Search
               </button>
            </div>



         </fieldset>
      </fieldset>




   </form>



</div>
<?php include VIEW.'footer.php'?>