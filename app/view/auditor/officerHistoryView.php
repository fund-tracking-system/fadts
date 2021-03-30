<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/audit/officerHistoryModel">
            <fieldset class="BackgroundFS">            
                <h2>VIEW OFFICER HISTORY</h2>

                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="nid" class="inputLable" style="margin-left:20%;"><b>Officer NIC:</b></label>
                        <input class="form-control Input" name='officer_nid' placeholder="Type NIC number here" ></input>
                    </div>

                    <div class="form-row">
                        <label for="nid" class="inputLable" style="margin-left:20%;"><b>Editor NIC:</b></label>
                        <input class="form-control Input" name='editor_nid' placeholder="Type NIC number here" ></input>
                    </div>  

                    <div class='button' style="margin-top:30px;">
                        <button name="submit" class="btn btn-primary btnNav">Search</button>
                    </div>                              
                </fieldset>
            </fieldset>
        </form>

        <?php 
            if(isset($_GET['result'])){
                if($_GET['result'] == "invalid_officer"){
                    echo '<div class="alert alert-danger" role="alert">Officer NIC is incorrect!</div>';
                }  
                if($_GET['result'] == "invalid_editor"){
                    echo '<div class="alert alert-danger" role="alert">Editor NIC is incorrect!</div>';
                }      
            }   
        ?>

        <?php if (isset($_SESSION['query_results']) && isset($_SESSION['flag']) && $_SESSION['flag']==11) { ?>                  
            <form>                
                <fieldset class='BackgroundFS'>
                    <?php if (isset($_SESSION['query_results'])) { ?>
                        <h2>HISTORY RECORDS</h2>
                        
                        <div class = 'tbleMargin'>
                            <table class="display nowrap" name="table" id="resultTable">
                                <thead>
                                    <tr>
                                        <th>Timestamp</th>
                                        <th>Officer ID</th>
                                        <th>Editor ID</th>
                                        <th>NID</th>
                                        <th>E-mail</th>
                                        <th>Region</th>
                                        <th>LogStat</th>
                                        <th>Name</th>
                                        <th>Position</th>
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
            </form>
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

<?php include VIEW.'includes/footer.php' ?>                 