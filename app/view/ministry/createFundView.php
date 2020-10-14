<?php include VIEW.'header.php' ?>

<?php include VIEW.'ministry/sidebar.php' ?>


<div class="all_bacground_clor">



    <form>
        <div class="SearchByCriteriaform1">
            <fieldset
                style="background-color:#fffef4;height:580px;  ">
                <h2 style="color:black ; margin-bottom:50px;padding-top:10px;"> Create New Fund</h2>

                <div class="form-row" style="margin-bottom:30px;">
                    <label for="disaster-name" style="margin-left:60px;margin-bottom:30px;"><b>Fund Name:</b></label>
                    <input class="form-control" id="newFund-name"
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-4.5%;"
                        aria-describedby="validationServer03Feedback" required></input>
                </div>
                <div class="form-row " style="margin-bottom:30px;">
                    <label for="disaster" style="margin-left:70px;margin-bottom:30px;"><b>Fund Type:</b></label>
                    <select class="form-control" name="disaster" id="disaster"
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-4.5%;">
                        <option value="ganwathura">Disaster 1</option>
                        <option value="sunami">Disaster 2</option>
                        <option value="lewgini">Disaster 3</option>
                        <option value="covid">Disaster 4</option>
                    </select>
                </div>

                <div class="form-row "style="margin-bottom:30px;">
                    <label for="date" style="margin-left:70px;margin-bottom:30px;"><b>Create Date:</b></label>
                    <input placeholder="YYYY/MM/DD" class="form-control" id='create-date'
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-4.5%;"
                        aria-describedby="validationServer03Feedback" required></input>
                    <small></small>
                </div>
                <div class="form-row " style="margin-bottom:30px;">
                    <label for="date" style="margin-left:70px;margin-bottom:30px;"><b>Fund Size:</b></label>
                    <input placeholder="125 000 000" class="form-control" id='fund-size'
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-4.5%;"
                        aria-describedby="validationServer03Feedback" required></input>
                    <small></small>
                </div>
                <div class="form-row " style="margin-bottom:30px;">
                    <label for="description" style="margin-left:70px;margin-bottom:30px;"><b>Description:</b></label>
                    <textarea class="form-control" id="description" rows="3"
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-4.5%;"
                        aria-describedby="validationServer03Feedback" required>  </textarea>
                </div>
                <button style="margin-left: 75%; width:13%" type="submit" class="btn btn-primary">Next</button>

            </fieldset>


    </form>
</div>

</div>
<?php include VIEW.'footer.php'?>