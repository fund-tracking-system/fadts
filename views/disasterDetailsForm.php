<?php include('header.php');?>

<div class="all_bacground_clor">>


    <form method="post" action="" style="margin-top:-30%;">
        <div class="SearchByCriteriaform1 ">
            <fieldset
            style="background-color:#fffef4; border-bottom:10px; padding-bottom:12px;">
                <h2 style="margin-bottom:10%; margin-bottom:180px;"> FADTS | Disaster details</h2>
                <div class="form-row">
                    <label for="select-disaster" style="margin-left:230px;margin-bottom:18px;">Select Disaster:</label>
                    <select name="select-disaster" id="select-disaster"
                        style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="form-row" style="margin-top:5%;">
                    <label for="select-region" style="margin-left:230px;margin-bottom:18px;">Select Region:</label>
                    <select name="select-region" id="select-region"
                        style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                        <option value="volvo">Volvo</option>
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
<?php include('footer.php');?>