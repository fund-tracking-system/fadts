<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>


<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">

        <form method="post" action="" id="form">


            <fieldset style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px;">
                <h2 style="margin-bottom:50px;">Search By NID</h2>
                <fieldset
                    style="padding-top:15px; margin-right:50px; margin-left:20px;border-radius:10px; padding:3%; ">
                    <div class="form-row ">

                        <label for="NID-number" style="margin-left:150px; margin-top:5px;margin-bottom:-25px; "><b>
                                NID Number:</b></label>
                        <input class="form-control " id='NID-number'
                            style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px; padding:20px;;"
                            placeholder="9 7 2 8 1 0 1 7 7 v" name="NID"></input>

                        <button style="margin-left: 70%; margin-top:-50px; width:13%; margin-bottom:20px;" type="submit"
                            class="btn btn-primary">Search</button>
                    </div>
                </fieldset>
        </form>
        <form method="post" id="form">
            <fieldset style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px;padding-top:20px; margin-top:30px;">

                <h2 style="margin-bottom:50px;">Search By Criteria</h2>

                <div class='form-row '>
                    <div style="display: flex;">
                        <label class='age-label '
                            style="margin-left:70px;margin-bottom:18px;margin-top:10px;"><b>Age:</b></label>
                        <input class='first form-control'
                            style="margin-left:150px;margin-bottom:20px;margin-right:150px;" name="age1"></input><span class='to'
                            style=" margin-right:170px;"> <b> to</b></span>
                        <input class='second form-control' name="age2"></input>
                    </div>
                </div>


                <div class='form-row'>
                    <label class='job-type-label' for="job-type" style="margin-left:70px;margin-bottom:-18px;"><b>Job
                            Type:</b></label>
                    <select class='job-types form-control' name="job-type" id="job-type"
                        style="margin-left:260px;margin-bottom:20px;margin-right:150px;">
                        <option value="Goverment">Goverment</option>
                        <option value="Non-goverment">Non-goverment</option>
                        <option value="Jobless">Jobless</option>
                    </select>
                </div>

                <div style="  padding-top: 30px;">
                    <label class='prolonged-label' style="margin-left:70px;margin-bottom:18px;"><b>Prolonged</br>
                    </label>
                    <label class='prolonged-label' style="margin-left:70px;margin-bottom:18px;">
                        Disorders/Diseases:</b></label>

                    <div class='radio1'>
                        <input type="radio" id="have-pro" name="prolonged" value="have"
                            style="margin-left:20px;margin-bottom:18px;">
                        <label for="have-pro"
                            style="margin-left:-130px;margin-bottom:20px;margin-right:150px;"></label><span><b>Have</b></span>
                    </div>
                    <div class='radio2'>
                        <input type="radio" id="no-pro" name="prolonged" value="no">
                        <label for="no-pro" style="margin-left:10px;"></label><span><b>No</b></span>
                    </div>
                </div>



                <div class='form-row ' style="margin-top:50px;">
                    <div style="display: flex;">
                        <label class='income-label'
                            style="margin-left:70px;margin-bottom:18px;margin-top:10px;" ><b>Gross
                                Income:</b></label>
                        <input class='first form-control'
                            style="margin-left:110px;margin-bottom:20px;margin-right:150px;" name="income1"></input><span class='to'
                            style=" margin-right:150px;"> <b> to</b></span>
                        <input class='second form-control' name="income2 "></input>
                    </div>
                </div>


                <div class="multiselect">
                    <label class='multi-select-label' for="current-funds"
                        style="margin-left:70px;margin-bottom:18px;"><b>Current</br></label>
                    <label class='multi-select-label' for="current-funds"
                        style="margin-left:70px;margin-bottom:18px;">Funds/Donations:</b></label>

                    <div class="selectBox" onclick="showCheckboxes() "
                        style="margin-left:30px;margin-bottom:20px;margin-right:150px;">
                        <select>
                            <option>Select an option</option>
                        </select>
                        <div class="overSelect"></div>
                    </div>
                    <div id="checkboxes"
                        style="margin-left:20.5%; margin-top:-1.5%; background-color:white; border:none " name="checkbox">
                        <label for="one">
                            <input type="checkbox" id="one" name="checkBox1" /><b>&nbsp; &nbsp;Samurdhi</label>
                        <label for="two">
                            <input type="checkbox" id="two"  name="checkBox2"/> &nbsp; &nbsp;Retire</label>
                        <label for="three">
                            <input type="checkbox" id="three" name="checkBox3" /> &nbsp; &nbsp;Govi wishrama</label>
                        <label for="four">
                            <input type="checkbox" id="four"  name="chekbox4"/> &nbsp; &nbsp;Wadihiti</b></label>
                    </div>
                </div>

                <div class='button '>

                    <button type="submit" class='submit-button  btn btn-primary'
                        style=" float: right;margin-top: 0px; padding-left:20px;padding-right:20px;padding-top:10px; padding-bottom:10px; margin-right:100px;">Search
                        Here</button>
                </div>







            </fieldset>
        </form>
    </div>


</div>
<?php include VIEW.'footer.php' ?>