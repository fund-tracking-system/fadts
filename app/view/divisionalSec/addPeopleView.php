<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">



        <form method="post" action="" id="form">
            <fieldset class="BackgroundFS">
                <h2> ADD PEOPLE DATA </h2>
                <div class="form-row">
                    <label for="Name" class="inputLable"><b>Name:</b></label>
                    <input class="form-control Input" id="Name" aria-describedby="validationServer03Feedback"
                        placeholder="Name In Full" required></input>
                </div>


                <div class="form-row">
                    <label for="nid" class="inputLable"><b>NID:</b></label>
                    <input class="form-control Input" id='nid' required></input>
                </div>

                <div class="form-row">
                    <label for="name " class="inputLable"><b>Adrress:</b></label>
                    <input class="form-control Input" id="name" aria-describedby="validationServer03Feedback"
                        required></input>
                </div>

                <div>
                    <label for="birth-date" class="inputLableOne"><b>Birth Date:</b></label>
                    <input class="form-control InputOne" id='birthDate' name="birthDate" value="YYYY/MM/DD"></input>
                    <small> </small>
                    <label for="birthNO" class="inputLable LableTwo"><b>Birth Certificate
                            No:</b></label>
                    <input class="form-control InputTwo" id='birthvertifiacateNo' name="birthCertificateNo"></input>
                </div>


                <div class="form-row">
                    <label for="exampleFormControlInput1" class="inputLable"><b>Email
                        </b></label>
                    <input type="email" class="form-control Input" id="exampleFormControlInput1" required
                        placeholder="name@example.com">
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


                <div class='form-row'>
                    <label class="inputLable"><b>Job type </br></label>
                    <label class="inputLable"></b></label>

                    <select class="form-control Input" onclick="showCheckboxes() ">
                        <!-- <option>Select an option</option>  select krapua pennanna hadann ooona-->
                    </select>
                    <!-- <div class="overSelect"></div> -->

                    <div id="checkboxes" class="checksbox" name="checkbox">

                        <label for="one" class="form-control">
                            <input type="checkbox" id="Goverment" name="Goverment" />&nbsp; &nbsp;Goverment</label>
                        <label for="two" class="form-control">
                            <input type="checkbox" id="Private" name="Private" /> &nbsp; &nbsp;Private</label>
                        <label for="three" class="form-control">
                            <input type="checkbox" id="Retired" name="Retired" /> &nbsp; &nbsp; Retired</label>
                        <label for="four" class="form-control">
                            <input type="checkbox" id="Own Bussiness" name="Own Bussiness" /> &nbsp; &nbsp;Own
                            Bussiness</label>
                        <label for="four" class="form-control">
                            <input type="checkbox" id="SelfEmployee" name="Own Bussiness" /> &nbsp; &nbsp;Self
                            Employee</label>
                        <label for="four" class="form-control">
                            <input type="checkbox" id="Jobless" name="jobless" /> &nbsp; &nbsp;Jobless</label>
                    </div>
                </div>



                <div class="form-row">
                    <label class="inputLable" for="CivilStatus"><b>Civil status:</b></label>
                    <select class="form-control Input" name="trustee" id="civilStatus" name="civilStatus">
                        <option value="unmarried">Unmarried</option>
                        <option value="married">Married</option>
                    </select>
                </div>


                <div>
                    <label class='inputLableOne' for="phone-number"><b>Contact Number 1:</b></label>
                    <input class="form-control InputOne" id='phone-number-1' name="phoneNumber1" required></input>

                    <label class='inputLable LableTwo' for="phone-number"><b>Contacy Number 2:</b></label>
                    <input class="form-control InputTwo" id='phone-number2' name="phoneNumber2" required></input>
                </div>



                <div class="form-row">
                    <label for="nid" class="inputLable"><b>Trustee:</b></label>
                    <input class="form-control Input" id='nid' class="form-control Input" required></input>
                </div>

                <div class="Twobtn">

                    <button type="submit" class=' btn btn-primary '>Confirm</button>
                    <button class=' btn btn-primary '>View List</button>
                </div>
            </fieldset>

        </form>



    </div>
    </div>
    <script type="text/javascript">
    var expanded = false;

    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
    </script>

    <?php include VIEW.'includes/footer.php' ?>