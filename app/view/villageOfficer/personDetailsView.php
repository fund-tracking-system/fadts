<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php if(isset($_SESSION['updateResults'])) $result = $_SESSION['updateResults']; 
      unset($_SESSION['updateResults'],$_SESSION['personRegion']) ?>


<div class="all_bacground_clor">
<div class="SearchByCriteriaform1">
      <form>
         <fieldset class="BackgroundFS">
            
         <h2>Person Details Form</h2>

            <fieldset class="searchBar">

               <div class="form-row">
                  <label for="name " class="inputLable"><b>Full Name :</b></label>
                  <input class="form-control Input" id="name" name="name" readonly
                     value="<?php echo isset($result) ? $result['name']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label for="nic" class="inputLable"><b>NIC Number :</b></label>
                  <input class="form-control Input" id="nic" name="nic" readonly
                     value="<?php echo isset($result) ? $result['name']:"" ?>"></input>
               </div>   

               <div class="form-row">
                  <label for="address" class="inputLable"><b>Address :</b></label>
                  <input class="form-control Input" id="address" name="address" 
                     value="<?php echo isset($result) ? $result['address']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label for="birth-date" class="inputLable"><b>Birth Date :</b></label>
                  <input class="form-control Input" id='birthDate' name="birthDate"
                     value="<?php echo isset($result) ? $result['birthDate']:"" ?>" readonly></input>
               </div>

               <div class="form-row">
                  <label for="familyHead" class="inputLable"><b>Family Head :</b></label>
                  <input class="form-control Input" id="familyHead" name="familyHead"
                     value="<?php echo isset($result) ? $result['birthDate']:"" ?>" readonly></input>
               </div>

               <div class="form-row">
                  <label for="monthlyIncome" class="inputLable"><b>Monthly Income (Rs.) :</b></label>
                  <input class="form-control Input" id="monthlyIncome" name="monthlyIncome" 
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></input>
               </div>
                
               <div class="form-row">
                  <label class="inputLable" for="disordered"><b>Prolonged Disorder/Disease :</b></label>
                  <input class="form-control Input" id="disordered" name="disordered" 
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="CivilStatus"><b>Civil status :</b></label>
                  <input class="form-control Input" id="civilStatus" name="civilStatus" 
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="incomeType"><b>Income Type :</b></label>
                  <input class="form-control Input" id="incomeType" name="incomeType" 
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="incomeType"><b>Income Type :</b></label>
                  <input class="form-control Input" id="incomeType" name="incomeType" 
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></input>
               </div>

               <div class="Twobtn">
                  <button type="submit" name="submit" class="btn btn-primary" 
                   >Back to Search</button>

               </div>

            </fieldset>
         </fieldset>

      </form>

</div>
</div>


<?php include VIEW.'includes/footer.php' ?>