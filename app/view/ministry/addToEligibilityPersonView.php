<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/ministry/addToEligibilityFindModel" id="updateOfficer">
            <fieldset class="BackgroundFS">            
                <h2>FIND ELIGIBLE PERSON</h2>

                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="nid" class="searchBarLable"><b>Person NIC:</b></label>
                        <input class="form-control searchInput" name='nid' placeholder="Type NIC number here" ></input>
                    </div>

                    <button type="submit" name="nicSubmit" class="btn btn-primary btnNav" style="margin-top:-80px;" >Search</button>                   
                </fieldset>
            </fieldset>
        </form>

        <?php 
            if(isset($_POST['fundSubmit'])){
                //store predefined fund id in session variables
                $_SESSION['fund_id'] = $_POST['select-PreFund'];       
            }

            if(isset($_GET['result'])){
                if($_GET['result'] == "success"){
                    echo '<div class="alert alert-success" color="green" role="alert">Person has been successfully added to the eligibility list!</div>';
                }       
            }   
        ?>

        <form method="post" action="/fadts/ministry/addToEligibilitySaveModel">
            <fieldset class="BackgroundFS">
                <?php if (isset($_SESSION['person_id']) && $_SESSION['person_id']==-1 && isset($_SESSION['flag']) && $_SESSION['flag']%10==6) { ?>
                    <div class="form-row ">
                        <input class="form-control Input" value="Record doesn't exist!" readonly></input>
                    </div>
                <?php } ?>

                <?php if (isset($_SESSION['person_id']) && $_SESSION['person_id']!=-1 && isset($_SESSION['flag']) && $_SESSION['flag']%10==6) { ?>
                    <h2>PERSON DETAILS</h2>

                    <fieldset class="searchBar">   
                        <div class="form-row">
                            <label for="name" class="inputLable"><b>Name:</b></label>
                            <input class="form-control Input" name="name" value="<?php echo $_SESSION['person_name'] ?>" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="nid" class="inputLable"><b>NID:</b></label>
                            <input class="form-control Input" name="nid" value="<?php echo $_SESSION['person_nid'] ?>" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="address" class="inputLable"><b>Address:</b></label>
                            <input class="form-control Input" name='address' value="<?php echo $_SESSION['person_address'] ?>" readonly></input>
                        </div> 

                        <div class="form-row">
                            <label for="job" class="inputLable"><b>Job:</b></label>
                            <input class="form-control Input" name='job' value="<?php echo $_SESSION['person_job'] ?>" readonly></input>
                        </div>

                        <?php
                            //determine civil status of the person
                            switch ($_SESSION['person_civilStatus']) {
                                case 0:
                                    $civilStatus = 'Unmarried';
                                    break;
                                case 1:
                                    $civilStatus = 'Married';
                                    break;   
                            }
                        ?>

                        <div class="form-row">
                            <label for="civilStatus" class="inputLable"><b>Civil status:</b></label>
                            <input class="form-control Input" name="civilStatus" value="<?php echo $civilStatus ?>" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="region" class="inputLable"><b>Region:</b></label>
                            <input class="form-control Input" name='region' value="<?php echo $_SESSION['person_region_name'] ?>" readonly></input>
                        </div>

                        <div class="Twobtns">
                            <button type="submit" class='btn btn-primary' name="confirm">Confirm</button>
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

<?php include VIEW.'includes/footer.php'?>