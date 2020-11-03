<?php include VIEW.'includes/header.php' ?> 
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor" >
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/divisional/assignRegionModel"> 
            <fieldset style="background-color:#fffef4; height:350px; "> 
                <h2 style="margin-bottom:50px;">ASSIGN REGION</h2> 
                <fieldset style="padding-top:15px; margin-right:20px; margin-left:20px;border-radius:10px; "> 
                    <div class="form-row" style="margin-bottom:20px;">
                        <label for="regionName" style="margin-left:200px;margin-bottom:18px;"><b>Region name</b></label>
                        <input class="regionName" name="name" style="margin-left:400px;margin-right:50px">
                    </div>
                    
                    <div class="form-row" style="margin-bottom:20px;">
                        <label for="level" style="margin-left:200px;margin-bottom:18px;"><b>Region level:</b></label>
                        <select class="form-control" name="level" style="margin-left:300px;margin-bottom:20px;margin-right:150px;margin-top:-3.5%">
                            <option value="4">Village officer</option>
                            <option value="3">Divisional secretary</option> 
                            <option value="2">District secretary</option>
                            <option value="1">Provincial secretary</option> 
                            <option value="0">Auditor</option> 
                        </select>
                    </div>

                    <button style="margin-left: 500; margin-top:10px; width:13%; margin-bottom:20px;" type="submit" class="btn btn-primary">Filter</button>
                </fieldset>
            </fieldset> 
        </form> 
 
        <fieldset style="background-color:#fffef4; height:auto;"> 
            <h2 style="margin-bottom:50px; margin-top:10px;"> Filtered list</h2>

            <div style="margin:50px;">
                <?php if (isset($_SESSION['query_results'])) { ?>
                    <table style="margin-bottom:20px;" name="table" id="table">
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
                                                    <button class="btn btn-primary" type="submit">Select</button>
                                                </form>            
                                            </td> ';
                                print " </tr> ";
                            } 
                        ?>
                    </table>

                    <?php unset($_SESSION['query_results']); //unset results from session variables ?>
                <?php } ?> 
            </div>
        </fieldset> 
    </div>
</div>

<?php include VIEW.'includes/footer.php'?>