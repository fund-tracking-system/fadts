<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div style="background-color:#ced4da">

    <form class="SearchByCriteriaform1" method = "post" action = "/fadts/ministry/addOfficerModel">
            <fieldset style="background-color:#fffef4;margin-left:0px;height:600px;">
                <h2 style="color:black ; margin-bottom:55px;padding-top:10px; ">Add Officer Form</h2>
                
                <div class="form-row" style="margin-bottom:20px;">
                    <label for="nid" style="margin-left:70px;margin-bottom:18px;"><b>NID:</b></label>
                    <input class="form-control " name='nid' style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"></input>
                </div>

                <div class="form-row" style="margin-bottom:20px;">
                    <label for="name" style="margin-left:70px;margin-bottom:18px;"><b>Name</b></label>
                    <input class="form-control" name="name" style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%">
                </div> 
                
                <div class="form-row" style="margin-bottom:20px;">
                    <label for="password" style="margin-left:70px;margin-bottom:18px;"><b>Password:</b></label>
                    <input class="form-control " type="password" name='password' style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"></input>
                </div>

                <div class="form-row" style="margin-bottom:20px;">
                    <label for="email" style="margin-left:70px;margin-bottom:18px;"><b>E-mail:</b></label>
                    <input class="form-control" type="email" name='email' style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"></input>
                </div> 

                <div class="form-row" style="margin-bottom:20px;">
                    <label for="loginStatus" style="margin-left:70px;margin-bottom:18px;"><b>Login status:</b></label>
                    <select class="form-control" name="loginStatus" style="margin-left:180px;margin-bottom:20px;margin-right:150px;margin-top:-3.5%">
                        <option value="permitted">Permitted</option>
                        <option value="denied">Denied</option> 
                    </select>
                </div>

                <div class='buttons' style="margin-left:900px;">
                    <button type="submit" name = "submit" class='confirm-button btn btn-primary'>Confirm</button> 
                </div>
            </fieldset>
    </form>
</div>

<?php include VIEW.'includes/footer.php'?>