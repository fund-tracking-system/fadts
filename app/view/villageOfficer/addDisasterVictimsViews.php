<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>


<form class="form">
   <div class='SearchByCriteriaform1'>
      <fieldset style="background-color:#fffef4;height:600px;">
         <h2 style="color:black ; margin-bottom:100px;padding-top:10px; margin-top:50px;"> Add to  VictimsDisaster</h2>

         <div class="form-row " style="margin-bottom:30px;">
            <label for="disaster" style="margin-left:70px;margin-bottom:18px;"><b>Disaster Type:</b></label>
            <select class="form-control" name="disaster" id="disaster"
               style="margin-left:200px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%" ;>
               <option value="Fire">Fire </option>
               <option value="Flood">Flood </option>
               <option value="lewgini">Tsunami </option>
               <option value="Nayayeem">Nayayeem </option>
               <option value="Sulisulan">Sulisulan </option>
               <option value="Lewgini">Lewgini </option>
            </select>
         </div>
         <div class="form-row">
            <label for="disaster-name" style="margin-left:70px;margin-bottom:18px;"><b>Disaster Name:</b></label>
            <input class="form-control" id="disaster-name"
               style="margin-left:200px;margin-bottom:60px;margin-right:150px; margin-top:-3.5%;"
               aria-describedby="validationServer03Feedback" required></input>
         </div>
         <div class="form-row">
            <label for="date" style="margin-left:70px;margin-bottom:18px;"><b>Disaster Date:</b></label>
            <input placeholder="YYYY/MM/DD" class="form-control" id='date'
               style="margin-left:200px;margin-bottom:60px;margin-right:150px; margin-top:-3.5%; "
               aria-describedby="validationServer03Feedback" required></input>
            <small></small>
         </div>

         <button style="margin-left: 75%; width:13%" type="submit" class="btn btn-primary">Select</button>

      </fieldset>
   </div>
</form>

</div>

<?php include VIEW.'footer.php' ?>