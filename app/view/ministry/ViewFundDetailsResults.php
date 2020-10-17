<?php include VIEW.'includes/header.php'?>
<?php include VIEW.'includes/sidebar.php'?>

<div class="all_bacground_clor">

   <div>

      <form method="post" action="" id="form">
         <div class="SearchByCriteriaform1">

            <fieldset style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px;padding-top:20px; ">
               <h2 style="margin-bottom:50px;">Search Results By Fund</h2>

               <div class="form-row">
                  <div style="display:flex;">
                     <label class='phone-number-label' for="pnumber"
                        style="margin-left:70px;margin-bottom:18px;"><b>Astimate Peoples:</b></label>
                     <input class="form-control" id="astimatePeople"
                        style="margin-left:35px;margin-bottom:20px;margin-right:150px;"
                        value="amount of peoples who Nominated" readonly></input>




                     <label class='phone-number-label' for="number"
                        style="margin-left:70px;margin-bottom:18px;"><b>Dlivered Peoples:</b></label>
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
                        style="margin-left:35px;margin-bottom:20px;margin-right:150px;"
                        value="amount of allocated money" readonly></input>




                     <label class='phone-number-label' for="number"
                        style="margin-left:70px;margin-bottom:18px;"><b>Distributed amount:</b></label>
                     <input class="form-control" id='D-amount'
                        style="margin-left:35px;margin-bottom:20px;margin-right:150px;"
                        value="amount of Distributed money" readonly></input>
                  </div>
               </div>

            </fieldset>
      </form>

      <fieldset style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px; overflow:auto;">
         <form>
            <h3 style="margin-bottom:30px; margin-top:10px; margin-left:30px;"><b> Fund Eligible List</b></h2>
               <div style="margin-left:30px; margin-right:30px;">
                  <table style="margin-bottom:20px;">
                     <tr>
                        <th><b>Name </b></th>
                        <th><b>NID</b></th>
                        <th><b>Address</b></th>
                        <th><b>Region</th>
                     </tr>
                     <tr>
                        <td>Cchall</td>
                        <td>2020 19</td>
                        <td>Covid curefew areas low gross income peoples</td>
                        <td>kakjhda</td>
                     </tr>
                     <tr>
                        <td>Covid</td>
                        <td>202019</td>
                        <td>Covid curefew areas low gross income peoples</td>
                        <td>sada</td>
                     </tr>

                  </table>

         </form>
      </fieldset>





   </div>
</div>
<?php include VIEW.'includes/footer.php' ?>