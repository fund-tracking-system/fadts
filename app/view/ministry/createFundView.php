<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/ministry/createFundModel" id="formAddOfficer">
            <fieldset class="BackgroundFS">
                <h2> CREATE FUND </h2>

                <fieldset class="searchBar">   
                    <div class="form-row">
                        <label for="name" class="inputLable"><b>Name:</b></label>
                        <input class="form-control Input" name="name"></input>
                    </div>

                    <div class="form-row">
                        <label for="amount" class="inputLable"><b>Amount per person:</b></label>
                        <input class="form-control Input" name="amount"></input>
                    </div>

                    <div class="form-row">
                        <label for="description" class="inputLable" ><b>Description:</b></label>
                        <textarea class="form-control Input txtWidth" id="description" name="description" ></textarea>
                    </div>

                    <div class='buttons'>
                        <button type="submit" name= "submit" class='btn btn-primary signlebtn'>Next</button> 
                    </div>
                </fieldset>    
            </fieldset>
        </form>
    </div>
</div>

<?php include VIEW.'includes/footer.php'?>