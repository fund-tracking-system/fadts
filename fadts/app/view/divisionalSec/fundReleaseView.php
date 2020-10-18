<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div style="background-color:#ced4da">

   <div>
      <form class="SearchByCriteriaform1">
         <fieldset style="background-color:#fffef4;">
            <h2 style="margin-bottom:50px;">Alternative Fund Relese</h2>
            <fieldset style="padding-top:15px; margin-right:50px; margin-left:20px;border-radius:10px; ">
               <div class="form-row " style="display: flex;">
                  <div style="display: flex; ">
                     <label for="NID-number"
                        style="margin-left:170px;margin-bottom:-20px;margin-top:5px;"><b>NID Number:</b></label>
                     <input class="form-control " id='NID-number'
                        style="margin-left:50px;margin-bottom:20px;margin-right:550px; padding-right:100px;" placeholder="9 7 2 8 1 0 1 7 7 v"></input>
                     <div class='button '>

                        <button type="submit" class='submit-button btn btn-primary btn btn-primary'
                           style="margin-left:-500px;margin-top:0px; padding-bottom:10px;">Search</button>
                     </div>
                  </div>
               </div>
            </fieldset>
      </form>
      <form>
         <div class='table'>
             <fieldset style="padding: 35px 50px; margin-top:50px;">
               <table>

                  <tr>
                     <th><B>Fund Name</B></th>
                     <th><B>Amount</B></th>
                     <th><B>Release</B></th>
                  </tr>
                  <tr>
                     <td>Alfreds Futterkiste</td>
                     <td>Disabled </td>
                     <td><button type="submit" class="btn btn-primary">Release</button></td>
                  </tr>
                  <tr>
                     <td>Centro comercial Moctezuma</td>
                     <td>covid 500</td>
                     <td><button type="submit" class="btn btn-primary">Release</button></td>
                  </tr>
                  <tr>
                     <td>Ernst Handel</td>
                     <td> phora sahanadara</td>
                     <td><button type="submit" class="btn btn-primary">Release</button></td>
                  </tr>
                  <tr>
                     <td>Island Trading</td>
                     <td>govi Vishrama wetup</td>
                     <td><button type="submit" class="btn btn-primary">Release</button></td>
                  </tr>
                  
                  </tr>
               </table>
            </fieldset>
         </div>
      </form>

   </div>


</div>
<?php include VIEW.'includes/footer.php' ?>