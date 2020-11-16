<?php 
   include VIEW.'includes/header.php';
   
   include VIEW.'includes/sidebar.php'
?>


<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">

        <fieldset class="BackgroundFS">
            <h2>ADD PEOPLE DATA </h2>
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

                            <h4><B>Address <strong></strong><br>
                                <i class="fa fa-map-marker"
                                    aria-hidden="true"></i><?php echo $_SESSION['people_address']?>,
                                Sri Lanka
                                
                                <br>phone Number  :
                                <?php echo $_SESSION['people_phoneNumber1']?>
                                
                                
                                </h4>

                        </div>
                    </div>

                    <div class="tab-panel-main">

                        <div class="bio-box">
                            
                            <div class="desc"><strong>Trustee is <?php echo ".     ."?><?php echo $_SESSION['people_trustee']?>
                                    <br>
                                    Family head is <?php echo "   .     ."?><?php echo $_SESSION['people_headOfFamily']?>
                                    <br>
                                     Region Number Is <?php echo "   .     "?><?php  echo $_SESSION['people_region']?>
                                    <br>
                                    Job Type is <?php echo "   .     "?>   <?php echo $_SESSION['people_jobType']?>
                                    
                                    <strong>
                            </div>
                        </div>
                        <div class="detail-box">
                           
                            <ul class="ul-first">
                                <li>Birth date--></li>
                                <li>Civil Status--></li>
                                <li>Birth CN--></li>

                            </ul>
                            <ul class="ul-second"><B>
                                <li><?php echo $_SESSION['people_b_date']?></li>
                                <li><?php echo "0".$_SESSION['people_civilStatus']?></li>
                                <li><?php echo "0".$_SESSION['people_b_certifi']?></B>

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