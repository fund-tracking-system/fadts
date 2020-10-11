<?php include('header.php');?>
<div style="background-color:#ced4da">

    <div>

        <form id="formUpdateOfficer">
            <div class="SearchByCriteriaform1">
                <fieldset
                    style="background-color:#fffef4;margin-left:20px  border-bottom:10px; padding-bottom:12px;padding-top:20px; ">
                    <h2 style="margin-bottom:50px;">UPDATE OFFICER DETAILS</h2>
                    <fieldset Style="margin:2%;border-radius:5px; padding-top:2%;">
                        <div class="form-row " style="display: flex;">
                            <div style="display: flex;">
                                <label for="id"
                                    style="margin-left:80px;margin-bottom:-35px; margin-top:5px;"><b>OfficerID:</b></label>
                                <input class="form-control " id='id' name="id" 
                                    style="margin-left:50px;margin-bottom:20px;margin-right:50px; width:400px;"
                                    placeholder="18100west" required></input>
                                <small></small>

                                <div class='button '>

                                    <button type="submit" class='submit-button btn btn-primary btn btn-primary'
                                        style="margin-left:20px;margin-top:0px; padding-bottom:10px;">Search</button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </fieldset>
        </form>
<hr>
        <form id="formUpdateOffice1">
            <fieldset
                style="background-color:#fffef4;margin-left:20px  border-bottom:10px; padding-bottom:12px;padding-top:20px; ">
                <h2 style="margin-bottom:50px;">UPDATE OFFICER DETAIL</h2>
                <div class="form-row">
                    <label for="id1" style="margin-left:70px;margin-bottom:18px;"><b>Officer ID:</b></label>
                    <input class="form-control" id="id1" name="id1" 
                        style="margin-left:180px;margin-bottom:50px;margin-right:150px; margin-top:-4%;"
                        aria-describedby="validationServer03Feedback" required></input>

                </div>
                <div class="form-row">

                    <label for="nid" style="margin-left:70px;margin-bottom:18px;"><b>NID:</b></label>
                    <input class="form-control " id='nid'
                        style="margin-left:180px;margin-bottom:50px;margin-right:150px; margin-top:-4%;"
                        aria-describedby="validationServer03Feedback" value="NID is read Only" readonly></input>
                </div>




                <div class="form-row">
                    <label for="name" style="margin-left:70px;margin-bottom:18px;"><b>Name:</b></label>
                    <input class="form-control" id="name"
                        style="margin-left:180px;margin-bottom:50px;margin-right:150px;margin-top:-4%;"
                        aria-describedby="validationServer03Feedback" value="Name is read only" readonly></input>
                </div>

                <div class="form-row">
                    <label for="birth-date" style="margin-left:70px;margin-bottom:18px;"><b>Birth Date:</b></label>
                    <input class="form-control" id='birth-date'
                        style="margin-left:180px;margin-bottom:50px;margin-right:150px; margin-top:-4%;"
                        aria-describedby="validationServer03Feedback" value="DOB is read only" readonly></input>
                </div>

                <div class="form-row">
                    <label for="region" style="margin-left:70px;margin-bottom:18px;"><b>Region:</b></label>
                    <select class="form-control" name="region"
                        style="margin-left:180px;margin-bottom:50px;margin-right:150px; margin-top:-4%;" id="region">
                        <option value="">---SELECT REGION---</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="form-row">

                    <label for="position" style="margin-left:70px;margin-bottom:18px;"><b>Position:</b></label>
                    <select class="form-control" name="position" id="position"
                        style="margin-left:180px;margin-bottom:50px;margin-right:150px; margin-top:-4%;">
                        <option value="">---SELECT POSITION---</option>
                        <option value="volvo">Auditor</option>
                        <option value="saab">Vilage officer</option>
                        <option value="mercedes">Distric sercetery</option>
                        <option value="audi">Divisional Secetry</option>
                    </select>
                </div>
                <div style="  padding-top: 30px;">
                    <label class='prolonged-label' style="margin-left:70px;margin-bottom:18px;"><b>Civil</br>
                    </label>
                    <label class='prolonged-label' style="margin-left:70px;margin-bottom:18px; ">
                        Status:</b></label>

                    <div class='radio1'>
                        <input type="radio" id="have-pro" name="prolonged" value="have"
                            style="margin-left:20px;margin-bottom:18px;">
                        <label for="have-pro"
                            style="margin-left:-130px;margin-bottom:20px;margin-right:150px;"></label><span><b>Have</b></span>
                    </div>
                    <div class='radio2'>
                        <input type="radio" id="no-pro" name="prolonged" value="no">
                        <label for="no-pro" style="margin-left:10px; "></label><span><b>No</b></span>
                    </div>
                </div>

                <div class="form-row" style="margin-top:30px;">
                    <label for="phone_number" style="margin-left:50px;margin-bottom:18px;"><b>Phone
                            Number:</b></label>
                    <input class="form-control" id='phone_number' type="number" name="phone_number" 
                        style="margin-left:180px;margin-bottom:50px;margin-right:150px; margin-top:-4%;"
                        aria-describedby="validationServer03Feedback" required></input>
                </div>

                <div class='buttons' style="margin-left:900px;">

                    <button type="submit" class='confirm-button btn btn-primary '>Confirm</button>
                    <button class='confirm-button btn btn-primary '>View List</button>
                </div>
            </fieldset>
        </form>
    </div>






</div>
<?php include('footer.php');?>