<?php include VIEW.'header.php' ?>
<?php include VIEW.'villageOfficer/sidebar.php' ?>
<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">


    
        <form method="post" action="" id="form">
            <fieldset class="BackgroundFS">
                <h2 style="margin-bottom:50px;">Search Fund Eligibility </h2>
                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="NID-number" class="searchBarLable"><b>Pre Defined Fund:</b></label>

                        <!-- <input class="form-control searchInput" id='NID-number' placeholder="9 7 2 8 1 0 1 7 7 v"
                            name="NID"></input> -->
                        <select class="form-control searchInput" name="select-PreFund" id="select-PreFund">
                            <option value="Samurdhi">Samurdhi</option>
                            <option value="Disabled">Disabled</option>
                            <option value="govi vishrama">govi vishrama</option>
                            <option value="Wedihity deemana">Wedihity deemana</option>
                        </select>

                        <button type="submit" class="btn btn-primary btnNav">Select</button>
                    </div>
                </fieldset>
            </fieldset>
        </form>







        <form>
            <fieldset class="BackgroundFS">

                <h3 class="fntStyle"> Remaining Elighible
                    list : This Fund</h2>
                    <div class="tbleMargin">
                        <table>
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
            </fieldset>
        </form>

    </div>
</div>
<?php include VIEW.'footer.php'?>