<<<<<<< HEAD
<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method = "post" action = "/fadts/audit/eligibilityHistoryModel" id="formeligibilityList">
            <fieldset class="BackgroundFS">
                <h2>VIEW ELIGIBILITY HISTORY</h2>
                
                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="nid" class="searchBarLable"><b>Person NID</b></label>
                        <input class="form-control searchInput" name = "nid" placeholder="NIC number here"></input>
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

=======
<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method = "post" action = "/fadts/audit/eligibilityHistoryModel" id="formpersonHistory">
            <fieldset class="BackgroundFS">
                <h2>VIEW ELIGIBILITY HISTORY</h2>

                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="nid" class="inputLable" style="margin-left:20%;"><b>Person NID</b></label>
                        <input class="form-control Input" name = "person_nid" placeholder="NIC number here"></input>
                    </div>

                    <div class="form-row">
                        <label for="nid" class="inputLable" style="margin-left:20%;"><b>Editor NIC:</b></label>
                        <input class="form-control Input" name = 'editor_nid' placeholder="Type NIC number here" ></input>
                    </div>

                    <div class='button' style="margin-top:30px;">
                        <button name="submit" class="btn btn-primary btnNav">Search</button>
                </fieldset> 
            </fieldset>
        </form> 

        <?php 
            if(isset($_GET['result'])){
                if($_GET['result'] == "invalid_person"){
                    echo '<div class="alert alert-danger" role="alert">Person NIC is incorrect!</div>';
                }  
                if($_GET['result'] == "invalid_editor"){
                    echo '<div class="alert alert-danger" role="alert">Editor NIC is incorrect!</div>';
                }      
            }   
        ?>
        
        <?php if (isset($_SESSION['query_results']) && isset($_SESSION['flag']) && $_SESSION['flag']==12) { ?> 
            <fieldset class='BackgroundFS'>
                <h2>HISTORY RECORDS</h2>
                
                <div class = 'tbleMargin'>
                    <table class="display nowrap" name="table" id="resultTable">
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
                                            print " <td style='text-align:center;font-size:10px;'> $value </td> ";
                                        } 
                                    print " </tr> ";
                                } 
                            ?>
                        </tbody>
                    </table>
                </div>

                <?php unset($_SESSION['query_results']); //unset results from session variables ?>
            </fieldset> 
        <?php } ?>    
    </div>    
</div>

<?php
    //unset session variables
    unset($_SESSION['flag']); 
?>

<script>
    $(document).ready(function() {
        $('#incomeType').select2();
        $('#funds').select2();

        $("#resultTable").DataTable({
            dom: 'Bfrtip',
            buttons: ['print', 'pdf']
        });
    });
</script>

>>>>>>> cb3f905dd30fbd12a7aa0a8cf2a9591e4dea3ebd
<?php include VIEW.'includes/footer.php' ?>