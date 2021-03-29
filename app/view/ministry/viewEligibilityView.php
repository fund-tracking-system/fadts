<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/ministry/viewEligibilityModel" id="form"> 
            <fieldset class="BackgroundFS">
                <h2 style="margin-bottom:50px;">SELECT PREDEFINED FUND</h2>
                <fieldset class="searchBar">
                    <div class="form-row ">
                        <label for="select-PreFund" class="searchBarLable"><b>Pre Defined Fund:</b></label>

                        <?php
                            require 'connection.php'; 
                                            
                            $qry="SELECT Id, name FROM predefinedfund";
                            $qryRes=$con->query($qry) ;
                            $res=$qryRes->fetch_all(MYSQLI_ASSOC);
                        ?>

                        <select class="form-control searchInput" name="select-PreFund" id="select-PreFund">
                            <?php 
                                foreach($res as $data){                     
                                //echo "<option value='$data['Id']'>Samurdhi</option>";
                                echo '<option value="'.$data['Id'].'">'.$data['name'].'</option>';                        
                                }
                            ?>
                        </select>

                        <button type="submit" name="fundSubmit" class="btn btn-primary btnNav">Select</button>
                    </div>
                </fieldset>
            </fieldset>
        </form>

        <form method="post" action="">
            <fieldset class="BackgroundFS">         
                <?php if (isset($_SESSION['eligibility_list']) && $_SESSION['eligibility_list']==-1 && isset($_SESSION['flag']) && $_SESSION['flag']%10==5) { ?>
                    <div class="form-row ">
                        <input class="form-control Input" value="There are no Eligible people!" readonly></input>
                    </div>
                <?php } ?>                                
                <?php if (isset($_SESSION['eligibility_list']) && $_SESSION['eligibility_list']!=-1 && isset($_SESSION['flag']) && $_SESSION['flag']%10==5) { ?>
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
                    
                    <?php 
                    //unset results from session variables
                    unset($_SESSION['eligibility_list']); 
                    
                    //unset flag from session variables
                    unset($_SESSION['flag']); 
                    ?>
                <?php } ?>
            </fieldset>
        </form>
    </div>
</div>

<script>
$(document).ready(function() {
    $("#resultTable").DataTable({
        dom: 'Bfrtip',
        buttons: [
        'print','pdf'
    ]
    });
});
</script>

<?php include VIEW.'includes/footer.php'?>