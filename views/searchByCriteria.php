<?php include('header.php');?>
<div class="all_bacground_clor">

    <div>

        <form method="post" action="" id="formsearchCriteria">
            <div class="SearchByCriteriaform1">

                <fieldset style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px;padding-top:20px; ">
                    <h2 style="margin-bottom:50px; color:red;">Search By NID</h2>

                    <div class="form-row " style="display: flex;">
                        <div style="display: flex;">
                            <label for="nid" style="margin-left:70px;margin-bottom:-35px;"><b>SearchBy
                                    NID:</b></label>
                            <input class="form-control " id='nid' name="nid" 
                                style="margin-left:150px;margin-bottom:20px;margin-right:650px;"
                                placeholder="972810177v"></input>
                            <span id="text">errr</span>


                            <div class='button '>

                                <button type="submit" class='submit-button btn btn-primary btn btn-primary'
                                    style="margin-left:-600px;margin-top:0px; padding-bottom:10px;"
                                    onclick="validateNID()">Search</button>
                            </div>
                        </div>
                    </div>
                </fieldset>
        </form>
        <hr>
        <fieldset style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px;padding-top:20px; ">
            <form>
                <h2 style="margin-bottom:50px;">Search By Criteria</h2>

                <div class='form-row '>
                    <div style="display: flex;">
                        <label class='age-label '
                            style="margin-left:70px;margin-bottom:18px;margin-top:10px;"><b>Age:</b></label>
                        <input class='first form-control'
                            style="margin-left:150px;margin-bottom:20px;margin-right:150px;"></input><span class='to'
                            style=" margin-right:170px;"> <b> to</b></span>
                        <input class='second form-control'></input>
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
                            style="margin-left:70px;margin-bottom:18px;margin-top:10px;"><b>Gross
                                Income:</b></label>
                        <input class='first form-control'
                            style="margin-left:110px;margin-bottom:20px;margin-right:150px;"></input><span class='to'
                            style=" margin-right:150px;"> <b> to</b></span>
                        <input class='second form-control'></input>
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
                        style="margin-left:20.5%; margin-top:-1.5%; background-color:white; border:none ">
                        <label for="one">
                            <input type="checkbox" id="one" /><b>&nbsp; &nbsp;Samurdhi</label>
                        <label for="two">
                            <input type="checkbox" id="two" /> &nbsp; &nbsp;Retire</label>
                        <label for="three">
                            <input type="checkbox" id="three" /> &nbsp; &nbsp;Govi wishrama</label>
                        <label for="four">
                            <input type="checkbox" id="four" /> &nbsp; &nbsp;Wadihiti</b></label>
                    </div>
                </div>

                <div class='button '>

                    <button type="submit" class='submit-button  btn btn-primary'
                        style=" float: right;margin-top: 0px; padding-left:20px;padding-right:20px;padding-top:10px; padding-bottom:10px; margin-right:100px;">Search
                        Here</button>
                </div>




                <div style="background-color:white;">
                    <hr style="margin-top:50px;">
                    <h2 style="margin-bottom:50px;">FADTS|SearchBy NID Result</h2>

                    <div class="form-row " style="display: flex;">
                        <div style="display: flex; overflow:auto;">
                            <table style="overflow:auto; margin-left:300px;">

                                <tr>
                                    <th><B>FulName</B></th>
                                    <th><B>Address</B></th>
                                    <th><B>NidNumber</B></th>
                                    <th><B>GrossIncome</B></th>
                                    <th><B>jobStatus</B></th>
                                    <th><B>EligibleFunds</B></th>

                                </tr>
                            </table>
                        </div>
                    </div>



                </div>



        </fieldset>
    </div>
    </form>
</div>

<script type="text/javascript">
function validateNID(){
    
    text.innerHtml="hello";
    text.style.color="#fffff";
}var form =getElementById("form");
 var nid =getElementById("NID-number");
 var text =getElementById("text");
       


       
</script>

</div>
<?php include('footer.php');?>