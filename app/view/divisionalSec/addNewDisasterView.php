
<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class='SearchByCriteriaform1'>

        <form class="form" id="formAddDisaster" method="POST" action="/fadts/divisional/addNewDisasterModel" >

            <fieldset class=" BackgroundFS"> 

                <h2> ADD NEW DISASTER</h2>



                <div class="form-row ">
                    <label for="disaster" class="inputLable"><b>Disaster Type:</b></label>
                    <select class="form-control Input" name="disaster" id="disaster">
                        <option value="Fire">Fire </option>
                        <option value="Flood">Flood </option>
                        <option value="lewgini">Tsunami </option>
                        <option value="Landslide">LandSlide </option>
                        <option value="Tonado">Tonado </option>
                       
                    </select>
                </div>



                <div class="form-row">
                    <label for="disaster-name" class="inputLable"><b>Disaster
                        Name:</b></label>
                    <input class="form-control Input" id="disasterName" name="disasterName" ></input>
                </div>


                <div class="form-row">
                    <label for="date" class="inputLable"><b>Disaster Date:</b></label>
                    <input placeholder="YYYY/MM/DD" class="form-control Input" id='date' name="date" type="date"></input>
                    <small></small>
                </div>

                
                <!-- <div class="form-row">
                    <label for="date" class="inputLable"><b>Disaster Region:</b></label>
                    <input  class="form-control Input" id='region' required></input>
                    <small></small>
                </div> -->


                <div class="form-row">
                    <label for="description" class="inputLable"><b>Description:</b></label>
                    <textarea class="form-control Input txtWidth " id="description" name="description" >  </textarea>
                </div>



                <div class='button '>

                    <button type="submit" class=' btn btn-primary signlebtn'>Assign Region
                    </button>
                </div>


            </fieldset>


        </form>

    </div>

</div>

    <?php include VIEW.'includes/footer.php' ?>