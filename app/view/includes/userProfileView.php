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
                <fieldset class="searchBar">



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
                            value="<?php echo  $_SESSION['regionName']?>" readonly></input>
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

                <fieldset class="searchBar">
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
                        <button type="reset" name="reset" class="confirm-button btn">Reset</button>

                        <button type="submit" name="submit" class='btn btn-primary '>Confirm</button>
                    </div>
                </fieldset>
            </fieldset>

        </form>




        <form method="post" action="" id="form">
            <fieldset class="BackgroundFS">
                <h2>USER PROFILE </h2>

                    <div class="profile-main" style="width:80%; height:80%;">
                        <div class="profile-header" style="height:200px;">
                            <div class="user-detail" >
                                <div class="user-image">
                                    <img src="/fadts/app/view/includes/propic.jpeg">

                                </div>
                                <div class="user-data" >
                                    <h2><B><?php echo $_SESSION['username']?></B></h2>
                                    <br>
                                    <span class="post-label"><B><?php echo $_SESSION['roleName']?></B></span>
                                    <br>
                                    

                                    <p style="font-size:15px;">Goverment Officer <strong></strong><br>
                                        <i class="fa fa-map-marker"
                                            aria-hidden="true"></i><?php echo $_SESSION['roleName']?>,
                                        <?php echo $_SESSION['regionName']?>, Sri Lanka
                                    </p>
                                    


                                </div>

                            </div>

                            <div class="tab-panel-main">

                                <div id="Basic-detail" class="tab-content current">
                                    <div class="skill-box">
                                        <ul>
                                            <li><strong>My Core Skills:</strong></li>
                                            <li>LeaderShip skills<i class="fa fa-star" aria-hidden="true"></i><i
                                                    class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                    aria-hidden="true"></i></li>
                                            <li>ENTERPRENEURSHIP<i class="fa fa-star" aria-hidden="true"></i><i
                                                    class="fa fa-star" aria-hidden="true"></i></li>
                                            <li>GROWTH MARKETING<i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <div class="bio-box">
                                        <div class="heading">
                                            <p>Professional Bio
                                                <label>10 Year Experience</label>
                                            </p>
                                        </div>
                                        <div class="desc">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
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
                                            <li>8 March 1997</li>
                                            <li>Jamanagar</li>
                                            <li>California</li>
                                            <li>9900990087</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="user-data">
                                    
                                    
                                        <img src="/fadts/app/view/includes/gmail.jpg"
                                            style="width:20%;margin-top:50px; ">
                                            <img src="/fadts/app/view/includes/phone.jpg"
                                            style="width:15%;margin-top:1px;">
                                            <img src="/fadts/app/view/includes/whatsapp.png"
                                            style="width:20%;margin-top:1px;">  
                                            <img src="/fadts/app/view/includes/logo.PNG"
                                            style="width:40%;height:50px;;margin-top:1px;">                                 
                                        <span class="post-label"
                                            style="font-size:20px; margin-top:-30px;"><B><?php echo $_SESSION['email']?><B></span>
                                            <span>
                                       

                                   

                                </div>

                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </div>




    
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