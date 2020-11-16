<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">



        <form method="post" action="" id="form">
            <fieldset class="BackgroundFS">
                <h2> VIEW GENERIC FUND </h2>
                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="NID-number" class="searchBarLable"><b>Pre Defined Fund:</b></label>

                        <!-- <input class="form-control searchInput" id='NID-number' placeholder="9 7 2 8 1 0 1 7 7 v"
                            name="NID"></input> -->
                        <select class="form-control searchInput" name="select-PreFund" id="select-PreFund">
                            <option value="Samurdhi">Samurdhi</option>
                            <option value="Disabled">Disabled</option>
                            <option value="govi vishrama">govi vishrama</option>
                            <option value="Wedihity deemana">Wedihity deemana</option>
                        </select>

                        <button type="submit" class="btn btn-primary btnNav">Select</button>
                    </div>
                </fieldset>
            </fieldset>
        </form>






        <form>
            <fieldset class="BackgroundFS">

                <fieldset class="userpro">
                    <h2> SEARCH MANUALLY DEFINED FUND </h2>
                    </br>
                    </br>


                    <div class="form-row">
                        <label for="FundName" class="inputLable"><b>Fund
                                Name:</b></label>
                        <input class="form-control Input" id="fundName" name="fundName" required></input>

                    </div>

                    <div class="form-row ">
                        <label for="fundType" class="inputLable"><b>Fund
                                Type:</b></label>
                        <select class="form-control Input" name="Fund" id="Fund" name="fund">
                            <option value="MdFund1">MD fund1 </option>
                            <option value="MdFund2">MdFund2 </option>
                            <option value="MdFund3">MdFund3 </option>>
                        </select>
                    </div>

                    <div class="form-row">
                        <label for="date" class="inputLable"><b>Date created:</b></label>
                        <input placeholder="YYYY/MM/DD" class="form-control Input" nameid='date' name="date"
                            required></input>
                        <small></small>
                    </div>

                    <div class='button '>

                        <button type="submit" class=' btn btn-primary signlebtn'>Search
                            Here</button>
                    </div>


                </fieldset>
            </fieldset>




        </form>
    </div>
</div>
<?php include VIEW.'includes/footer.php'?>