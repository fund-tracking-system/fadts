<?php include('header.php');?>

<div style="background-color:#ced4da">

    <form class="SearchByCriteriaform1" id="formAddOfficer">
        <div>

            <fieldset
                style="background-color:#fffef4;margin-left:20px  border-bottom:10px; padding-bottom:12px;padding-top:20px; ">

                <h2 style="color:black ; margin-bottom:25px;padding-top:10px;text-align: center;">Add Officer Form
                </h2>
                <div class="form-row">
                    <label for="officer_id" style="margin-left:70px;margin-bottom:18px;"><b>Officer ID: *</b></label>
                    <input class="form-control" id="officer_id" name="officer_id" type="number" 
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px;margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback"></input>

                </div>
                <div class="form-row">

                    <label for="nid" style="margin-left:70px;margin-bottom:18px;"><b>NID:</b></label>
                    <input class="form-control" name="nid" id='nid'
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback" ></input>
                </div>




                <div class="form-row">
                    <label for="name" style="margin-left:70px;margin-bottom:18px;"><b>Name:</b></label>
                    <input class="form-control" id="name" name="name" 
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback" ></input>
                </div>

                <div class="form-row">
                    <label for="birth_date" style="margin-left:70px;margin-bottom:18px;"><b>Birth Date:</b></label>
                    <input class="form-control" id='birth_date' name="birth_date" type="date" 
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px;margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback" ></input>
                </div>

                <div class="form-row">
                    <label for="region" style="margin-left:70px;margin-bottom:18px;"><b>Region:</b></label>
                    <select class="form-control" name="region"
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px;margin-top:-3.5%" id="region">
                        <option value="">--SELECT--</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="form-row">

                    <label for="position" style="margin-left:70px;margin-bottom:18px;"><b>Position:</b></label>
                    <select class="form-control" name="position" id="position"
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px;margin-top:-3.5%">
                        <option value="">--SELECT--</option>
                        <option value="volvo">Divisional Secretary</option>
                        <option value="saab">District sectrary</option>
                        <option value="mercedes">auditor</option>
                        <option value="audi">Vilage Officer</option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="civil_status" style="margin-left:70px;margin-bottom:18px;"><b>Civil Status:</b></label>
                    <input class="form-control" id="civil_status" name="civil_status" 
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px;margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback"></input>
                </div>
                <div class="form-row">
                    <label for="phone_number" style="margin-left:70px;margin-bottom:18px;"><b>Phone Numb:</b></label>
                    <input class="form-control" id='phone_number' name="phone_number" type="number" 
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px;margin-top:-3.5%"
                        aria-describedby="validationServer03Feedback"></input>
                </div>

                <div class='buttons' style="margin-left:900px;">

                    <button class='confirm-button btn btn-primary '>Confirm</button>
                    <button class='view-list-button btn btn-primary'>View List</button>
                </div>
            </fieldset>

        </div>
    </form>





</div>

<?php include('footer.php');?>