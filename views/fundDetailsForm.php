<?php include('header.php');?>

<div class="all_bacground_clor">



    <form id="formFundDetails">
        <div class="SearchByCriteriaform1">
            <fieldset
                style="background-color:#fffef4;margin-left:20px  border-bottom:10px; padding-bottom:12px;padding-top:20px; ">
                <h2 style="margin-bottom:10%; margin-bottom:180px;">Fund details</h2>
                <div class="form-row">
                    <label for="select_fund" style="margin-left:230px;margin-bottom:18px;">Select Fund:</label>
                    <select name="select_fund" id="select_fund"
                        style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                        <option value="">---SELECT FUND---</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="form-row" style="margin-top:5%;">
                    <label for="select_region" style="margin-left:230px;margin-bottom:18px;">Select Region:</label>
                    <select name="select_region" id="select_region"
                        style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                         <option value="">---SELECT REGION---</option>
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


        </div>

    </form>

</div>
<?php include('footer.php');?>