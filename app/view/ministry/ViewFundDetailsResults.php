<?php include VIEW.'includes/header.php'?>
<?php include VIEW.'includes/sidebar.php'?>

<div class="all_bacground_clor">

<div class="SearchByCriteriaform1">

      <form method="post" action="" id="form">
         

      <fieldset class="BackgroundFS">

               <h2>Search Results By Fund</h2>

               <div class="form-row">
                  <div class="flx">
                     <label class='LblflxOne' for="Asimate-No"><b>Astimate Peoples:</b></label>
                     <input class="form-control flxInputOne" id="astimatePeople"
                        value="amount of peoples who Nominated" readonly></input>


                     <label class=' LblflxTwo' for="number"><b>Dlivered Peoples:</b></label>
                     <input class="form-control" id='deleverdPeoples'
                        style="margin-left:50px;margin-bottom:20px;margin-right:150px;"
                        value="amount of peoples who Recived" readonly></input>
                  </div>
               </div>


               <div class="form-row">
                  <div class="flx">
                     <label class='LblflxOne' for="number"><b>Fund
                           Amount:</b></label>
                     <input class="form-control flxInputOne"id='F-amount'
                        value="amount of allocated money" readonly></input>




                     <label class=' LblflxTwo' for="number"><b>Distributed amount:</b></label>
                     <input class="form-control flxInputTwo" id='D-amount'
                        value="amount of Distributed money" readonly></input>
                  </div>
               </div>

            </fieldset>
      </form>




      <form>

      <fieldset class="BackgroundFS">

        
            <h3 class="fntStyle"><b> Fund Eligible List</b></h2>
               <div class="tbleMargin">
                  <table>
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
                  </fieldset>
         </form>
  





   </div>
</div>
<?php include VIEW.'includes/footer.php' ?>