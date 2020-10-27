<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>
<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">



        <form method="post" action="" id="form">
            <fieldset class="BackgroundFS">

                <h2>UPDATE OFFICER DETAILS</h2>
                <fieldset class="searchBar">
                    <div class="form-row ">

                        <label for="OID" class="searchBarLable"><b>OfficerID:</b></label>
                        <input class="form-control searchInput" id='OID-' placeholder="SPGAEL5050M" required></input>
                        <small></small>

                        <button type="submit" class="btn btn-primary btnNav">Search</button>

                    </div>
                </fieldset>
            </fieldset>
        </form>
        <hr>



        <form>

            <fieldset class="BackgroundFS">
                <h2>UPDATE OFFICER DETAIL</h2>
                <div class="form-row">
                    <label for="officer-id" class="inputLable"><b>Officer ID:</b>
                    </label>
                    <input class="form-control Input" id="officer-id" required></input>

                </div>


                <div class="form-row">

                    <label for="nid" class="inputLable"><b>Officer NID</b></label>
                    <input class="form-control Input" id='nid' value="NID is read Only" readonly></input>
                </div>




                <div class="form-row">
                    <label for="name" class="inputLable"><b>Name:</b>
                    </label>
                    <input class="form-control Input" id="name" value="Name is read only" readonly></input>
                </div>

                <div class="form-row">
                    <label for="birth-date" class="inputLable"><b>Birth Date:</b>
                    </label>
                    <input class="form-control Input" id='birth-date' value="DOB is read only" readonly></input>
                </div>

                <div class="form-row">
                    <label for="region" class="inputLable"><b>Region:</b>
                    </label>
                    <select class="form-control Input" name="region">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>


                <div class="form-row">
                    <label for="position" class="inputLable"><b>Position:</b></label>
                    <select class="form-control Input" name="position" id="position">
                        <option value="volvo">Auditor</option>
                        <option value="saab">Vilage officer</option>
                        <option value="mercedes">Distric sercetery</option>
                        <option value="audi">Divisional Secetry</option>
                    </select>
                </div>


                <div class="form-row">
                    <label class="inputLable" for="CivilStatus"><b>Civil status:</b></label>
                    <select class="form-control Input" name="civilStatus" id="civilStatus" name="civilStatus">
                        <option value="unmarried">Unmarried</option>
                        <option value="married">Married</option>
                    </select>
                </div>


                <div class="form-row">
                    <label for="phone-number" class="inputLable"><b>Phone
                            Number:</b></label>
                    <input class="form-control Input" id='phone-number' required></input>
                </div>



                <div class="Twobtn">

                    <button type="submit" class=' btn btn-primary '>Confirm</button>
                    <button class=' btn btn-primary '>View List</button>
                </div>

            </fieldset>
        </form>
    </div>

</div>
<?php include VIEW.'includes/footer.php'?>