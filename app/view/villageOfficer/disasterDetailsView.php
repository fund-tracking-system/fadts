<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1 ">
        <form method="post" style=margin-top:-15px; id="form">
            <fieldset style="background-color:#fffef4;">
                <h2 style="margin-bottom:10%; margin-bottom:130px;margin-top:30px;"> Disaster details</h2>
                <div class="form-row" style="margin-top:-40px;">
                    <label for="select-disaster" style="margin-left:300px;margin-bottom:38px;"><b>Select
                            Disaster:</b></label>
                    <select name="select-disaster" id="select-disaster" class="form-control" name="disaster"
                        style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                        <option value="volvo" name="disaster1">Volvo</option>
                        <option value="saab" name="disaster2">Saab</option>
                        <option value="mercedes" name="disaster3">Mercedes</option>
                        <option value="audi" name="disaster4">Audi</option>
                    </select>
                </div>
                <div class="form-row" style="margin-top:40px;">
                    <label for="select-disaster" style="margin-left:300px;margin-bottom:25px;"><b>Disaster
                            Date:</b></label>
                        <input class="form-control" id="Date" name="Date"
                            style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;"></input>


                </div>
                <div class="form-row" style="margin-top:5%;">
                    <label for="select-region" style="margin-left:300px;margin-bottom:18px;"><b>Select
                            Region:</b></label>
                    <select name="select-region" id="select-region" class="form-control" name="region"
                        style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <button class='btn btn-primary'
                    style=" margin-left: 43%;height: 30px; border-radius: 5px; padding-bottom:40px; margin-bottom:5%; margin-top:5%;">View
                    Select Disaster</button>
            </fieldset>



        </form>

    </div>
</div>

<?php include VIEW.'footer.php' ?>