<?php 
   include VIEW.'includes/header.php';
   
   include VIEW.'includes/sidebar.php'
?>




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

        <form method="POST" action="/fadts/includes/resetModel">
            <fieldset class="BackgroundFS">

                <fieldset class="userpro">
                    <h2>Reset Password</h2>
                    <?php 
                     if(isset($_GET['error'])){
         
                        $error = $_GET['error'];
                        if($error == "db_conn_err"){
                           echo '<div class="alert alert-danger" role="alert">Database connection error!</div>';
                        }
                        if($error == "wrong_crrpwd"){
                           echo '<div class="alert alert-danger" role="alert">Current Pssword is Incorrect!</div>';
                        }
                        if($error == "direct_access"){
                           echo '<div class="alert alert-danger" role="alert"">Direct access not allowed!</div>';
                        }
                        if($error == "new_again_notsame"){
                            echo '<div class="alert alert-danger" role="alert"">New Password and Confirm Pssword Fields Should Same!</div>';
                        }
                        if($error == "success"){
                            echo '<div class="alert alert-success" role="alert"">Password Reset Successfull!</div>';
                        }
                        if($error == "update_error"){
                            echo '<div class="alert alert-danger" role="alert"">Update Query error!</div>';
                        }
                        
                     }   
                ?>




                    <div class="form-row">
                        <label for="password" class="inputLable"><B>Current
                                Password:</B></label>
                        <input type="password" class="form-control InputPro" name="currentpwd" id="CurrentPassword"
                            placeholder="Enter Current Password">
                        <small></small>
                    </div>


                    <div class="form-row">
                        <label for="password" class="inputLable"><B>New
                                Password:</B></label>
                        <input type="password" class="form-control InputPro" name="newpassword" id="newpassword"
                            placeholder="Enter Password">
                        <small></small>
                    </div>

                    <div class="form-row">
                        <label for="password" class="inputLable"><B>Confirm
                                Password:</B></label>
                        <input type="password" class="form-control InputPro" name="againpassword" id="reEnter"
                            placeholder="Again Enter New Password">
                        <small></small>
                    </div>
                    </br>

                    <div class="user2btn">
                        <button type="reset" class='confirm-button btn'>Reset</button>

                        <button type="submit" class='btn btn-primary '>Confirm</button>
                    </div>
                </fieldset>
            </fieldset>

        </form>

    </div>
</div>

<?php include VIEW.'includes/footer.php' ?>