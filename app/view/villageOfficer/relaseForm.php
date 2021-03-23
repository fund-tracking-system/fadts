<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1 ">
    
    <form method="post" action="/fadts/village/......" id="formAddOfficer">
            <fieldset class="BackgroundFS" style="margin-top:-30px;">
                <h2> </h2>

                <fieldset class="searchBar"> 

                <div>
                  <label class="inputLable"><b>Fund Name</b></label>
                  <input class="form-control InputOness" style="" name="fname" value="govi setha" ></input>
                  
                  <label class="inputLable" style="margin-left:510px;"><b>OTP</b></label>
                  <input class="form-control InputOnes"style="" name="otp" value=0 ></input>
                  <button type="submit"  style="margin-left:850px;margin-top:-5px;"class="btn btn-primary">Request OTP</button>

               </div>




               <div  class="form-row" style="margin-bottom:50px;margin-left:-650px;">
            
               <span class="inputLable LableTwo"style="margin-top:50px;"><b>Amount (Rs):</b></span>
                  <input class="form-control InputTwo" name="amount" value=1000000 style="width:300px;"></input>
               
               </div>
                

               <div class="Twobtn">
                  <button type="submit" class="btn btn-primary">Confirm Recieving</button>
               </div>

                              


</fieldset>
</fieldset>
</form>

</div>



</div>




<?php include VIEW.'includes/footer.php'?>