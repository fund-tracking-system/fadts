<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php if(isset($_SESSION['updateResults'])) $result = $_SESSION['updateResults']; 
      unset($_SESSION['updateResults'],$_SESSION['personRegion']) ?>


<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">
      <form>
         <fieldset class="BackgroundFS">

            <h2>PERSON DETAILS</h2>

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
                  <input class="form-control Input" id="address" name="address" readonly
                     value="<?php echo isset($result) ? $result['address']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label for="birth-date" class="inputLable"><b>Birth Date :</b></label>
                  <input class="form-control Input" id='birthDate' name="birthDate" readonly
                     value="<?php echo isset($result) ? $result['birthDate']:"" ?>" readonly></input>
               </div>

               <div class="form-row">
                  <label for="familyHead" class="inputLable"><b>Family Head :</b></label>
                  <input class="form-control Input" id="familyHead" name="familyHead"
                     value="<?php echo isset($result) ? $result['birthDate']:"" ?>" readonly></input>
               </div>

               <div class="form-row">
                  <label for="monthlyIncome" class="inputLable"><b>Monthly Income (Rs.) :</b></label>
                  <input class="form-control Input" id="monthlyIncome" name="monthlyIncome" readonly
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="disordered"><b>Prolonged Disorder/Disease :</b></label>
                  <input class="form-control Input" id="disordered" name="disordered" readonly
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="CivilStatus"><b>Civil status :</b></label>
                  <input class="form-control Input" id="civilStatus" name="civilStatus" readonly
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="incomeType"><b>Income Type :</b></label>
                  <input class="form-control Input" id="incomeType" name="incomeType" readonly
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="incomeType"><b>Income Type :</b></label>
                  <input class="form-control Input" id="incomeType" name="incomeType" readonly
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="majorFunds"><b>Major Funds :</b></label>
                  <textarea class="form-control Input" id="majorFunds" name="majorFunds" readonly
                     value="<?php echo isset($result) ? $result['monthlyIncome']:"" ?>"></textarea>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="majorFunds"><b>Other Funds :</b></label>
                  <fieldset class="tableBar2">
                  <div class="tableMargin2">
                     <table id="resultTable" class="display" style="table-layout:fixed">
                        <thead>
                           <tr>
                              <th><B>Fund Name </B></th>
                              <th><B>Amount Per-Person(Rs)</B></th>
                              <th><B>Status</B></th>
                           </tr>
                        </thead>

                        <tbody>

                           <tr>
                              <td><B>Corona Fund(May)</B></td>
                              <td><B>5000.00</B></td>
                              <td><B>Recieved</B></td>
                           </tr>
                           <tr>
                              <td><B>Drought Fund(August)</B></td>
                              <td><B>3500.00</B></td>
                              <td><B>Pending</B></td>
                           </tr>

                        </tbody>
                     </table>
                     <div>
               </fieldset>
               </div>

               


               <!-- <div class="Twobtn">
                  <button type="submit" name="submit" class="btn btn-primary">Back to Search</button>
               </div> -->

            </fieldset>
         </fieldset>

      </form>

      <!-- <fieldset class="tableBar">
                <div class="tbleMargin">

                    
                 <div>
                 </fieldset>                
            </fieldset> -->

   </div>
</div>

<script>
$(document).ready(function() {
   $("#resultTable").DataTable();
});
</script>

<?php include VIEW.'includes/footer.php' ?>