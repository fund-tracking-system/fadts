<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php if(isset($_SESSION['personDetails'])){
         $personDetails = $_SESSION['personDetails']; 
      }
      // else{
      //    header("Location:/fadts/village/searchPeople");
      //    exit();
      // }
      if(isset($_SESSION['majorFund'])) $majorFund = $_SESSION['majorFund'];
      if(isset($_SESSION['otherFund'])) $otherFund = $_SESSION['otherFund'];

      unset($_SESSION['personDetails'],$_SESSION['majorFund'],$_SESSION['otherFund']) 
?>


<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">
      <form>
         <fieldset class="BackgroundFS">

            <h2>PERSON DETAILS</h2>

            <fieldset class="searchBar">

               <div class="form-row">
                  <label for="name " class="inputLable"><b>Full Name :</b></label>
                  <input class="form-control Input" id="name" name="name" readonly
                     value="<?php echo isset($personDetails) ? $personDetails['name']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label for="nic" class="inputLable"><b>NIC Number :</b></label>
                  <input class="form-control Input" id="nic" name="nic" readonly
                     value="<?php echo isset($personDetails) ? $personDetails['nid']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label for="address" class="inputLable"><b>Address :</b></label>
                  <input class="form-control Input" id="address" name="address" readonly
                     value="<?php echo isset($personDetails) ? $personDetails['address']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label for="birth-date" class="inputLable"><b>Birth Date :</b></label>
                  <input class="form-control Input" id='birthDate' name="birthDate" readonly
                     value="<?php echo isset($personDetails) ? $personDetails['birthDate']:"" ?>" readonly></input>
               </div>

               <!-- <div class="form-row">
                  <label for="familyHead" class="inputLable"><b>Family Head :</b></label>
                  <input class="form-control Input" id="familyHead" name="familyHead"
                     value="<?php //echo isset($personDetails) ? $personDetails['birthDate']:"" ?>" readonly></input>
               </div> -->

               <div class="form-row">
                  <label class="inputLable" for="disordered"><b>Prolonged Disorder/Disease :</b></label>
                  <input class="form-control Input" id="disordered" name="disordered" readonly
                     value="<?php echo isset($personDetails) ? ( ($personDetails['disordered']=="yes") ? "With Disorder/Diease":"Without Disorder/Diease" ) :"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="CivilStatus"><b>Civil status :</b></label>
                  <input class="form-control Input" id="civilStatus" name="civilStatus" readonly
                     value="<?php echo isset($personDetails) ? ( ($personDetails['civilStatus']=="0") ? "Unmarried":"Married" ) :"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="incomeType"><b>Monthly Income (Rs.) :</b></label>
                  <input class="form-control Input" id="incomeType" name="incomeType" readonly
                     value="<?php echo isset($personDetails) ? $personDetails['monthlyIncome']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="incomeType"><b>Income Type :</b></label>
                  <input class="form-control Input" id="incomeType" name="incomeType" readonly
                     value="<?php echo isset($personDetails) ? $personDetails['job']:"" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="majorFunds"><b>Major Fund :</b></label>
                  <input class="form-control Input" id="majorFunds" name="majorFunds" readonly
                     value="<?php echo isset($majorFund) ? $majorFund['name']:"No Fund" ?>"></input>
               </div>

               <div class="form-row">
                  <label class="inputLable" for="majorFunds"><b>Other Funds :</b></label>
                  <fieldset class="tableBar2">
                  <div class="tableMargin2">
                     <table id="resultTable" class="display" style="table-layout:fixed">
                        <thead>
                           <tr>
                              <th><B>Fund Name </B></th>
                              <th><B>Amount Per-Person(Rs.)</B></th>
                              <th><B>Status</B></th>
                           </tr>
                        </thead>

                        <tbody>
                           <?php if(isset($otherFund)){ ?>
                           <tr>
                              <td><B><?php echo $otherFund['name']?></B></td>
                              <td><B><?php echo $otherFund['amountPerPerson']?></B></td>
                              <td><B><?php echo $otherFund['deliveryStatus']=="1"?"Delivered":"Pending" ?></B></td>
                           </tr>
                           <?php } ?>
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