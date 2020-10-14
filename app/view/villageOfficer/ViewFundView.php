<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>

<div>
   <div class='SearchByCriteriaform1'>

      <form class="form">

         <fieldset style="background-color:#fffef4;">
            <h2 style="color:black ; margin-bottom:100px;padding-top:10px; margin-top:50px;">View Fund Details
            </h2>
            <div class="form-row " style="margin-bottom:30px;">
               <label for="disaster" style="margin-left:70px;margin-bottom:18px;"><b>Fund Type:</b></label>
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
               <label for="disaster-name" style="margin-left:70px;margin-bottom:18px;"><b>Fund Name:</b></label>
               <input class="form-control" id="disaster-name"
                  style="margin-left:200px;margin-bottom:60px;margin-right:150px; margin-top:-3.5%;"
                  aria-describedby="validationServer03Feedback" required></input>
            </div>
            <div class="form-row">
               <label for="date" style="margin-left:70px;margin-bottom:18px;"><b>Created Date:</b></label>
               <input placeholder="YYYY/MM/DD" class="form-control" id='date'
                  style="margin-left:200px;margin-bottom:60px;margin-right:150px; margin-top:-3.5%; "
                  aria-describedby="validationServer03Feedback" required></input>
               <small></small>
            </div>

            <button style="margin-left: 75%; width:13%;" type="submit" class="btn btn-primary">Select</button>



      </form>

      
      <form method="post" action="" id="form">

         <fieldset style="background-color:#fffef4; margin-top:50px;">

            <h2 style="margin-bottom:50px;">View Fund</h2>

            <div class="form-row">
               <div style="display:flex;">
                  <label class='phone-number-label' for="pnumber"
                     style="margin-left:70px;margin-bottom:18px;"><b>Estimate
                        People:</b></label>
                  <input class="form-control" style="margin-left:35px;margin-bottom:20px;margin-right:150px;"
                     value="amount of peoples who Nominated" readonly></input>




                  <label class='phone-number-label' for="number"
                     style="margin-left:70px;margin-bottom:18px;"><b>Dlivered
                        People:</b></label>
                  <input class="form-control" id='deleverdPeoples'
                     style="margin-left:50px;margin-bottom:20px;margin-right:150px;"
                     value="amount of peoples who Recived" readonly></input>
               </div>
            </div>
            <div class="form-row">
               <div style="display:flex;">
                  <label class='phone-number-label' for="number" style="margin-left:70px;margin-bottom:18px;"><b>Fund
                        Amount:</b></label>
                  <input class="form-control" id='F-amount'
                     style="margin-left:35px;margin-bottom:20px;margin-right:150px;" value="amount of allocated money"
                     readonly></input>




                  <label class='phone-number-label' for="number"
                     style="margin-left:70px;margin-bottom:18px;"><b>Distributed amount:</b></label>
                  <input class="form-control" id='D-amount'
                     style="margin-left:35px;margin-bottom:20px;margin-right:150px;" value="amount of Distributed money"
                     readonly></input>
               </div>

         </fieldset>








         <h3 style="margin-bottom:30px; margin-top:10px; margin-left:30px;"><b> Dilivered person List</b></h2>
            <div style="margin-left:30px; margin-right:30px;">
               <table style="margin-bottom:20px;">
                  <tr>
                     <th><b>NID </b></th>
                     <th><b>Name</b></th>
                     <th><b>Amount</b></th>
                     <th><b>Diliver Status</th>
                  </tr>
                  <tr>
                     <td>99687686</td>
                     <td>2020 19</td>
                     <td></td>
                     <td>Diliverd</td>
                  </tr>
                  <tr>
                     <td>Covid</td>
                     <td>202019</td>
                     <td></td>
                     <td>Dilivered</td>
                  </tr>

               </table>

      </form>
      </fieldset>

   </div>
</div>

<?php include VIEW.'footer.php' ?>