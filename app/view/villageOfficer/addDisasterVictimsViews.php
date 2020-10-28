<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div>
    <div class='SearchByCriteriaform1'>



        <form class="form" method="post" action="" id="form">

            <fieldset class="BackgroundFS">

                <h2>ADD VICTIMS TO DISASTER
                </h2>

                </br>
                </br>
                <div class="form-row">
                    <label for="select-disaster" class="detailsLable"><b>Disaster
                            Type:</b></label>
                    <select name="select-disaster" id="select-disaster" class="form-control inputDetails"
                        name="disaster">
                        <option value="Flood" name="Flood">Flood</option>
                        <option value="Landslide" name="Landslide">Landslide</option>
                        <option value="Hurricanes" name="Hurricanes">Hurricanes</option>
                        <option value="Tsunami" name="Tsunamiable">Tsunami</option>
                        <option value="Fire" name="Fire">Fire</option>

                    </select>
                </div>


                <div class="form-row">
                    <label for="select-disasterName" class="detailsLable"><b>Disaster
                            Name:</b></label>
                    <input class="form-control inputDetailsFunfInput" id="neame" name="name"></input>
                </div>



                <div class="form-row">
                    <label for="select-disaster" class="detailsLable"><b>Disaster
                            Date:</b></label>
                    <input class="form-control inputDetails" placeholder="YYYY/MM/DD" id="Date" name="Date"></input>
                </div>

                <button class='btn btn-primary location'>Select Fund</button>
            </fieldset>

        </form>
    </div>
</div>

<?php include VIEW.'includes/footer.php' ?>