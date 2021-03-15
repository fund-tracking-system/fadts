<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<?php
    //next redirect URL
    $_SESSION['next_model'] = "Location:/fadts/ministry/updateOfficerSetRegionModel";
?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/ministry/viewOfficerFindModel">
            <fieldset class="BackgroundFS">            
                <h2>FIND OFFICER</h2>

                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="nid" class="inputLable"><b>Officer NID:</b></label>
                        <input class="form-control Input" name='nid' placeholder="NIC number here" ></input>
                    </div>

                    <button type="submit" class="btn btn-primary signlebtn">Search</button>                   
                </fieldset>
            </fieldset>
        </form>

        <form method="post" action="/fadts/ministry/updateOfficerModel">
            <fieldset class="BackgroundFS">
                <?php if (isset($_SESSION['officer_id']) && $_SESSION['officer_id']==-1) { ?>
                    <div class="form-row ">
                        <input class="form-control Input" value="Record doesn't exist!" readonly></input>
                    </div>
                <?php } ?>

                <?php if (isset($_SESSION['officer_id']) && $_SESSION['officer_id']!=-1) { ?>
                    <h2>OFFICER DETAILS</h2>

                    <fieldset class="searchBar">   
                        <div class="form-row">
                            <label for="name" class="inputLable"><b>Name:</b></label>
                            <input class="form-control Input" name="name" value="<?php echo $_SESSION['officer_name'] ?>" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="nid" class="inputLable"><b>NID:</b></label>
                            <input class="form-control Input" name="nid" value="<?php echo $_SESSION['officer_nid'] ?>" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="email" class="inputLable"><b>E-mail:</b></label>
                            <input class="form-control Input" type="email" name='email' value="<?php echo $_SESSION['officer_email'] ?>" readonly></input>
                        </div> 

                        <!-- <div class="form-row" style="display: none;">
                            <label for="password" class="inputLable"><b>Reset Password:</b></label>
                            <select class="form-control Input" name="password" readonly>
                                <option value="permitted">No</option>
                                <option value="denied">Reset</option> 
                            </select>
                        </div> -->

                        <div class="form-row">
                            <label for="position" class="inputLable"><b>Position:</b></label>
                            <input class="form-control Input" name="position" value="<?php echo $_SESSION['officer_role'] ?>" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="region" class="inputLable"><b>Region:</b></label>
                            <input class="form-control Input" name="region" value="<?php echo $_SESSION['assign_region_name'] ?>" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="loginStatus" class="inputLable"><b>Login status:</b></label>
                            <input class="form-control Input" name="loginStatus" value="<?php echo $_SESSION['officer_logStat'] ?>" readonly></input>
                            <!-- <select class="form-control Input" name="loginStatus" readonly>
                                <option value="permitted">Permitted</option>
                                <option value="denied">Denied</option> 
                            </select> -->
                        </div>

                        <!-- <div class="Twobtn">
                            <a href="/fadts/assignRegion/assignRegionView" class=' btn btn-primary '>Set Region</a>
                            <button type="submit" class=' btn btn-primary ' style="display: none;">Confirm</button>
                        </div> -->
                    </fieldset>
                <?php } ?>
            </fieldset>
        </form>
    </div>
</div>

<script>
function retain() {
  var x = document.getElementById("myInput").value;
  document.getElementById("demo").innerHTML = "You wrote: " + x;
}
</script>

<?php include VIEW.'includes/footer.php'?>