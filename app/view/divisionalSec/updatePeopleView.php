<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php if(isset($_SESSION['updateResults'])){
   $result = $_SESSION['updateResults'] ; 
   // echo $result[0][1];
   // exit();
} 
?>
 
<div class="all_bacground_clor">
   <div class="SearchByCriteriaform1">


      <form method="post" action="/fadts/divisional/nicSearchModel?view=updatePeople" id="form">
         <fieldset class="BackgroundFS">
            <h2>UPDATE PEOPLE DATA</h2>
            <fieldset class="searchBar">
               <div class="form-row " >
                  <label for="NID-number" class="searchBarLable"><b>NIC Number :</b></label>
                  <input class="form-control searchInput" id='NID-number' 
                  placeholder="<?php echo isset($result) ? $result[0][1]:"Type here NIC"?>"  
                  name="nic"></input>
                  <button type="submit" class="btn btn-primary btnNav" name="submit">Search</button>
               </div>
            </fieldset>
         </fieldset>
      </form>




      <form method="POST" action="/fadts/divisional/updatePeopleModel">
         <fieldset class="BackgroundFS">
           
            <fieldset class="searchBar">
               <div class="form-row">
                  <label for="name " class="inputLable"><b>Full Name</b></label>
                  <input class="form-control Input" id="name" name="name" value="<?php echo isset($result) ? $result[0][7]:"Type here NIC" ?>"></input>
               </div>



               <div class="form-row">
                  <label for="Address" class="inputLable"><b>Address</b></label>
                  <input class="form-control Input" id="address" name="address"
                  value="<?php echo isset($result) ? $result[0][8]:"Type here NIC" ?>"></input>
               </div>


               <div class="form-row">
                  <label for="birth-date" class="inputLable"><b>Birth Date</b></label>
                  <input class="form-control Input" id='birthDate' name="birthDate" value="<?php echo isset($result) ? $result[0][5]:"Type here NIC" ?>"
                     readonly></input>
                  <small> </small>
               </div>
               <div class="form-row">
                  <label for="birthNO" class="inputLable"><b>Birth Certificate No</b></label>
                  <input class="form-control Input" id='birthvertifiacateNo' name="birthCertificateNo" value="<?php echo isset($result) ? $result[0][6]:"Type here NIC" ?>"
                     readonly></input>
               </div>


               <div class="form-row" style="margin-bottom:50px;">

                  <label for="tnid" class="inputLable" style="margin-right:185px;"><b>Region :</b></label>
                  <?php

                  require 'connection.php'; 
                                 
                  $rgn="SELECT level, regionid, superRegion,name  FROM region  WHERE level=4 ";
                  $rgnRes=$con->query($rgn) ;
                  $res=$rgnRes->fetch_all(MYSQLI_ASSOC);
                  
                  $_SESSION['region_result']=$res;  //for assign region  ?>

                  <select id='region' class='form-control Input' multiple='multiple' name='region' id='region'
                     style='position:sticky;top:60px;overflow:scroll;  width:530px;'>
                     <option value="<?php echo isset($result) ? $result[0][8]:"Type here NIC" ?>" selected></option>
                     <?php 
                  foreach($res as $data){
                     if($data['superRegion']==$_SESSION['region']){
                        // echo "<option value='$data['regionid']'>colombo</option>";
                        echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';

                     }
                  }
               ?>
               </div>

               <div class="form-row">
                  <input type="hidden"></input>
               </div>




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

               <div class='form-row'>
                  <label class="inputLable"><b>Job type </br></label>
                  <label class="inputLable"></b></label>

                  <select class="form-control Input" onclick="showCheckboxes() ">
                     <!-- <option>Select an option</option>  select krapua pennanna hadann ooona-->
                  </select>
                  <!-- <div class="overSelect"></div> -->

                  <div id="checkboxes" class="checksbox" name="checkbox">

                     <label for="one" class="form-control">
                        <input type="checkbox" id="Goverment" name="Goverment" />&nbsp; &nbsp;Goverment</label>
                     <label for="two" class="form-control">
                        <input type="checkbox" id="Private" name="Private" /> &nbsp; &nbsp;Private</label>
                     <label for="three" class="form-control">
                        <input type="checkbox" id="Retired" name="Retired" /> &nbsp; &nbsp; Retired</label>
                     <label for="four" class="form-control">
                        <input type="checkbox" id="Own Bussiness" name="Own Bussiness" /> &nbsp; &nbsp;Own
                        Bussiness</label>
                     <label for="four" class="form-control">
                        <input type="checkbox" id="SelfEmployee" name="Own Bussiness" /> &nbsp; &nbsp;Self
                        Employee</label>
                     <label for="four" class="form-control">
                        <input type="checkbox" id="Jobless" name="jobless" /> &nbsp; &nbsp;Jobless</label>
                  </div>
               </div>


               <div class="Twobtn">

                  <button type="submit" class=' btn btn-primary '>Confirm</button>
                  <button class=' btn btn-primary '>View List</button>
               </div>



            </fieldset>
         </fieldset>

      </form>
   </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
   $('#region').select2();
});
</script>


<?php include VIEW.'includes/footer.php' ?>