
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
      <?php if(isset($_SESSION['result'])){ 
               $funds=$_SESSION['result'];
               unset($_SESSION['result']);
               foreach($funds as $fund){   ?>      
               <form method="post" action="/fadts/village/......" id="formAddOfficer">
                     <fieldset class="BackgroundFS" style="margin-top:30px;">

                        <fieldset class="searchBar"> 

                        <div>
                           <label class="inputLable"><b>Fund Name</b></label>
                           <input class="form-control InputOness" name="fname" value="govi setha" ></input>
                           
                           <label class="inputLable" style="margin-left:560px;"><b>OTP</b></label>
                           <input class="form-control InputOnes"style="" name="otp" value=0 ></input>
                           <button type="submit"  style="margin-left:900px;margin-top:-8px;"class="btn btn-primary">Request OTP</button>

                        </div>

                        <div  class="form-row" style="margin-bottom:50px;margin-left:-650px;">
                     
                        <span class="inputLable LableTwo"style="margin-top:50px;margin-right:150px"><b>Amount (Rs):</b></span>
                           <input class="form-control InputTwo" name="amount" value=1000000 style="width:300px;"></input>
                        
                        </div>
                        

                        <div class="Twobtn">
                           <button type="submit" class="btn btn-primary">Confirm Recieving</button>
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