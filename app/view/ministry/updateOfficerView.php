<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php
    //next redirect URL
    $_SESSION['next_model'] = "Location:/fadts/ministry/updateOfficerSetRegionModel";
?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/ministry/updateOfficerFindModel" id="updateOfficer">
            <fieldset class="BackgroundFS">            
                <h2>FIND OFFICER</h2>

                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="nid" class="searchBarLable"><b>Officer NIC:</b></label>
                        <input class="form-control searchInput" name='nid' placeholder="Type NIC number here" ></input>
                    </div>

                    <button type="submit" name="nicSubmit" class="btn btn-primary btnNav"style="margin-top:-80px;" >Search</button>                   
                </fieldset>
            </fieldset>
        </form>

        <?php 
            if(isset($_GET['result'])){
                if($_GET['result'] == "success"){
                    echo '<div class="alert alert-success" color="green" role="alert">Officer details has been successfully updated!</div>';
                }       
            }   
        ?>

        <form method="post" action="/fadts/ministry/updateOfficerSaveModel">
            <fieldset class="BackgroundFS">
                <?php if (isset($_SESSION['officer_id']) && $_SESSION['officer_id']==-1 && isset($_SESSION['flag']) && $_SESSION['flag']%10==1) { ?>
                    <div class="form-row ">
                        <input class="form-control Input" value="Record doesn't exist!" readonly></input>
                    </div>
                <?php } ?>

                <?php if (isset($_SESSION['officer_id']) && $_SESSION['officer_id']!=-1 && isset($_SESSION['flag']) && $_SESSION['flag']%10==1) { ?>
                    <h2>UPDATE OFFICER DETAILS</h2>

                    <fieldset class="searchBar">   
                        <div class="form-row">
                            <label for="name" class="inputLable"><b>Name:</b></label>
                            <input class="form-control Input read" name="name" value="<?php echo $_SESSION['officer_name'] ?>" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="nid" class="inputLable"><b>NID:</b></label>
                            <input class="form-control Input read" name="nid" value="<?php echo $_SESSION['officer_nid'] ?>" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="email" class="inputLable"><b>E-mail:</b></label>
                            <input class="form-control Input read" type="email" name='email' value="<?php echo $_SESSION['officer_email'] ?>" readonly></input>
                        </div> 

                        <div class="form-row hidden">
                            <label for="password" class="inputLable"><b>Reset Password:</b></label>
                            <select class="form-control Input" name="password">
                                <option value="permitted">No</option>
                                <option value="denied">Reset</option> 
                            </select>
                        </div>

                        <div class="form-row">
                            <label for="position" class="inputLable"><b>Position:</b></label>
                            <input class="form-control Input" name="position" value="<?php echo $_SESSION['officer_role'] ?>" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="region" class="inputLable"><b>Region:</b></label>
                            <input class="form-control Input" name='region' value="<?php echo $_SESSION['assign_region_name'] ?>" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="loginStatus" class="inputLable"><b>Login status:</b></label>
                            <input class="form-control Input hide" name="loginStatusRead" value="<?php echo $_SESSION['officer_logStat'] ?>" readonly></input>
                            <select class="form-control Input hidden read" name="loginStatus">
                                <option value="permitted">Permitted</option>
                                <option value="denied">Denied</option> 
                            </select>
                        </div>

                        <div class="Twobtns">
                            <button type="button" class='btn btn-primary hide' id="editbtn">Update</button> 
                            <button type="submit" class='btn btn-primary hidden' name="setRegion">Set Region</button>
                            <button type="submit" class='btn btn-primary hidden' name="confirm">Confirm</button>
                        </div>
                    </fieldset>
                <?php } ?>
            </fieldset>
        </form>
    </div>
</div>

<?php
    //unset session variables
    unset($_SESSION['flag']); 
?>

<script>
    function retain() {
        var x = document.getElementById("myInput").value;
        document.getElementById("demo").innerHTML = "You wrote: " + x;
    }   
</script>

<script>
    $(document).ready(function(){
        $(".hidden").hide();
        $('select option[value="<?php echo $_SESSION['officer_logStat'] ?>"]').attr("selected",true);
        //$('select option[value="permitted"]').attr("selected", true);

        $("#editbtn").click(function(){
            $(".hide").hide();
            $(".hidden").show();
            $(".read").prop("readonly",false);
        });
    });
</script>

<?php include VIEW.'includes/footer.php'?>