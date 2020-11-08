<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">



      <form method="post" id="formAddPeople" action="/fadts/divisional/addPeopleModel">
         <fieldset class="BackgroundFS">
            <h2> ADD PEOPLE DATA </h2>
            <fieldset class="searchBar">



               <?php


                if(isset($_GET['error'])){

                $error = $_GET['error'];
                    if($error=="person_exist"){
                        echo '<div class="alert alert-danger" role="alert">This person has been already added to the system ! </div>';
                    }

                }
                ?>


               <div class="form-row">
                  <label for="Name" class="inputLable"><b>Name :</b></label>
                  <input class="form-control Input" id="name" name="name" placeholder="Name In Full"></input>

               </div>



               <div class="form-row">
                  <label for="nid" class="inputLable"><b>NIC :</b></label>
                  <input class="form-control Input" id='nid' name="nid"></input>
               </div>



               <div class="form-row">
                  <label for="nid" class="inputLable"><b>Family Head :</b></label>
                  <input class="form-control Input" id='headOfFamily' name="headOfFamily"></input>
               </div>



               <div class="form-row">
                  <label for="name " class="inputLable"><b>Adrress :</b></label>
                  <input class="form-control Input" id="address" name="address"></input>
               </div>



               <div class="form-row">
                  <label for="birth-date" class="inputLable"><b>Birth Date :</b></label>
                  <input class="form-control Input" id='b_date' name="b_date" type="date"></input>
                  <small> </small>
               </div>

               <div class="form-row">
                  <label for="birthNO" class="inputLable"><b>Birth Certificate
                        No :</b></label>
                  <input class="form-control Input" id='b_certifi' name="b_certifi"></input>
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

               <div class="form-row">
                  <label class="inputLable" for="CivilStatus"><b>Civil Status :</b></label>
                  <select class="form-control Input" id="civilStatus" name="civilStatus">
                     <option value="1">Unmarried</option>
                     <option value="0">Married</option>
                  </select>
               </div>

               <div class="form-row">
                  <label for="tnid" class="inputLable"><b>Trustee :</b></label>
                  <input class="form-control Input" id='tnid' class="form-control Input" name="trustee"></input>
               </div>

               <!-- dn wada karana thana -->

               <div class="form-row">

               <label for="tnid" class="inputLable"><b>Region :</b></label>

                  <select id="region" class="form-control Input" multiple="multiple" name="region" id="region" style="position:sticky;top:60px;height:400px;overflow:scroll;">
                     <option value="Goverment">colombo</option>
                     <option value="Private">matara</option>
                     <option value="Retired">galle</option>
                     <option value="SelfEmployee">deniyaye</option>
                     <option value="Jobless">akuressa</option>
                  </select>

               </div>



               <div class="form-row">
                  <label class="inputLable" for="phone-number"><b>Contact Number 1 :</b></label>
                  <input class="form-control Input" id='phonenumber1' name="phoneNumber1" type="number"></input>
               </div>
               <div class="form-row">

                  <label class="inputLable" for="phone-number"><b>Contact Number 2 :</b></label>
                  <input class="form-control Input" id='phonenumber2' name="phoneNumber2" type="number"></input>
               </div>

               <button type="submit" class=' btn btn-primary  signlebtn'>Submit</button>
            </fieldset>
         </fieldset>

      </form>
   </div>
</div>




<script>
   $(document).ready(function() {
     
    $('#region').select2();


   });
</script>

<?php include VIEW.'includes/footer.php' ?>