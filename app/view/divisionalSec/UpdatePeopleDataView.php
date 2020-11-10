<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">



      <form method="post" action="" id="form">
         <fieldset class="BackgroundFS">
            <h2>UPDATE PEOPLE DATA</h2>
            <fieldset class="searchBar">
               <div class="form-row " >
                  <label for="NID-number" class="searchBarLable"><b>NIC Number :</b></label>
                  <input class="form-control searchInput" id='NID-number' placeholder="Type here NIC to find person" name="NID"></input>
                  <button type="submit" class="btn btn-primary btnNav">Search</button>
               </div>
            </fieldset>
         </fieldset>
      </form>




      <form>
         <fieldset class="BackgroundFS">
            <!-- <h2>UPDATE PEOPLE DATA</h2> -->


            <fieldset class="searchBar">
               <div class="form-row">
                  <label for="name " class="inputLable"><b>Full Name</b></label>
                  <input class="form-control Input" id="name" name="name" value="name display only" readonly></input>
               </div>



               <div class="form-row">
                  <label for="Address" class="inputLable"><b>Address</b></label>
                  <input class="form-control Input" id="address" name="address"
                     placeholder="Opatha,ganegoda,Elptye,Galle"></input>
               </div>


               <div class="form-row">
                  <label for="birth-date" class="inputLable"><b>Birth Date</b></label>
                  <input class="form-control Input" id='birthDate' name="birthDate" value="YYYY/MM/DD"
                     readonly></input>
                  <small> </small>
               </div>
               <div class="form-row">
                  <label for="birthNO" class="inputLable"><b>Birth Certificate No</b></label>
                  <input class="form-control Input" id='birthvertifiacateNo' name="birthCertificateNo"
                     readonly></input>
               </div>


               <div class="form-row">
                  <label for="tnid" class="inputLable"><b>Region :</b></label>

                  <?php

                  require 'connection.php'; 

                  $region = $_SESSION['region'];
                                 
                  $rgn = "SELECT regionid,superRegion,name FROM region WHERE level=4 AND superRegion=$region";
                  $rgnRes = $con->query($rgn) ;
                  $res=$rgnRes->fetch_all(MYSQLI_ASSOC);
                  
                  $_SESSION['region_result']=$res
                  
                  ?>

                  <select class="form-control Input" name="region" id="region">

                  <?php 
                  foreach($res as $data){
                        echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';
                  }
                  ?>

               </div>

               <div><input type="hidden"></div>




               <div class="form-row">
                  <label for="trustee" class="inputLable"><b>Trustee
                     </b></label>
                  <input id="trustee" class="form-control Input"></input>
               </div>



               <div class="form-row">
                  <label class="inputLable" for="phone-number"><b>Contact No 1</b></label>
                  <input class="form-control Input" id='phone-number-1' name="phoneNumber1"></input>
                </div>
                <div class="form-row">      
                  <label class="inputLable" for="phone-number"><b>Contact No 2</b></label>
                  <input class="form-control Input" id='phone-number2' name="phoneNumber2"></input>
               </div>



               <div class="form-row">
                  <label class="inputLable" for="CivilStatus"><b>Civil status</b></label>
                  <select class="form-control Input" name="trustee" id="civilStatus" name="civilStatus">
                     <option value="unmarried">Unmarried</option>
                     <option value="married">Married</option>
                  </select>
               </div>

               <div class="form-row">
                  <label for="jobtype" class="inputLable"><b>Job Type :</b></label>
                  <select class="form-control Input" name="jobType" id="jobType">
                     <option value="Goverment">Goverment</option>
                     <option value="Private">Private</option>
                     <option value="Retired">Retired</option>
                     <option value="SelfEmployee">SelfEmployee</option>
                     <option value="Jobless">Jobless</option>

                  </select>
               </div>


               <div class="Twobtn">
                  <button type="submit" class=' btn btn-primary '>Confirm and Update</button>
               </div>



            </fieldset>
         </fieldset>

      </form>
   </div>
</div>



<?php include VIEW.'includes/footer.php' ?>