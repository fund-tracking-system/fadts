<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>

<div class="all_bacground_clor">>


   <form method="post" style=margin-top:-15px;>
      <div class="SearchByCriteriaform1 ">
         <fieldset style="background-color:#fffef4;">
            <h2 style="margin-bottom:10%; margin-bottom:130px;margin-top:60px;"> Disaster details</h2>
            <div class="form-row" style="margin-top:-40px;">
               <label for="select-disaster" style="margin-left:230px;margin-bottom:38px;"><b>Select
                     Disaster:</b></label>
               <select name="select-disaster" id="select-disaster" class="form-control"
                  style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
               </select>
            </div>
            <div class="form-row" style="margin-top:40px;">
               <<label for="select-disaster" style="margin-left:230px;margin-bottom:25px;"><b>Disaster Date:</b></label>
                  <input class="form-control"
                     style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;"></input>


            </div>
            <div class="form-row" style="margin-top:5%;">
               <label for="select-region" style="margin-left:230px;margin-bottom:18px;"><b>Select Region:</b></label>
               <select name="select-region" id="select-region" class="form-control"
                  style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
               </select>
            </div>
            <button class='btn btn-primary'
               style=" margin-left: 35%;height: 30px; border-radius: 5px; padding-bottom:40px; margin-bottom:5%; margin-top:5%;">View
               Select Disaster</button>
         </fieldset>



   </form>

</div>

<?php include VIEW.'footer.php' ?>