<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">


        <form>
            <fieldset class="BackgroundFS">
                <h2> CREATE NEW FUND</h2>

                <div class="form-row">
                    <label for="Fund-name" class="inputLable"><b>Fund Name:</b></label>
                    <input class="form-control Input" id="newFund-name" name="newFundName" required></input>
                </div>

                <div class="form-row ">
                    <label for="fundType" class="inputLable"><b>Fund Type:</b></label>
                    <select class="form-control Input" name="disaster" id="disaster">
                        <option value="ganwathura">Disaster 1</option>
                        <option value="sunami">Disaster 2</option>
                        <option value="lewgini">Disaster 3</option>
                        <option value="covid">Disaster 4</option>
                    </select>
                </div>

                <div class="form-row ">
                    <label for="date" class="inputLable"><b>Create Date:</b></label>
                    <input placeholder="YYYY/MM/DD" class="form-control Input" id='create-date' name="createDate"
                        required></input>
                    <small></small>
                </div>
                <div class="form-row ">
                    <label for="date" class="inputLable"><b>Fund Size:</b></label>
                    <input placeholder="125 000 000" class="form-control Input" id='fund-size' name="fundSize"
                        required></input>
                    <small></small>
                </div>

                <div class="form-row ">
                    <label for="description" class="inputLable"><b>Description:</b></label>
                    <textarea class="form-control Input txtWidth " id="description" name="description" required>  </textarea>
                </div>
                
              <button type="submit" class="btn btn-primary siz">Next</button>

            </fieldset>
        </form>
    </div>

</div>
<?php include VIEW.'includes/footer.php'?>