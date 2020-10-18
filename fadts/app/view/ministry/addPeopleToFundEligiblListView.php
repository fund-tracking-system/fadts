<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor" >
    <div class="SearchByCriteriaform1">
        <form method="post" action="">

            <fieldset style="background-color:#fffef4; height:350px; ">

                <h2 style="margin-bottom:50px;">ADD PEOPLE TO FUND ELIGIBILITY LIST </h2>

                <fieldset style="padding-top:15px; margin-right:50px; margin-left:20px;border-radius:10px; ">

                    <div class="form-row" style="margin-top:5%;">
                        <label for="select-fund" style="margin-left:200px;margin-bottom:18px;"><b>Select Predefined
                                Fund:</b></label>
                        <select name="select-fund" id="select-fund" name="fund" class="form-control"
                            style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline: none;border-width: 1.5px;">
                            <option value="Samurdhi">Samurdhi</option>
                            <option value="Disabled">Disabled</option>
                            <option value="govi vishrama">govi vishrama</option>
                            <option value="Wedihity deemana">Wedihity deemana</option>
                        </select>

                    </div>

                    <button style="margin-left: 78%; margin-top:-50px; width:13%; margin-bottom:20px;" type="submit"
                        class="btn btn-primary">Select</button>

                </fieldset>
            </fieldset>

        </form>


        <form>
            <fieldset style="background-color:#fffef4; height:auto;">

                <h2 style="margin-bottom:50px; margin-top:10px;"> Manually Created Fund</h2>

                <div style="margin:50px;">
                    <table style="margin-bottom:20px;" name="table" id="table">
                        <tr>
                            <th><b>Name Of Fund</b></th>
                            <th><b>Created Date</b></th>
                            <th><b>Description</b></th>
                            <th><b>Add To the List</b></th>
                        </tr>
                        <tr>
                            <td>Covid-19 5000</td>
                            <td>2020 feb 19</td>
                            <td>Covid curefew areas low gross income peoples</td>
                            <td><button class="btn btn-primary">Select</button></td>
                        </tr>
                        <tr>
                            <td>Covid-19 5000</td>
                            <td>2020 feb 19</td>
                            <td>Covid curefew areas low gross income peoples</td>
                            <td><button class="btn btn-primary">Select</button></td>
                        </tr>
                        <tr>
                            <td>Covid-19 5000</td>
                            <td>2020 feb 19</td>
                            <td>Covid curefew areas low gross income peoples</td>
                            <td><button class="btn btn-primary">Select</button></td>
                        </tr>
                       
                    </table>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php include VIEW.'includes/footer.php'?>