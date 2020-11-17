<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/ministry/addOfficerModel" id="formAddOfficer">
            <fieldset class="BackgroundFS">
                <h2> ADD OFFICER FORM </h2>

                <fieldset class="searchBar">   
                    <div class="form-row">
                        <label for="name" class="inputLable"><b>Name:</b></label>
                        <input class="form-control Input" name="name"></input>
                    </div>

                    <div class="form-row">
                        <label for="nid" class="inputLable"><b>NID:</b></label>
                        <input class="form-control Input" name="nid"></input>
                    </div>

                    <div class="form-row">
                        <label for="email" class="inputLable"><b>E-mail:</b></label>
                        <input class="form-control Input" type="email" name='email'></input>
                    </div> 

                    <div class="form-row">
                        <label for="loginStatus" class="inputLable"><b>Login status:</b></label>
                        <select class="form-control Input" name="loginStatus">
                            <option value="permitted">Permitted</option>
                            <option value="denied">Denied</option> 
                        </select>
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