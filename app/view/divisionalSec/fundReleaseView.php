<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">

   <div class="SearchByCriteriaform1">

      <form method="post" name="nicSearch" action="/fadts/divisional/nicSearchModel?view=fundRelease" id="fundReleaseSearch">

         <fieldset class="BackgroundFS">

            <h2>ALTERNATE FUND RELEASE</h2>

            <fieldset class="searchBar">
            <?php 
               if(isset($_GET['searcherror'])){
         
                  $error = $_GET['searcherror'];
                  if($error == "db_conn_err"){
                     echo '<div class="alert alert-danger" role="alert">Database connection error! Please try again</div>';
                  }
                  if($error == "wrong_region"){
                     echo '<div class="alert alert-danger" role="alert">You can\'t view other regions data!</div>';
                  }
                  if($error == "wrong_nid_or_dead"){
                     echo '<div class="alert alert-danger" role="alert">This NIC is wrong or this person does not exist!</div>';
                  }
                  if($error == "no_records"){
                     echo '<div class="alert alert-danger" role="alert">No records found!</div>';
                  }        
               }   
            ?> 
               <div class="form-row ">

                  <label for="NID-number" class="searchBarLable"><b>NIC Number :</b></label>

                  <input class="form-control searchInput" id="nic" placeholder="Type NIC here"
                     name="nic"></input>

                  <button style="position:center" type="submit" name="submit" class="btn btn-primary btnNav">Search</button>

               </div>
            </fieldset>

         </fieldset>

      </form>

      <form>
         <fieldset class="BackgroundFS">
            
            <div class="tbleMargin">
               
               <?php if(isset($_SESSION['results'])){ ?>
               
               <h3>Search results :</h3></br></br>

               <table id="resultTable" class="display nowrap">
                  <thead>
                  <tr>
                     <th><B>Fund Name</B></th>
                     <th><B>Amount</B></th>
                     <th><B>Action</B></th>
                  </tr>
                  </thead>

                  <?php foreach($_SESSION['results'] as $fund){
                     $entryId = $fund[0];
                  ?>   

                  <tbody>
                  <tr> 
                     <td><?php echo $fund[1] ?></td>
                     <td><?php echo $fund[2] ?></td>
                     <td><a class="btn btn-primary" href="/fadts/divisional/fundReleaseModel?entryId=<?php echo $entryId ?>" ><B>Release</B></a></td>
                  </tr>
                  </tbody>

                  <?php } 
                        unset($_SESSION['results']);
                  ?>
               
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