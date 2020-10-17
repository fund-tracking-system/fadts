<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>
<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form>
            <fieldset style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px;padding-top:20px; ">

                <h2 style="margin-bottom:50px;">USER PROFILE </h2>

                <fieldset style="margin:50px;;">
                    <div class="form-row" style="margin-left:200px; margin-top:50px;">
                        <label for="name " style="margin-left:70px;margin-bottom:18px;"><b> Name:</b></label>
                        <input class="form-control" id="name" name="name"
                            style="margin-left:150px;margin-bottom:25px;margin-right:250px; margin-top:-45px;"
                            value="<?php echo $_SESSION['username']?>" readonly></input>
                    </div>
                    <div class="form-row" style="margin-left:200px;">
                        <label for="name " style="margin-left:70px;margin-bottom:18px;"><b>NID:</b></label>
                        <input class="form-control" id="name" name="NId"
                            style="margin-left:150px;margin-bottom:25px;margin-right:250px; margin-top:-45px;"
                            value="<?php echo $_SESSION['usernid']?>" readonly></input>
                    </div>
                    <div class="form-row" style="margin-left:200px;">
                        <label for="name " style="margin-left:70px;margin-bottom:18px;"><b>Region:</b></label>
                        <input class="form-control" id="name" name="region"
                            style="margin-left:150px;margin-bottom:25px;margin-right:250px; margin-top:-45px;"
                            value="SouthernProvince GalleDistrict ElptiyeDivisionalSec 29/B_Opatha " readonly></input>
                    </div>
                    <div class="form-row" style="margin-left:200px;">
                        <label for="name " style="margin-left:70px;margin-bottom:18px;"><b>Position:</b></label>
                        <input class="form-control" id="name" name="name"
                            style="margin-left:150px;margin-bottom:25px;margin-right:250px; margin-top:-45px;"
                            value="<?php echo $_SESSION['roleName']?>" readonly></input>
                    </div>
                </fieldset>
            </fieldset>

        </form>
        <form>
            <fieldset style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px;padding-top:20px; ">

                <fieldset style="margin:50px;">
                <h2 style="margin-bottom:50px; font-size:25px;" >Reset Password</h2>

                    <div class="form-row" style="margin-left:200px;margin-top:50px;">
                        <label for="password" style="margin-bottom:18px; margin-left:-10px;"><B>Current
                                Password:</B></label>
                        <input type="password" class="form-control"
                            style="margin-left:180px;margin-bottom:25px;margin-right:250px; margin-top:-45px;"
                            name="newpassword" id="CurrentPassword" placeholder="Enter Current Password">
                        <small></small>
                    </div>


                    <div class="form-row" style="margin-left:200px;">
                        <label for="password" style="margin-bottom:18px; margin-left:-10px;"><B>New Password:</B></label>
                        <input type="password" class="form-control"
                            style="margin-left:180px;margin-bottom:25px;margin-right:250px; margin-top:-45px;"
                            name="newpassword" id="newpassword" placeholder="Enter Password">
                        <small></small>
                    </div>

                    <div class="form-row" style="margin-left:200px;">
                        <label for="password" style="margin-bottom:18px; margin-left:-10px;"><B>Confirm
                                Password:</B></label>
                        <input type="password" class="form-control"
                            style="margin-left:180px;margin-bottom:25px;margin-right:250px; margin-top:-45px;"
                            name="againpassword" id="reEnter" placeholder="Again Enter New Password">
                        <small></small>
                    </div>
                    </br>

                    <div class="buttons" style="margin-left:700px; margin-bottom:30px;">
                    <button type="reset" class='confirm-button btn' style="color:#e5e4e2; background-color:#aaa; border-color:#aaa;">Reset</button>

                        <button type="submit" class='confirm-button btn btn-primary '>Confirm</button>
                    </div>
                </fieldset>
            </fieldset>

        </form>

    </div>
</div>
<?php include VIEW.'footer.php' ?>