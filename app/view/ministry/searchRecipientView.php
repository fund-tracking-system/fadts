<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">
      <form method="post" action="/fadts/ministry/criteriaSearchModel" name="serchByCriteria" id="form">
         <fieldset class="BackgroundFS">
            <h2>FILTER PEOPLE BY CRITERIA</h2>

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

               <div  style="margin-left:50px;">
                  <label class="inputLable"><b>Age:</b></label>
                  <input class="form-control InputOne" value=18 name="ageStart"></input>
                  <span class="inputLable LableTwo"><b>to</b></span>
                  <input class="form-control InputTwo" value=80 name="ageEnd"></input>
               </div>

               <div class="form-row" style="margin-left:50px;">
                  <label class="inputLable" for="disorder"><b>Prolonged Disorder/Disease:</b></label>
                  <select class="form-control Input" style="width:605px;margin-right:10px;" id="disorder" name="disorder">
                     <option value="" selected>Not select</option>
                     <option value="no">Without Disorder/Diease</option>
                     <option value="yes">With Disorder/Diease</option>
                  </select>
               </div>

               <div class="form-row" style="margin-left:50px;">
                  <label class="inputLable" for="CivilStatus"><b>Civil Status:</b></label>
                  <select class="form-control Input" id="civilStatus" style="width:605px;margin-right:10px;margin-left:250px;" name="civilStatus">
                     <option value="" selected>Not select</option>
                     <option value="0">Unmarried</option>
                     <option value="1">Married</option>
                  </select>
               </div>              

               
               <div style="margin-left:50px;">
                  <label class="inputLable"><b>Gross Income (Rs):</b></label>
                  <input class="form-control InputOne" name="incomeStart" value=0></input>
                  <span class="inputLable LableTwo"><b>to</b></span>
                  <input class="form-control InputTwo"style="margin-left:810px;" name="incomeEnd" value=1000000></input>
               </div>


               <div class='form-row' style="margin-left:50px;">
                  <label class="inputLable" style="margin-right:22%;"><b>Current Funds:</b></label>
                  <select class="js-example-responsive" multiple="multiple" style='top:60px; overflow:scroll;width:620px; ' id="funds" name="funds[]">
                     <?php    foreach($_SESSION['fundList'] as $fund){
                     ?>
                                 <option value="<?php echo $fund['Id']?>">
                                    <?php echo $fund['name']?>
                                 </option>
                     <?php    } 
                              unset($_SESSION['fundList']); 
                     ?>
                  </select> 
               </div>
               <input hidden disabled></input>

               <div class='form-row' style="margin-top:50px;margin-left:50px;">
                  <label class="inputLable" for="incomeType" style="margin-right:21%; margin-bottom:6%"><b>Income Type(s):</b></label>
                  <select class="js-example-responsive" multiple="multiple" style='top:60px; overflow:scroll;width:620px; ' id="incomeType" name="incomeType[]">
                     <?php    foreach($_SESSION['incomeTypes'] as $incomeType){     ?>
                                 <option value="<?php echo $incomeType['id']?>">
                                    <?php echo $incomeType['type']?>
                                 </option>
                     <?php    } 
                              unset($_SESSION['incomeTypes']); 
                     ?>
                  </select>
               </div>
               <input hidden disabled></input>

               <div class="Twobtns">
                  <button type="submit" name="submit" class='btn btn-primary signlebtn'>Search Here</button>
               </div>
            </fieldset>
         </fieldset>
      </form>

      <?php if (isset($_SESSION['personList']) && isset($_SESSION['flag']) && $_SESSION['flag'] == 14) { ?>                  
         <form>
            <fieldset class="BackgroundFS">
                  <h2>FILTERED PEOPLE LIST</h2>

                  <fieldset class="tableBar">
                     <div class="tbleMargin">
                        <table id="resultTable" class="display">
                              <thead>
                                 <tr>
                                    <th><B>NIC Number</B></th>
                                    <th><B>Name</B></th>
                                    <th><B>Address</B></th>
                                    <th><B>Contact</B></th>
                                    <!-- <th><B>View</B></th> -->
                                 </tr>
                              </thead>

                              <tbody>
                                 <?php 
                                    foreach($_SESSION['personList'] as $person){ 
                                          $pid = $person['personId'];
                                 ?>
                                 
                                 <tr>
                                    <td><B style="margin-left:30%;"><?php echo $person['nid']?></B></td>
                                    <td><B style="margin-left:30%;"><?php echo $person['name']?></B></td>
                                    <td><B style="margin-left:30%;"><?php echo $person['address']?></B></td>
                                    <td><B style="margin-left:30%;"><?php echo $person['phone']?></B></td>                                    
                                    </form>
                                 </tr>

                                 <?php    
                                    } 
                                 ?>
                              </tbody>
                        </table>
                     <div>

                     <div class='button' style="margin-top:30px;">
                        <a href="/fadts/ministry/createFundSaveModel" class="btn btn-primary" style="margin-left:20%">CONFIRM RECIPIENT LIST</a>
                     </div>
                  </fieldset>
            </fieldset>
         </form>
      <?php } ?>   
   </div>
</div>

<?php 
    //unset flag from session variables
    unset($_SESSION['flag']); 
?>


<script>
   $(document).ready(function() {
      $('#incomeType').select2();
      $('#funds').select2();

      $("#resultTable").DataTable({
         dom: 'Bfrtip',
         buttons: ['print', 'pdf']
      });
   });
</script>

<?php include VIEW.'includes/footer.php' ?>