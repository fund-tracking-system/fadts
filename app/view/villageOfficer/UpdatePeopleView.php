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
                            style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px; padding:20px;"
                            placeholder="9 7 2 8 1 0 1 7 7 v" name="NID"></input>

                        <button style="margin-left: 70%; margin-top:-50px; width:13%; margin-bottom:20px;" type="submit"
                            class="btn btn-primary">Search</button>
                    </div>

                </fieldset>

            </fieldset>

        </form>


        <form>
            <fieldset style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px;padding-top:20px; ">
                <h2 style="margin-bottom:50px;">UPDATE PEOPLE DATA</h2>


                <div class="form-row">
                    <label for="name " style="margin-left:70px;margin-bottom:18px;"><b>Name:</b></label>
                    <input class="form-control" id="name"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-40px;" name="name"
                        value="name display only" readonly></input>
                </div>

                <div class="form-row">
                    <label for="Address" style="margin-left:50px;margin-bottom:-35px;"><b> Address:</b></label>
                    <input class="form-control" id="address"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-8px;" name="address"
                        placeholder="Opatha,ganegoda,Elptye,Galle"></input>
                </div>

                <div style="display:flex;">
                    <label for="birth-date" style="margin-left:70px;margin-bottom:18px;"><b>Birth Date:</b></label>
                    <input class="form-control" id='birthDate' style="margin-left:30px;margin-right:150px;" name="birthDate"
                        value="Birth date read only" readonly></input>
                    <small> </small>
                    <label for="birth-date" style="margin-left:70px;margin-bottom:18px;"><b>Birth Certificate
                            No:</b></label>
                    <input class="form-control" id='birthvertifiacateNo'
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;" name="birthCertificateNo"
                        aria-describedby="validationServer03Feedback" readonly></input>
                </div>



                <div class="form-row">
                    <label for="region" style="margin-left:70px;margin-bottom:18px;"><b>Region:</b></label>
                    <select class="form-control" name="region"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;margin-top:-40px;" id="region" name="region">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>

                <div style="display:flex;">
                    <label class='phone-number-label' for="job"
                        style="margin-left:70px;margin-bottom:18px;"><b>Job:</b></label>
                    <input class="form-control" id='job' style="margin-left:40px;margin-bottom:20px;margin-right:150px;" name="job"></input>
                    <label for='job-type' style="margin-left:70px;margin-bottom:18px;"><b>Job Type:</b></label>
                    <input class="form-control" id='job-type'
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;"
                        name="JobType"></input>
                </div>



                <fieldset
                    style="margin-top:20px;margin-bottom:20px;margin-left:20px; margin-right:110px;padding-top:30px; border-radius:10px; ">
                    <div class="form-row">
                        <label for="trustee" style="margin-left:70px;margin-bottom:-35px;"><b>Trustee
                            </b></label>
                        <input class="form-control" id="trustee"
                            style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-8px;"
                            aria-describedby="validationServer03Feedback" readonly></input>
                    </div>

                    <div class="form-row">
                        <div style="display:flex;">
                            <label class='phone-number-label' for="phone-number"
                                style="margin-left:70px;margin-bottom:18px;"><b>Phone Number1:</b></label>
                            <input class="form-control" id='phone-number-1'
                                style="margin-left:10px;margin-bottom:20px;margin-right:150px;"
                                aria-describedby="validationServer03Feedback" readonly name="phoneNumber1"></input>




                            <label class='phone-number-label' for="phone-number"
                                style="margin-left:70px;margin-bottom:18px;"><b>Phone Number2:</b></label>
                            <input class="form-control" id='phone-number2'
                                style="margin-left:150px;margin-bottom:20px;margin-right:150px;"name="phoneNumber2"
                                aria-describedby="validationServer03Feedback" readonly></input>
                        </div>
                    </div>
                </fieldset>
                <div class="form-row">
                    <label class='trustee-label' for="CivilStatus"
                        style="margin-left:70px;margin-bottom:18px; margin-top:30px;"><b>Civil</br>status:</b></label>
                    <select class="form-control" name="trustee" id="civilStatus"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-60px;"name="civilStatus">
                        <option value="UnMarrried">Married</option>
                        <option value="Married">Maried</option>
                    </select>

                </div>
                <div class='buttons' style="margin-left:870px;">

                    <button type="submit" class='confirm-button btn btn-primary '>Confirm</button>
                    <button class='confirm-button btn btn-primary '>View List</button>
                </div>




            </fieldset>

        </form>
    </div>
</div>
<?php include VIEW.'footer.php' ?>