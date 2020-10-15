<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>
<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="">
            <fieldset style="background-color:#fffef4; height:350px; overflow:auto">
                <h2 style="margin-bottom:50px;"> Fund Eligible list </h2>
                <fieldset style="padding-top:15px; margin-right:50px; margin-left:20px;border-radius:10px; ">
                    <div class="form-row" style="margin-top:2%;">
                        <label for="select-region" style="margin-left:200px;margin-bottom:18px;"><b>Select Predefined
                                Fund:</b></label>
                        <select class="form-control"name="select-region" id="select-region"
                            style="position: relative;margin-left:50px; margin-bottom:10px;width: 400px;height: 30px;border-radius: 5px;outline:none;border-width: 1.5px;">
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
            <fieldset style="background-color:#fffef4;">

                <h3 style="margin-bottom:50px; margin-top:10px;margin-top:50px;margin-left:40px;"> Remaining Elighible
                    list : This Fund</h2>
                    <div style="margin:40px;">
                        <table style="margin-right:200px; ">
                            <tr>
                                <th><b>Name </b></th>
                                <th><b>NID</b></th>
                                <th><b>phone Number</b></th>
                                <th><b>Relase</b></th>
                            </tr>
                            <tr>
                                <td>srilipala</td>
                                <td>3293842424</td>
                                <td>0120187982</td>
                                <td><button class="btn btn-primary">Relase</button></td>
                            </tr>
                            <tr>
                                <td>amrapala</td>
                                <td>3293842424</td>
                                <td>0120187982</td>
                                <td><button class="btn btn-primary">Relase</button></td>
                            </tr>
                        </table>
                    </div>
        </form>
        </fieldset>
    </div>
</div>
<?php include VIEW.'footer.php'?>