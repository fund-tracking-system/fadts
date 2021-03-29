<?php //if(isset($_SESSION['results'])) print_r($_SESSION['results']); exit(); ?>
<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1 ">

      <form method="post" name="nicSearch" action="/fadts/village/nicSearchModel?view=fundRelease"
         id="fundReleaseSearch">

         <fieldset class="BackgroundFS">

            <h2>FUND RELEASE</h2>

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
                  if($error == "release_success"){
                     echo '<div class="alert alert-success" role="alert">Fund Release Successfull!</div>';
                  }        
               }   
            ?>
               <div class="form-row ">

                  <label for="NID-number" class="searchBarLable"><b>NIC Number :</b></label>

                  <input class="form-control searchInput" id="nic" placeholder="Type NIC here" name="nic"
                     value="<?php echo isset($_GET['nic'])? $_GET['nic']:""; ?>">
                  </input>

                  <button style="position:center;" type="submit" name="submit"
                     class="btn btn-primary btnNav">Search</button>

               </div>
            </fieldset>
         </fieldset>
      </form>

      <?php 
         if(isset($_SESSION['result']) && isset($_SESSION['result'])){ 
            $funds=$_SESSION['result'];
            $phones=$_SESSION['phones'];
            $nic=$_GET['nic'];
            unset($_SESSION['result'],$_SESSION['phones']);

            foreach($funds as $fund){   ?>

      <form method="post"
         action="/fadts/village/fundReleaseModel?view=fundRelease<?php echo '&entryId='.$fund['entryId'].'&nic='.$nic ?>"
         id="fundRelease">

         <fieldset class="BackgroundFS" style="margin-top:30px;">
            <fieldset class="searchBar">

               <?php 
                  if(isset($_GET['otp'])&&isset($_GET['entryId'])){
         
                  $error = $_GET['otp'];
                  $entryId =$_GET['entryId'];
                  $error = $_GET['searcherror'];
      
                  if(($error == "otp_resend") && ($entryId==$fund['entryId'])){
                     echo '<div class="alert alert-danger" role="alert">Somthing is wrong.Request OTP again!</div>';
                  }
                  if(($error == "otp_resend") && ($entryId==$fund['entryId'])){
                     echo '<div class="alert alert-success" role="alert">Somthing is wrong.Request OTP again!</div>';
                  }
                        
               }   
            ?>

               <div>
                  <label class="inputLable"><b>Fund Name :</b></label>
                  <input class="form-control InputOness" name="fname" disabled
                     value="<?php echo $fund['name'];?>"></input>

                  <label class="inputLable" style="margin-left:510px;" for="CivilStatus"><b>Phone Number :</b></label>

                  <select class="form-control InputOnes" style="margin-left:680px;width:300px;" id="numbers"
                     name="phone">

                     <option selected value="<?php echo isset($phones['phone1'])? $phones['phone1']: ""; ?>">
                        <?php echo isset($phones['phone1'])? $phones['phone1']: ""; ?>
                     </option>

                     <option value="<?php echo isset($phones['phone2'])? $phones['phone2']: ""; ?>"
                        <?php echo isset($phones['phone2'])? "":"hidden"; ?>>
                        <?php echo isset($phones['phone2'])? $phones['phone2']: ""; ?>
                     </option>

                     <option value="<?php echo isset($phones['trusteephone1'])? $phones['trusteephone1']: ""; ?>">
                        <?php echo isset($phones['trusteephone1'])? $phones['trusteephone1']: ""; ?>(trustee)
                     </option>

                     <option value="<?php echo isset($phones['trusteephone2'])? $phones['trusteephone2']: ""; ?>"
                        <?php echo isset($phones['phone2'])? "":"hidden"; ?>>
                        <?php echo isset($phones['trusteephone2'])? $phones['trusteephone2']: ""; ?>(trustee)
                     </option>
                  </select>
               </div>
               <br>

               <div style="margin-top: 50px;">
                  <label class="inputLable"><b>Amount (Rs):</b></label>
                  <input class="form-control InputOness " name="fname" disabled
                     value="<?php echo $fund['amountPerPerson'];?>"></input>

                  <label class="inputLable" style="margin-left:510px;" for="OTP"><b>OTP :</b></label>
                  <input class="form-control InputOnes " style="width:120px;margin-left:680px;" name="otp"></input>

                  <button type="submit" name="otpRequest" style="margin-left:860px;margin-top:-8px;background:brown"
                     class="btn btn-primary">Request OTP</button>

               </div>
               <div class="Twobtns" style="margin-left:430px;margin-top:30px;margin-bottom:-8px;">
                  <button type="submit" name="confirm" class="btn btn-primary">Confirm Recieving</button>
               </div>

            </fieldset>
         </fieldset>
      </form>

      <?php    }   
            }
      ?>
   </div>
</div>




<?php include VIEW.'includes/footer.php'?>