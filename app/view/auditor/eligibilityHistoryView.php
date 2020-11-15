<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<link rel="stylesheet" type="text/css" href="viewHistory.css">

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method = "post" action = "/fadts/audit/eligibilityHistoryModel" id="form">
            <fieldset class="BackgroundFS">
                <h2 style="margin-bottom:50px;">View Eligibility History</h2>
                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="NID-number" class="searchBarLable"><b>Person NID:</b></label>
                        <input class="form-control searchInput" id='NID-number' placeholder="9 7 2 8 1 0 1 7 7 v" name = "nid"></input>
                        <button type="submit" name = "submit" class="btn btn-primary btnNav">Search</button>
                    </div>
                </fieldset> 
            </fieldset>
        </form> 
        
        <fieldset class='BackgroundFS'>
            <?php if (isset($_SESSION['query_results'])) { ?>
                <h3 class = 'fntStyle'>Filtered results:</h3>
                
                <div class = 'tbleMargin'>
                    <fieldset style = "padding: 35px 50px">
                        <table>
                            <thead>
                                <tr>
                                    <th>Fund ID</th>
                                    <th>Person ID</th>
                                    <th>Editor</th>
                                    <th>Update time</th>
                                </tr>
                            </thead>
                            <tbody>                            
                            <?php 
                                //get results from session variables
                                $data = $_SESSION['query_results'];

                                foreach($data as $row) {
                                    print " <tr> ";
                                        foreach ($row as $attribute=>$value) {
                                            print " <td>$value</td> ";
                                        } 
                                    print " </tr> ";
                                } 
                            ?>
                            </tbody>
                        </table>
                    </fieldset>
                </div>

                <?php unset($_SESSION['query_results']); //unset results from session variables ?>
            <?php } ?> 
        </fieldset> 
    </div>    
</div>

<?php include VIEW.'includes/footer.php' ?>