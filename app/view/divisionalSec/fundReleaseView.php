<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>


<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">



        <form method="post" action="" id="form">
            <fieldset class="BackgroundFS">
                <h2>ALTERNATIVE FUND RELEASE</h2>
                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="NID-number" class="searchBarLable"><b>NID Number:</b></label>
                        <input class="form-control searchInput" id='NID-number' placeholder="9 7 2 8 1 0 1 7 7 v"
                            name="NID"></input>
                        <button type="submit" class="btn btn-primary btnNav">Search</button>
                    </div>
                </fieldset>
            </fieldset>
        </form>



        <form>
            <fieldset class=" BackgroundFS">
                <div class="tbleMargin">

                    <table>

                        <tr>
                            <th><B>Fund Name</B></th>
                            <th><B>Amount</B></th>
                            <th><B>Release</B></th>
                        </tr>
                        <tr>
                            <td>Alfreds Futterkiste</td>
                            <td>Disabled </td>
                            <td><button type="submit" class="btn btn-primary">Release</button></td>
                        </tr>
                        <tr>
                            <td>Centro comercial Moctezuma</td>
                            <td>covid 500</td>
                            <td><button type="submit" class="btn btn-primary">Release</button></td>
                        </tr>
                        <tr>
                            <td>Ernst Handel</td>
                            <td> phora sahanadara</td>
                            <td><button type="submit" class="btn btn-primary">Release</button></td>
                        </tr>
                        <tr>
                            <td>Island Trading</td>
                            <td>govi Vishrama wetup</td>
                            <td><button type="submit" class="btn btn-primary">Release</button></td>
                        </tr>

                        </tr>
                    </table>
            </fieldset>
    </div>
    </form>



</div>


</div>
<?php include VIEW.'includes/footer.php' ?>