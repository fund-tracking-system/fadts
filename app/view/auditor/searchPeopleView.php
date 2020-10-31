<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">



        <form method="post" action="" id="form">
            <fieldset class="BackgroundFS">
                <h2>Search By NID</h2>
                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="NID-number" class="searchBarLable"><b>NID Number:</b></label>
                        <input class="form-control searchInput" id='NID-number' placeholder="9 7 2 8 1 0 1 7 7 v"
                            name="NID"></input>
                        <button type="submit" class="btn btn-primary btnNav">Search</button>
                    </div>
                </fieldset>
            </fieldset>
        </form>


        <form method="post" id="form">
            <fieldset class="BackgroundFS">
                <h2>Search By Criteria</h2>


                <div>
                    <label class="inputLable"><b>Age:</b></label>
                    <input class="form-control InputOne" name="age1"></input><span class="inputLable LableTwo"> <b>
                            to</b></span>
                    <input class="form-control InputTwo" name="age2"></input>
                </div>

                 <div class='form-row'>
                    <label class="inputLable"><b>Job Type</br></label>
                    <label class="inputLable"></b></label>

                    <select class="form-control Input" onclick="showCheckboxes() ">
                        <!-- <option>Select an option</option> select kree mnwada kyla pennanna onna methana -->
                    </select>
                    <!-- <div class="overSelect"></div> - -->

                    <div id="checkboxes" class="checksbox" name="checkbox">
                    
                        <label for="one"class="form-control">
                            <input type="checkbox" id="Goverment" name="Goverment" />&nbsp; &nbsp;Goverment</label>
                        <label for="two" class="form-control">
                            <input type="checkbox" id="Private" name="Private" /> &nbsp; &nbsp;Private</label>
                        <label for="three" class="form-control">
                            <input type="checkbox" id="Retired" name="Retired" /> &nbsp; &nbsp; Retired</label>
                        <label for="four" class="form-control">
                            <input type="checkbox" id="Own Bussiness" name="Own Bussiness" /> &nbsp; &nbsp;Own Bussiness</label>
                        <label for="four" class="form-control">
                            <input type="checkbox" id="SelfEmployee" name="Own Bussiness" /> &nbsp; &nbsp;Self Employee</label>
                            <label for="four" class="form-control">
                            <input type="checkbox" id="Jobless" name="jobless" /> &nbsp; &nbsp;Jobless</label>
                    </div>
                </div> 





                <div style="  padding-top: 30px; ">
                    <label class="inputLable"><b>Prolonged</br>
                    </label>
                    <label class="inputLable">
                        Disorders/Diseases:</b></label>

                    <div class='radio1'>
                        <input type="radio" id="have-pro" name="prolonged" value="have" class="radioHaveInput">
                        <label for="have-pro" class="radioHaveLable"></label><span><b>Have</b></span>
                    </div>
                    <div class='radio2'>
                        <input type="radio" id="no-pro" name="prolonged" value="no">
                        <label for="no-pro"class="radioLbl2"></label><span><b>No</b></span>
                    </div>
                </div>



                <div class="margn">
                    <div>
                        <label class="inputLable"><b>Gross
                                Income:</b></label>
                        <input class="form-control InputOne" ame="income1"></input><span class="inputLable LableTwo">
                            <b> to</b></span>
                        <input class="form-control InputTwo" name="income2 "></input>
                    </div>
                </div>


                <div class='form-row'>
                    <label class="inputLable"><b>Current Funds :</br></label>
                    <label class="inputLable"></b></label>

                    <select class="form-control Input" onclick="showCheckboxesTwo() ">
                          <!-- <option>Select Option</option>  Select krapuwa peenna hadanna oona methana -->
                    </select>
                    <!-- <div id="overSelect"></div>  -->

                    <div id="checkbox2" class="checksbox" name="checkbox">
                    
                        <label for="one"class="form-control">
                            <input type="checkbox" id="Samurdhi" name="Samurdhi Fund" />&nbsp; &nbsp;Samurdhi Fund</label>
                        <label for="two" class="form-control">
                            <input type="checkbox" id="farmer" name="farmer" /> &nbsp; &nbsp;Farmers' pensions</label>
                        <label for="three" class="form-control">
                            <input type="checkbox" id="Disable" name="Disable" /> &nbsp; &nbsp; Disable Fund</label>
                        <label for="four" class="form-control">
                            <input type="checkbox" id="Elder" name="Elder" /> &nbsp; &nbsp;Elder's Fund</label>
                        <label for="four" class="form-control">
                            <input type="checkbox" id="Pandemic" name="Pandemic" /> &nbsp; &nbsp;Covid-19 5000</label>
                    
                    </div>
                </div>


                <div class='button '>

                    <button type="submit" class=' btn btn-primary signlebtn' >Search
                        Here</button>
                </div>

            </fieldset>
        </form>
    </div>
</div>



<!-- checkBox scriptFiles  -->


<script type="text/javascript">
var expanded = false;

var expand=false;


function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if (!expand) {
        checkboxes.style.display = "block";
        expand = true;
    } else {
        checkboxes.style.display = "none";
        expand = false;
    }
}


function showCheckboxesTwo() {
    var checkboxs = document.getElementById("checkbox2");
    if (!expanded) {
        checkboxs.style.display = "block";
        expanded = true;
    } else {
        checkboxs.style.display = "none";
        expanded = false;
    }

}
</script>


<?php include VIEW.'includes/footer.php' ?>