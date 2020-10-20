<?php include VIEW.'header.php' ?>

<?php include VIEW.'ministry/sidebar.php' ?>
<div class="all_bacground_clor">
   <div>
      <form method="post" action="">
         <div class="SearchByCriteriaform1">
            <fieldset style="background-color:#fffef4; height:350px; overflow:auto">
               <h2 style="margin-bottom:50px;">Add People Fund Eligible list </h2>
               <fieldset style="padding-top:15px; margin-right:50px; margin-left:20px;border-radius:10px; ">
                  <div class="form-row" style="margin-top:5%;">
                     <label for="select-region" style="margin-left:200px;margin-bottom:18px;"><b>Select Predefined
                           Fund:</b></label>
                     <select name="select-region" id="select-region"
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
      <fieldset style="background-color:#fffef4;">
         <form>
            <h2 style="margin-bottom:50px; margin-top:10px;"> Manually Created Fund</h2>
            <table style="margin-bottom:20px;">
               <tr>
                  <th><b>Name Of Fund</b></th>
                  <th><b>Created Date</b></th>
                  <th><b>Description</b></th>
                  <th><b>Add To the List</b></th>
               </tr>
               <tr>
                  <td>Covid-19 5000</td>
                  <td>2020 feb 19</td>
                  <td>Covid curefew areas low gross income peoples</td>
                  <td><button class="btn btn-primary">Select</button></td>
               </tr>
               <tr>
                  <td>Covid-19 5000</td>
                  <td>2020 feb 19</td>
                  <td>Covid curefew areas low gross income peoples</td>
                  <td><button class="btn btn-primary">Select</button></td>
               </tr>
            </table>
         </form>
      </fieldset>
   </div>
</div>
<?php include VIEW.'footer.php'?>