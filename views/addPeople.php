<?php include('header.php');?>

<div style="background-color:#ced4da">

    <form class="SearchByCriteriaform1">

        <fieldset
            style="background-color:#fffef4;margin-left:20px  border-bottom:10px; padding-bottom:12px;padding-top:20px; ">
            <h1 style="color:black ; margin-bottom:18px;padding-top:10px;text-align: center;"> Add Peoples </h2>
                <div class="form-row">
                    <label for="officer-id" style="margin-left:60px;margin-bottom:18px;"><b>Name:</b></label>
                    <input class="form-control" id="officer-id"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback" placeholder="Name In Full" required></input>
                </div>


                <div class="form-row">
                    <label for="nid" style="margin-left:90px;margin-bottom:18px;"><b>NID:</b></label>
                    <input class="form-control" id='nid'
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback" required></input>
                </div>

                <div class="form-row">
                    <label for="name " style="margin-left:70px;margin-bottom:18px;"><b>Adrress:</b></label>
                    <input class="form-control" id="name"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback" required></input>
                </div>

                <div style="display:flex;">
                    <label for="birth-date" style="margin-left:70px;margin-bottom:18px;"><b>Birth Date:</b></label>
                    <input class="form-control" id='date'
                        style="margin-left:30px;margin-bottom:20px;margin-right:150px;"
                        aria-describedby="validationServer03Feedback" required></input>
                    <small> </small>
                    <label for="birth-date" style="margin-left:70px;margin-bottom:18px;"><b>Birth Certificate
                            No:</b></label>
                    <input class="form-control" id='date'
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;"
                        aria-describedby="validationServer03Feedback" required></input>
                </div>

                <div class="form-row">
                    <label for="exampleFormControlInput1" style="margin-left:70px;margin-bottom:18px;"><b>Email
                            </b></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%" placeholder="name@example.com">
                </div>

                <div class="form-row">
                    <label for="region" style="margin-left:70px;margin-bottom:18px;"><b>Region:</b></label>
                    <select class="form-control" name="region"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;  margin-top:-3.5%" id="region">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>

                <div style="display:flex;">
                    <label class='job-label' for="job" style="margin-left:70px;margin-bottom:18px;"><b>Job:</b></label>
                    <input class="form-control" id='job' style="margin-left:-30px;margin-bottom:20px;margin-right:150px;"
                        aria-describedby="validationServer03Feedback" required></input>
                    <label for='job-type' style="margin-left:70px;margin-bottom:18px;"><b>Job Type:</b></label>
                    <input class="form-control" id='job-type'
                        style="margin-left:10px;margin-bottom:20px;margin-right:150px;"
                        aria-describedby="validationServer03Feedback" required></input>
                </div>




                <div class="form-row">
                    <label for="civil-status" style="margin-left:40px;margin-bottom:18px;"><b>Civil Status:</b></label>
                    <input class="form-control" id="civil-status"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback" required></input>
                </div>

                <div class="form-row">
                    <div style="display:flex;">
                        <label class='phone-number-label' for="phone-number"
                            style="margin-left:70px;margin-bottom:18px;"><b>Phone Number1:</b></label>
                        <input class="form-control" id='phone-number'
                            style="margin-left:5px;margin-bottom:20px;margin-right:150px;"
                            aria-describedby="validationServer03Feedback" required></input>




                        <label class='phone-number-label' for="phone-number"
                            style="margin-left:70px;margin-bottom:18px;"><b>Phone Number2:</b></label>
                        <input class="form-control" id='phone-number'
                            style="margin-left:150px;margin-bottom:20px;margin-right:150px;"
                            aria-describedby="validationServer03Feedback" required></input>
                    </div>
                </div>

                <div class="form-row">
                    <label for="nid" style="margin-left:70px;margin-bottom:18px;"><b>Trustee:</b></label>
                    <input class="form-control" id='nid'
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback" required></input>
                </div>


                <div class='buttons' style="margin-left:900px;">

                    <button type="submit" class='confirm-button btn btn-primary '>Confirm</button>
                    <button class='confirm-button btn btn-primary '>View List</button>
                </div>
        </fieldset>

    </form>



</div>

<?php include('footer.php');?>