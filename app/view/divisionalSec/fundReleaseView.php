<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">

   <div class="SearchByCriteriaform1">

      <form method="post" action="/fadts/divisional/nicSearchModel" id="fundReleaseSearch">

         <fieldset class="BackgroundFS">

            <h2>ALTERNATIVE FUND RELEASE</h2>

            <fieldset class="searchBar">
               <div class="form-row ">
                  <label for="NID-number" class="searchBarLable"><b>NIC Number:</b></label>
                  <input class="form-control searchInput" id='NID-number' placeholder="Type NIC here"
                     name="nic"></input>
                  <button type="submit" name="nicSubmit" class="btn btn-primary btnNav">Search</button>
               </div>
            </fieldset>

         </fieldset>

      </form>

      <form>
         <fieldset class=" BackgroundFS">
            <div class="tbleMargin">

               <table id="resultTable" class="display nowrap">
                  <thead>
                  <tr>
                     <th><B>Fund Name</B></th>
                     <th><B>Amount</B></th>
                     <th><B>Action</B></th>
                  </tr>
                  </thead>

                  <tfoot>
                  <tr>
                     <th><B>Fund Name</B></th>
                     <th><B>Amount</B></th>
                     <th><B>Action</B></th>
                  </tr>
                  </tfoot>

                  <tr>
                     <td>Alfreds Futterkiste</td>
                     <td>Disabled </td>
                     <td><button type="submit" name="release" class="btn btn-primary">Release</button></td>
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

<script>
$(document).ready(function() {
   $("#resultTable").DataTable();
});
</script>

<?php include VIEW.'includes/footer.php' ?>