<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor" >
    <div class="SearchByCriteriaform1">



        
    
        <form method="post" action="" id="form"> 
            <fieldset class="BackgroundFS">
                <h2 style="margin-bottom:50px;">ADD PEOPLE TO FUND ELIGIBILITY LIST </h2>
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




        <!-- <form>
        <fieldset class="BackgroundFS">

                <h2> Manually Created Fund</h2>

                <div class="tbleMargin">
                    <table name="table" id="table">
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
        </form> -->
    </div>
</div>
<?php include VIEW.'includes/footer.php'?>