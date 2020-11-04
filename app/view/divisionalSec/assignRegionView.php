<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post"  action="/fadts/divisional/assignRegionSelectModel">
            <fieldset class="BackgroundFS">
                <h2>ASSIGN REGION</h2>

                <div class="form-row" style="margin-top:100px;">
                    <label for="regionName" class="detailsLable"><b>Region name</b></label>
                    <input class="form-control inputDetails"  readonly
                        value="<?php echo $_SESSION['people_region']." Grama Nildhari Wasama"?>">
                </div>


                <div class="tbleMargin">
                    <table>
                        <thead>
                            <tr style="margin-top:50px;">
                                
                                <th><b>Region name</b></th>
                                <th><b>Region level</b></th>
                                <th><b>Select</b></th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php
                        
                           $rgnRes=$_SESSION['region_result'];
                           foreach($rgnRes as $row) {

                            if( $row['name']==$_SESSION['people_region']){
                               
                            print " <tr > "; 
                                print ' <td> ' . $row['name'] . ' </td> ';
                                print ' <td>   <b> <input   style="border:none; margin-right:30px; margin-left:30px;" name="level" value=" Grama Niladhari Wasama" readonly> </b></td> ';
                                print ' <td>
                                <form method="post" >

                                                <input type="hidden" name="region" value=' . $row['regionid'] . '> 
                                               
                                                <button class="btn btn-primary" type="submit">Select</button>
                                            </form>            
                                        </td> ';
                            print " </tr> ";
                        } 
                    }
                             


                            ?>
                        </tbody>
                    </table> 
                </div>





            </fieldset>

        </form>



    </div>
</div>

<?php include VIEW.'includes/footer.php'?>