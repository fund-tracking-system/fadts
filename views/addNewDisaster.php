

<?php include('header.php');?>


    
    

<form class="form" id="formAddDisaster">
    <div class='SearchByCriteriaform1'>
    <fieldset  style="background-color:#fffef4;margin-left:20px  border-bottom:10px; padding-bottom:12px;padding-top:20px; margin-top:-0.5%; ">
            <h2 style="color:black ; margin-bottom:100px;padding-top:10px;"> ADD DISASTERS</h2>
            
                <div class="form-row " style="margin-bottom:30px;">
                    <label for="disaster" style="margin-left:70px;margin-bottom:18px;"><b>Disaster Type:</b></label>
                    <select class="form-control" name="disaster" id="disaster" style="margin-left:200px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%";>
                        <option>---SELECT DISASTER---</option>
                        <option value="Fire">Fire </option>
                        <option value="Flood">Flood </option>
                        <option value="lewgini">Tsunami </option>
                        <option value="Nayayeem">Nayayeem </option>
                        <option value="Sulisulan">Sulisulan </option>
                        <option value="Lewgini">Lewgini </option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="disaster_name" style="margin-left:70px;margin-bottom:18px;"><b>Disaster Name:</b></label>
                    <input class="form-control" id="disaster_name" name="disaster_name" style="margin-left:200px;margin-bottom:60px;margin-right:150px; margin-top:-3.5%;" aria-describedby="validationServer03Feedback"></input>
                </div>
                <div class="form-row">
                    <label for="date" style="margin-left:70px;margin-bottom:18px;"><b>Disaster Date:</b></label>
                    <input placeholder="YYYY/MM/DD" class="form-control" id='date' name="date" type="date" style="margin-left:200px;margin-bottom:60px;margin-right:150px; margin-top:-3.5%;" aria-describedby="validationServer03Feedback"></input>
                    <small></small>
                </div>
                <div class="form-row">
                    <label for="description" style="margin-left:70px;margin-bottom:18px;"><b>Description:</b></label>
                    <textarea class="form-control" id="description" name="description" rows="3" style="margin-left:200px;margin-bottom:60px;margin-right:150px; margin-top:-3.5%;" aria-describedby="validationServer03Feedback">  </textarea>
                </div>
                <button style="margin-left: 85%; width:13%" type="submit" class="btn btn-primary">ADD</button>

            </fieldset>
    
    
    </form>

    </div>




    <?php include('footer.php');?>
