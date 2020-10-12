<?php include VIEW.'header.php' ?>

<?php include VIEW.'ministry/sidebar.php' ?>
<div class="all_bacground_clor">>


    <form method="post" action="" style="margin-top:-10px;">
        <div class="SearchByCriteriaform1 ">
            <fieldset
            style="background-color:#fffef4; height:600px;">
                <h2 style="margin-top:50px; margin-bottom:130px;">Disaster details</h2>
                <div class="form-row">
                    <label for="select-disaster" style="margin-left:230px;margin-bottom:50px;"><b>Select Disaster:<b></label>
                    <select  class="form-control";name="select-disaster" id="select-disaster"
                        style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="form-row" style="margin-top:5%;">
                    <label for="select-region" style="margin-left:230px;margin-bottom:18px;"><b>Select Region:<b></label>
                    <select name="select-region" id="select-region" class="form-control";
                        style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                        <option value="volvo">Flood</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <button class='btn btn-primary'
                    style=" margin-left: 35%;height: 30px; border-radius: 5px; padding-bottom:40px; margin-bottom:5%; margin-top:5%;">View
                    Updated Victims List</button>
            </fieldset>



    </form>

</div>



</div>
<?php include VIEW.'footer.php'?>