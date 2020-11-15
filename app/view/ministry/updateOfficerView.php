<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/ministry/updateOfficerfindModel">
            <fieldset class="BackgroundFS">            
                <h2>FIND OFFICER</h2>

                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="nid" class="inputLable"><b>Officer NID</b></label>
                        <input class="form-control Input" name='nid' placeholder="NIC number here"></input>
                    </div>

                    <button type="submit" class="btn btn-primary signlebtn">Search</button>                   
                </fieldset>
            </fieldset>
        </form>

        <form method="post" action="/fadts/ministry/updateOfficerModel">
            <fieldset class="BackgroundFS">
                <?php if (isset($_SESSION['query_results']) && $_SESSION['query_results']==-1) { ?>
                    <div class="form-row ">
                        <input class="form-control Input" value="Record doesn't exist!" readonly></input>
                    </div>
                <?php } ?>

                <?php if (isset($_SESSION['query_results']) && $_SESSION['query_results']!=-1) { ?>
                    <h2>UPDATE OFFICER DETAILS</h2>

                    <fieldset class="searchBar">   
                        <div class="form-row">
                            <label for="name" class="inputLable"><b>Name</b></label>
                            <input class="form-control Input" name="name"></input>
                        </div>

                        <div class="form-row">
                            <label for="nid" class="inputLable"><b>NID</b></label>
                            <input class="form-control Input" name="nid"></input>
                        </div>

                        <div class="form-row">
                            <label for="email" class="inputLable"><b>E-mail</b></label>
                            <input class="form-control Input" type="email" name='email'></input>
                        </div> 

                        <div class="form-row">
                            <label for="password" class="inputLable"><b>Reset Password?</b></label>
                            <select class="form-control Input" name="password">
                                <option value="permitted">No</option>
                                <option value="denied">Reset</option> 
                            </select>
                        </div>

                        <div class="form-row">
                            <label for="position" class="inputLable"><b>Position</b></label>
                            <input class="form-control Input" name="position" value="Officer" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="region" class="inputLable"><b>Region</b></label>
                            <input class="form-control Input" name='region' value="Island" readonly></input>
                        </div>

                        <div class="form-row">
                            <label for="loginStatus" class="inputLable"><b>Login status</b></label>
                            <select class="form-control Input" name="loginStatus">
                                <option value="permitted">Permitted</option>
                                <option value="denied">Denied</option> 
                            </select>
                        </div>

                        <div class="Twobtn">
                            <a href="/fadts/assignRegion/assignRegionView" class=' btn btn-primary '>Set Region</a>
                            <button type="submit" class=' btn btn-primary '>Confirm</button>
                        </div>
                    </fieldset>


                    <!--
                    <div class="form-row">
                        <label for="officer-id" class="inputLable"><b>Officer ID:</b>
                        </label>
                        <input class="form-control Input" id="officer-id" required></input>
                    </div>

                    <div class="form-row">
                        <label for="nid" class="inputLable"><b>Officer NID</b></label>
                        <input class="form-control Input" id='nid' value="NID is read Only" readonly></input>
                    </div>

                    <div class="form-row">
                        <label for="name" class="inputLable"><b>Name:</b></label>
                        <input class="form-control Input" id="name" value="Name is read only" readonly></input>
                    </div>

                    <div class="form-row">
                        <label for="birth-date" class="inputLable"><b>Birth Date:</b></label>
                        <input class="form-control Input" id='birth-date' value="DOB is read only" readonly></input>
                    </div>

                    <div class="form-row">
                        <label for="region" class="inputLable"><b>Region:</b></label>
                        <select class="form-control Input" name="region">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <label for="position" class="inputLable"><b>Position:</b></label>
                        <select class="form-control Input" name="position" id="position">
                            <option value="volvo">Auditor</option>
                            <option value="saab">Vilage officer</option>
                            <option value="mercedes">Distric sercetery</option>
                            <option value="audi">Divisional Secetry</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <label class="inputLable" for="CivilStatus"><b>Civil status:</b></label>
                        <select class="form-control Input" name="civilStatus" id="civilStatus" name="civilStatus">
                            <option value="unmarried">Unmarried</option>
                            <option value="married">Married</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <label for="phone-number" class="inputLable"><b>Phone
                                Number:</b></label>
                        <input class="form-control Input" id='phone-number' required></input>
                    </div>
                    -->
                <?php } ?>

                <?php unset($_SESSION['query_results']); //unset results from session variables ?>
            </fieldset>
        </form>
    </div>
</div>

<script>
    //sets previous value as selected in position dropdown list 
    var regionLevel = "<?php echo $_SESSION['region_level']; ?>";
    var selectLevel = document.getElementById('selectLevel');
    selectLevel.options[regionLevel].selected = true;
</script>

<?php unset($_SESSION['region_level']); //unset region level from session variables ?>

<?php include VIEW.'includes/footer.php'?>