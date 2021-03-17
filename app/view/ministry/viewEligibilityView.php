<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<!-- <?php
    //next redirect URL
    $_SESSION['next_model'] = "Location:/fadts/ministry/updateOfficerSetRegionModel";
?> -->

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/ministry/viewEligibilityFindModel">
            <fieldset class="BackgroundFS">            
                <h2>FIND PREDEFINED FUND</h2>

                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="name" class="inputLable"><b>FUND NAME:</b></label>
                        <input class="form-control Input" name='name' placeholder="Type fund name here" ></input>
                    </div>

                    <button type="submit" class="btn btn-primary signlebtn">Search</button>                   
                </fieldset>
            </fieldset>
        </form>

        <form method="post" action="/fadts/ministry/viewEligibilitySelectModel">
            <fieldset class="BackgroundFS">
                <?php if (isset($_SESSION['query_results']) && $_SESSION['query_results']==-1) { ?>
                    <div class="form-row ">
                        <input class="form-control Input" value="Record doesn't exist!" readonly></input>
                    </div>
                <?php } ?>

                <?php if (isset($_SESSION['query_results']) && $_SESSION['query_results']!=-1) { ?>
                    <h2>FILTERED FUND LIST</h2>

                    <div class="tbleMargin">
                        <table class="display nowrap" name="table" id="resultTable">
                            <tr>
                                <th><b>Predefined Fund</b></th>
                                <th><b>Select</b></th>
                            </tr>
                            <?php 
                                //get results from session variables
                                $data = $_SESSION['query_results'];

                                foreach($data as $row) {
                                    print " <tr> "; 
                                        print ' <td> ' . $row['name'] . ' </td> '; 
                                        print ' <td>
                                                    <form method="post" action="/fadts/ministry/viewEligibilitySelectModel">
                                                        <input type="hidden" name="predefinedfund" value="' . $row['predefinedFundId'] . '">
                                                        <button class="btn btn-primary" style="margin-left:40%;" type="submit">Select</button>
                                                    </form>            
                                                </td> ';
                                    print " </tr> ";
                                } 
                            ?>
                        </table>
                    </div>
                    
                    <?php unset($_SESSION['query_results']); //unset results from session variables ?>
                <?php } ?>

                <?php if (isset($_SESSION['eligibility_list']) && $_SESSION['eligibility_list']!=-1) { ?>
                    <h2>ELIGIBLE LIST</h2>

                    <div class="tbleMargin">
                        <table class="display nowrap" name="table" id="resultTable">
                            <tr>
                                <th><b>Person NID</b></th>
                                <th><b>Person name</b></th>
                                <th><b>Editor NID</b></th>
                                <th><b>Editor name</b></th>
                            </tr>
                            <?php 
                                //get results from session variables
                                $data = $_SESSION['eligibility_list'];

                                foreach($data as $row) {
                                    print " <tr> "; 
                                        print ' <td> ' . $row['nid'] . ' </td> '; 
                                        print ' <td> ' . $row['name'] . ' </td> ';
                                        print ' <td> ' . $row['usernid'] . ' </td> ';
                                        print ' <td> ' . $row['username'] . ' </td> ';
                                    print " </tr> ";
                                } 
                            ?>
                        </table>
                    </div>
                    
                    <?php unset($_SESSION['eligibility_list']); //unset results from session variables ?>
                <?php } ?>
            </fieldset>
        </form>
    </div>
</div>

<!-- <script>
function retain() {
  var x = document.getElementById("myInput").value;
  document.getElementById("demo").innerHTML = "You wrote: " + x;
}
</script> -->

<?php include VIEW.'includes/footer.php'?>