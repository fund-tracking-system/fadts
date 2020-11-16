<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php 
      if(isset($_GET['disasterid'])){$disasterId = $_GET['disasterid']; }
      if(isset($_SESSION['results'])){
         $result = $_SESSION['results'];
         unset($_SESSION['results']);
      }        
?>

<div class="all_bacground_clor">

   <div class="SearchByCriteriaform1">

      <form method="post" name="nicSearch" action="/fadts/village/nicSearchModel?view=victimSelect"
         id="fundReleaseSearch">

         <fieldset class="BackgroundFS">

            <h2>ADD VICTIM</h2>

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

                  <input class="form-control searchInput" id="nic" placeholder="Type NIC here" name="nic" value="<?php echo isset($result) ? $result['nic'] : "" ?>"></input>

                  <button style="position:center" type="submit" name="submit"
                     class="btn btn-primary btnNav">Search</button>

               </div>
            </fieldset>

         </fieldset>

      </form>

      <form action="/fadts/village/victimSelectModel? <?php echo isset($disasterId) ? $disasterId : "" ?>">
         <fieldset class="BackgroundFS">
            <?php if(isset($result)){ ?>
            
            <fieldset class="searchBar">
         
               <h3>Add Details :</h3></br></br>

               <div class="form-row">
                  <label for="person-name" class="inputLable"><b>Person Name :</b></label>
                  <input class="form-control Input" id="pname" name="pname" 
                  value="<?php echo $result['personName'] ?>" readonly></input>
               </div>
               <div><input name="personId" value="<?php echo $result['personId'] ?>"></input></div>

               <div class="form-row">
                  <label for="total-damage" class="inputLable" ><b>Total Damage :</b></label>
                  <input class="form-control Input" id="totalDamage" name="totalDamage"></input>
               </div>

               <div class="form-row">
                  <label for="Location" class="inputLable"><b>Location :</b></label>
                  <input class="form-control Input" id="location" name="location"></input>
               </div>

               <div class="form-row">
                  <label for="description" class="inputLable"><b>Description :</b></label>
                  <textarea class="form-control Input txtWidth " id="description" name="description">  </textarea>
               </div>

               <div class="Twobtn">
                  <button type="submit" name="submit" class="btn btn-primary" >Confirm and Add
                  </button>
               </div>
            
            </fieldset>
                 
            <?php } ?>

         </fieldset>

      </form>
   </div>
</div>

<script>
$(document).ready(function() {
   $("#resultTable").DataTable();
});
</script>

<?php include VIEW.'includes/footer.php' ?>