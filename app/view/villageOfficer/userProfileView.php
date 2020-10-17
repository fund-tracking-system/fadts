<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">



        <form method="post" action="" id="form">
            <fieldset class="BackgroundFS">

                <fieldset class="userpro">

                    <h2>USER PROFILE </h2>

                    <div class="form-row">
                        <label for="name " class="inputLable"><b> Name:</b></label>
                        <input class="form-control Input" id="name" name="name"
                            value="<?php echo $_SESSION['username']?>" readonly></input>
                    </div>

                    <div class="form-row">
                        <label for="name " class="inputLable"><b>NID:</b></label>
                        <input class="form-control Input" id="name" name="NId" value="<?php echo $_SESSION['usernid']?>"
                            readonly></input>
                    </div>

                    <div class="form-row">
                        <label for="name " class="inputLable"><b>Region:</b></label>
                        <input class="form-control Input" id="name" name="region"
                            value="SouthernProvince GalleDistrict ElptiyeDivisionalSec 29/B_Opatha " readonly></input>
                    </div>

                    <div class="form-row">
                        <label for="name " class="inputLable"><b>Position:</b></label>
                        <input class="form-control Input" id="name" name="name"
                            value="<?php echo $_SESSION['roleName']?>" readonly></input>
                    </div>

                </fieldset>
            </fieldset>

        </form>



        <form>
            <fieldset class="BackgroundFS">
                <fieldset class="userpro">
                    <h2>Reset Password</h2>
</br>
</br>
</br>

                    <div class="form-row">
                        <label for="password" class="inputLable"><B>Current
                                Password:</B></label>
                        <input type="password" class="form-control InputPro"
                            name="newpassword" id="CurrentPassword" placeholder="Enter Current Password">
                        <small></small>
                    </div>


                    <div class="form-row" >
                        <label for="password" class="inputLable"><B>New
                                Password:</B></label>
                        <input type="password" class="form-control InputPro"
                            name="newpassword" id="newpassword" placeholder="Enter Password">
                        <small></small>
                    </div>

                    <div class="form-row">
                        <label for="password" class="inputLable"><B>Confirm
                                Password:</B></label>
                        <input type="password" class="form-control InputPro"
                            name="againpassword" id="reEnter" placeholder="Again Enter New Password">
                        <small></small>
                    </div>
                    </br>

                    <div class="user2btn">
                        <button type="reset" class='confirm-button btn'
                            style="">Reset</button>

                        <button type="submit" class='btn btn-primary '>Confirm</button>
                    </div>
                </fieldset>
            </fieldset>

        </form>

    </div>
</div>
<?php include VIEW.'footer.php' ?>