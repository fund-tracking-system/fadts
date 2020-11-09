<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">

    <div class="SearchByCriteriaform1">



        <form method="post" action="" id="form">
            <fieldset class="BackgroundFS">
                <h2>Pre Defined Fund</h2>
                <fieldset class="searchBar">
                    <legend><b>&nbsp;&nbsp;Search Pre Defined Functions</b></legend>
                    <div class="form-row ">
                        <label for="NID-number" class="searchBarLable"><b>Pre Defined Fund:</b></label>
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

                </br>
                </br>

                <fieldset style="margin:2%">
                    <legend><b>&nbsp;&nbsp;Search Manually Defined Funds</b>
                    </legend>

                    </br>

                    <div class="form-row">
                        <label for="FundName" class="inputLable"><b>Fund Name:</b></label>
                        <input class="form-control Input" id="FundName" required></input>

                    </div>


                    <div class="form-row ">
                        <label for="FundType" class="inputLable"><b>Fund Type:</b></label>
                        <select class="form-control Input" name="Fund" id="fundType">
                            <option value="Fire">Fire </option>
                            <option value="Flood">Flood </option>
                            <option value="lewgini">Tsunami </option>
                            <option value="LandSlide">LandSlide </option>
                            <option value="Sulisulan">Wind </option>
                        </select>
                    </div>

                    <div class="form-row">
                        <label for="date" class="inputLable"><b>Disaster Date:</b></label>
                        <input placeholder="YYYY/MM/DD" class="form-control Input" id='date' required></input>
                        <small></small>
                    </div>

                    <div class='button'>

                        <button type="submit" class=' btn btn-primary signlebtn'>Search
                            Here</button>
                    </div>


                </fieldset>
            </fieldset>




        </form>



    </div>
</div>
<?php include VIEW.'includes/footer.php'?>