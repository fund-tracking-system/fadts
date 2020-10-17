<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>
<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">

        <form method="post" action="" id="form">
            <fieldset class="BackgroundFS">
                <h2>Fund Release Form</h2>


                <div class="form-row">
                    <label for="person-id" class="inputLable"><b>Person ID:</b></label>
                    <input id="person-id" class="form-control Input" aria-describedby="validationServer03Feedback"
                        value="person Name" readonly></input>
                </div>


                <div class="form-row">
                    <label for="name" class="inputLable"><b>Name:</b></label>
                    <input id="name" class="form-control Input" aria-describedby="validationServer03Feedback"
                        value="person Name" readonly></input>
                </div>

                <div class="form-row">
                    <label for="name" class="inputLable"><b>Amount:</b></label>
                    <input id="name" class="form-control Input" aria-describedby="validationServer03Feedback"
                        value="Name is read only" readonly></input>
                </div>



                <div class="form-row">
                    <label for="Pnumber" class="inputLable"><b>Phone Number:</b></label>
                    <input id="name" class="form-control Input" aria-describedby="validationServer03Feedback"
                        value="0932876272" readonly></input>
                </div>


                <div class="form-row">
                    <label for="OTP" class="inputLable"><b>OTP:</b></label>
                    <input id="OTP" class="form-control Input" aria-describedby="validationServer03Feedback"
                        placeholder="Enter Validation Code"></input>
                </div>


                <div class="Twobtn">

                    <button type="submit" class='confirm-button btn btn-primary '>REQ OTP</button>
                    <button class='confirm-button btn btn-primary '>Confirm</button>
                </div>

            </fieldset>
        </form>
    </div>

</div>

<?php include VIEW.'footer.php' ?>