<?php include VIEW.'includes/header.php' ?> 
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor" >
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/assignRegion/assignRegionModel"> 
            <fieldset class="BackgroundFS"> 
                <h2>ASSIGN REGION</h2> 

                <fieldset class="searchBar"> 
                    <div class="form-row">
                        <label for="name" class="inputLable"><b>Region name</b></label>
                        <input class="form-control Input" name="name">
                    </div>
                    
                    <div class="form-row">
                        <label for="level" class="inputLable"><b>Region level:</b></label>
                        <select class="form-control Input" name="level" id="selectLevel">
                            <option value="0">Island</option>
                            <option value="1">Province</option>
                            <option value="2">District</option>
                            <option value="3">Division</option>
                            <option value="4">Village</option> 
                        </select>
                    </div>

                    <button type="submit" class='btn btn-primary signlebtn'>Filter</button>
                </fieldset>
            </fieldset> 
        </form> 

        <fieldset class="BackgroundFS">
            <?php if (isset($_SESSION['query_results'])) { ?> 
                <h2> Filtered list</h2>

                <div class="tbleMargin">
                    <table class="display nowrap" name="table" id="resultTable">
                        <tr>
                            <th><b>Region name</b></th> 
                            <th><b>Select</b></th>
                        </tr>
                        <?php 
                            //get results from session variables
                            $data = $_SESSION['query_results'];

                            foreach($data as $row) {
                                print " <tr> "; 
                                    print ' <td> ' . $row['name'] . ' </td> '; 
                                    print ' <td>
                                                <form method="post" action="/fadts/assignRegion/assignRegionSelectModel">
                                                    <input type="hidden" name="region" value="' . $row['regionId'] . '">
                                                    <input type="hidden" name="level" value="' . $row['level'] . '">
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
        </fieldset>            
    </div>
</div>

<script>
    //sets previous value as selected in position dropdown list 
    var regionLevel = "<?php echo $_SESSION['region_level']; ?>";
    var selectLevel = document.getElementById('selectLevel');
    selectLevel.options[regionLevel].selected = true;
</script>

<?php unset($_SESSION['region_level']); //unset region level from session variables ?>

<script>
$(document).ready(function() {
    $("#resultTable").DataTable();
});
</script>

<?php include VIEW.'includes/footer.php'?>