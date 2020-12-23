<?php 
   include VIEW.'includes/header.php';
   
   include VIEW.'includes/sidebar.php'
?>

<?php
   

    require 'connection.php';   // database connection file calling
    $regionid=$_SESSION['region'];

    $sql="SELECT name FROM region WHERE regionId=$regionid ";
    $res=$con->query($sql);
    $rgn=$res->fetch_all(MYSQLI_ASSOC); 
    foreach ($rgn as $key ) {
        $_SESSION['regionName']=$key['name'];
    }
    ?>
<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="" id="form">
            <fieldset class="BackgroundFS">
                <h2>USER PROFILE </h2>
                <div class="profile-main" style="width:91%; height:80%;">
                    <div class="profile-header" style="height:240px;">
                        <div class="user-detail">
                            <div class="user-image">
                                <img src="/fadts/app/view/includes/avatar.png">
                            </div>

                            <div class="user-data">
                                <br>
                                <h2><B><?php echo $_SESSION['username']?></B></h2>
                                <br>
                                <span class="post-label"><B><?php echo $_SESSION['roleName']?></B></span>
                                <br>

                                <p style="font-size:15px;">Goverment Officer <strong></strong><br>
                                    <i class="fa fa-map-marker"
                                        aria-hidden="true"></i><?php echo $_SESSION['roleName']?>,
                                    <?php echo $_SESSION['regionName']?>, Sri Lanka
                                    <br>
                                    <?php echo $_SESSION['email']?>
                                </p>

                            </div>
                        </div>

                        <div class="tab-panel-main">
                            <div id="Basic-detail" class="tab-content current">
                                <div class="bio-box">
                                    
                                    <div class="desc"><strong><?php echo $_SESSION['username']?> Golluwamula Opatha ganegoda Elpitye 5
                                            family member and age 43
                                            how many child areas he controll . like that we can data from
                                            database<strong>
                                    </div>
                                </div>
                                <div class="detail-box">
                                    <p>Detail</p>
                                    <ul class="ul-first">
                                        <li>Birth date</li>
                                        <li>City</li>
                                        <li>Country</li>
                                        <li>Contact No</li>
                                    </ul>
                                    <ul class="ul-second">
                                        <li>07 October1997</li>
                                        <li>Elpitye</li>
                                        <li>Srilanka</li>
                                        <li>0712562583</li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div style="clear: both;"></div>
                </div>





            </fieldset>

        </form>


        <form method="POST" action="/fadts/includes/resetModel">
            <fieldset class="BackgroundFS">

                <fieldset class="searchBar">
                    <div style="margin-bottom:120px;">
                        <h2>Reset Password</h2>
                    </div>
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




                    <div class="form-row" style="margin-top:2;">
                        <label for="password" class="inputLable" style="margin-top:-45px;"><B>Current
                                Password:</B></label>
                        <input type="password" class="form-control InputPro" name="currentpwd" id="CurrentPassword"
                            placeholder="Enter Current Password">
                        <small></small>
                    </div>


                    <div class="form-row" style="margin-top:20px;">
                        <label for="password" class="inputLable" style="margin-top:-50px;"><B>New
                                Password:</B></label>
                        <input type="password" class="form-control InputPro" name="newpassword" id="newpassword"
                            placeholder="Enter Password">
                        <small></small>
                    </div>

                    <div class="form-row" style="margin-top:20px;">
                        <label for="password" class="inputLable" style="margin-top:-50px;"><B>Confirm
                                Password:</B></label>
                        <input type="password" class="form-control InputPro" name="againpassword" id="reEnter"
                            placeholder="Again Enter New Password">
                        <small></small>
                    </div>
                    </br>

                    <div class="user2btn">
                        <button type="reset" name="reset" class="confirm-button btn">Reset</button>

                        <button type="submit" name="submit" class='btn btn-primary '>Confirm</button>
                    </div>
                </fieldset>
            </fieldset>

        </form>




        <script type="text/javascript">
        $(document).ready(function() {
            $('ul.tabs li').click(function() {
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs li').removeClass('current');
                $('.tab-content').removeClass('current');

                $(this).addClass('current');
                $("#" + tab_id).addClass('current');
            });
        });
        </script>















    </div>
</div>

<?php include VIEW.'includes/footer.php' ?>