<?php include VIEW.'header.php' ?>

`<?php include VIEW.'ministry/sidebar.php' ?>

<div style="background-color:#ced4da">

    <form class="SearchByCriteriaform1" id="formAddPeople">

        <fieldset
            style="background-color:#fffef4;margin-left:20px  border-bottom:10px; padding-bottom:12px;padding-top:20px; ">
            <h1 style="color:black ; margin-bottom:18px;padding-top:10px;text-align: center;"> Add Peoples </h2>
                <div class="form-row">
                    <label for="name" style="margin-left:60px;margin-bottom:18px;"><b>Name:</b></label>
                    <input class="form-control" id="name" name="name" 
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback" placeholder="Name In Full"></input>
                </div>


                <div class="form-row">
                    <label for="nid" style="margin-left:90px;margin-bottom:18px;"><b>NID:</b></label>
                    <input class="form-control" id='nid' name="nid" 
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback" ></input>
                </div>

                <div class="form-row">
                    <label for="address" style="margin-left:70px;margin-bottom:18px;"><b>Adrress:</b></label>
                    <input class="form-control" id="address" name="address" 
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback"></input>
                </div>

                <div style="display:flex;">
                    <label for="birth_date" style="margin-left:70px;margin-bottom:18px;"><b>Birth Date:</b></label>
                    <input class="form-control" id='birth_date' name="birth_date" type="date" 
                        style="margin-left:30px;margin-bottom:20px;margin-right:150px;"
                        aria-describedby="validationServer03Feedback"></input>
                    <small> </small>
                    <label for="birth_no" style="margin-left:70px;margin-bottom:18px;"><b>Birth Certificate
                            No:</b></label>
                    <input class="form-control" id='birth_no' name="birth_no" type="number" 
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;"
                        aria-describedby="validationServer03Feedback" ></input>
                </div>

                <div class="form-row">
                    <label for="email" style="margin-left:70px;margin-bottom:18px;"><b>Email
                            </b></label>
                    <input type="email" class="form-control" id="email" name="email" 
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%" placeholder="name@example.com">
                </div>

                <div class="form-row">
                    <label for="region" style="margin-left:70px;margin-bottom:18px;"><b>Region:</b></label>
                    <select class="form-control" name="region"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;  margin-top:-3.5%" id="region">
                        <option value="">---SELECT REGION---</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>

                <div style="display:flex;">
                    <label class='job-label' for="job" style="margin-left:70px;margin-bottom:18px;"><b>Job:</b></label>
                    <input class="form-control" id='job' name="job" style="margin-left:-30px;margin-bottom:20px;margin-right:150px;"
                        aria-describedby="validationServer03Feedback"></input>
                    <label for='job_type' style="margin-left:70px;margin-bottom:18px;"><b>Job Type:</b></label>
                    <input class="form-control" id='job_type' name="job_type" 
                        style="margin-left:10px;margin-bottom:20px;margin-right:150px;"
                        aria-describedby="validationServer03Feedback"></input>
                </div>




                <div class="form-row">
                    <label for="civil_status" style="margin-left:40px;margin-bottom:18px;"><b>Civil Status:</b></label>
                    <input class="form-control" id="civil_status" name="civil_status" 
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback"></input>
                </div>

                <div class="form-row">
                    <div style="display:flex;">
                        <label class='phone-number-label' for="phone_number"
                            style="margin-left:70px;margin-bottom:18px;"><b>Phone Number1:</b></label>
                        <input class="form-control" id='phone_number' name="phone_number" type="number" 
                            style="margin-left:5px;margin-bottom:20px;margin-right:150px;"
                            aria-describedby="validationServer03Feedback"></input>




                        <label class='phone-number-label' for="phone-number1"
                            style="margin-left:70px;margin-bottom:18px;"><b>Phone Number2:</b></label>
                        <input class="form-control" id='phone_number1' type="number" name="phone_number1" 
                            style="margin-left:150px;margin-bottom:20px;margin-right:150px;"
                            aria-describedby="validationServer03Feedback"></input>
                    </div>
                </div>

                <div class="form-row">
                    <label for="trustee" style="margin-left:70px;margin-bottom:18px;"><b>Trustee:</b></label>
                    <input class="form-control" id='trustee' name="trustee" type="number" 
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback"></input>
                </div>


                <div class='buttons' style="margin-left:900px;">

                    <button type="submit" class='confirm-button btn btn-primary '>Confirm</button>
                    <button class='confirm-button btn btn-primary '>View List</button>
                </div>
        </fieldset>

    </form>



</div>

<?php include('footer.php');?>