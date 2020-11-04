<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">

   <div class="SearchByCriteriaform1">

      <form method="post" action="/fadts/divisional/nicSearchModel" id="fundReleaseSearch">

         <fieldset class="BackgroundFS">

            <h2>ALTERNATE FUND RELEASE</h2>

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
               
               <?php if($_GET['error']=='succsess'){ 

                        // foreach ($_SESSION['results'] as $row){
                        //    echo $row[0]."<br>";
                        // }
                        // exit();
               ?>
               <table id="resultTable" class="display nowrap">
                  <thead>
                  <tr>
                     <th><B>Fund Name</B></th>
                     <th><B>Amount</B></th>
                     <th><B>Action</B></th>
                  </tr>
                  </thead>

                  <?php foreach($_SESSION['results'] as $fund){?>   

                  <tbody>
                  <tr>
                     <td><?php echo $fund[1] ?></td>
                     <td><?php echo $fund[2] ?></td>
                     <td><a href="/fadts/divisional/fundReleaseModel?fundId=<?php echo $fund[0]; ?>" ><B>Release</B></a></td>
                  </tr>
                  </tbody>

                  <?php } ?>

                  <tfoot>
                  <tr>
                     <th><B>Fund Name</B></th>
                     <th><B>Amount</B></th>
                     <th><B>Action</B></th>
                  </tr>
                  </tfoot>

               </table>

               <?php } ?>

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