<?php 
   include VIEW.'includes/header.php';
   
   include VIEW.'includes/sidebar.php'
?>


<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">

        <fieldset class="BackgroundFS">
            <h2>USER PROFILE </h2>
            <div class="profile-main" style="width:91%; height:80%;">
                <div class="profile-headerPeople" style="height:240px;">
                    <div class="user-detail">
                        <div class="user-image">
                            <img src="/fadts/app/view/includes/avatar.png">
                        </div>

                        <div class="user-data">
                            <br>
                            <h2><B><?php echo $_SESSION['people_name'];?></B></h2>
                            <br>
                            <h4><B> NID : <?php echo $_SESSION['people_nid']?></h4>
                            <br>

                            <h4><B>Address :     <strong></strong>
                                <i class="fa fa-map-marker"
                                    aria-hidden="true"></i><?php echo $_SESSION['people_address']?>,
                                Sri Lanka
                                <br> 
                                <br>phone Number  :
                                <?php echo $_SESSION['people_phoneNumber1']?>
                                <br>
                                <?php echo $_SESSION['people_phoneNumber2']?>
                                </h4>

                        </div>
                    </div>

                    <div>

                        <div class="bio-box">
                            <div class="heading" >
                              
                            </div>
                            <div class="desc"style="margin-left:20px;"><h3 ><strong>Trustee is : </h3><h4> <?php echo $_SESSION['people_trustee']?></h4>
                                    <br>
                                    Family head is : <h4><?php echo $_SESSION['people_headOfFamily']?></h4>
                                    <br>
                                    Living Region Is : <h4  text-align: left;><?php echo $_SESSION['people_region']?></h4>
                                    <br>
                                    Job Type is: <h4>
                                    <?php echo $_SESSION['people_jobType']?></h4>
                                    <strong>
                            </div>
                        </div>
                        <div class="detail-box">
                            <p>Detail</p>
                            <ul class="ul-first">
                                <li>Birth date</li>
                                <li>Civil Status</li>
                                <li>Birth CN</li>

                            </ul>
                            <ul class="ul-second">
                                <li><?php echo $_SESSION['people_b_date']?></li>
                                <li><?php echo $_SESSION['people_civilStatus']?></li>
                                <li><?php $_SESSION['people_b_certifi']?>

                            </ul>
                        </div>
                    </div>


                </div>

            </div>
            <div style="clear: both;"></div>
        </fieldset>
    </div>








</div>





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




<?php include VIEW.'includes/footer.php' ?>