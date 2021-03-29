<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method = "post" action = "/fadts/audit/personHistoryModel" id="formpersonHistory">
            <fieldset class="BackgroundFS">
                <h2>VIEW PERSON HISTORY</h2>

                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="nid" class="inputLable"><b>Person NID</b></label>
                        <input class="form-control Input" name = "nid" placeholder="NIC number here"></input>
                    </div>
                        
                    <button type="submit" name = "submit" class="btn btn-primary btnNav">Search</button>
                </fieldset> 
            </fieldset>
        </form> 
        
        <fieldset class='BackgroundFS'>
            <?php if (isset($_SESSION['query_results'])) { ?>
                <h2>Filtered results</h2>
                
                <div class = 'tbleMargin'>
                    <table class="display nowrap" name="table" id="resultTable">
                        <thead>
                            <tr>
                                <th>Timestamp</th>
                                <th>Person ID</th>
                                <th>NID</th>
                                <th>HeadofFamily</th>
                                <th>Phone</th>
                                <th>BirthDate</th>
                                <th>BirthCertificateNo</th>
                                <th>Name</th>
                                <th>Region</th>
                                <th>Job</th>
                                <th>CivilStatus</th>
                                <th>Trustee</th>
                                <th>Editor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                //get results from session variables
                                $data = $_SESSION['query_results'];

                                foreach($data as $row) {
                                    print " <tr> ";
                                        foreach ($row as $attribute=>$value) {
                                            print " <td style='text-align:center'> $value </td> ";
                                        } 
                                    print " </tr> ";
                                } 
                            ?>
                        </tbody>
                    </table>
                </div>

                <?php unset($_SESSION['query_results']); //unset results from session variables ?>
            <?php } ?> 
        </fieldset> 
    </div>    
</div>

<script>
$(document).ready(function() {
    $("#resultTable").DataTable();
});
</script>

<?php include VIEW.'includes/footer.php' ?>