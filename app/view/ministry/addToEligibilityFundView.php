<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor" >
    <div class="SearchByCriteriaform1">       
        <form method="post" action="/fadts/ministry/addToEligibilityPersonView" id="form"> 
            <fieldset class="BackgroundFS">
                <h2 style="margin-bottom:50px;">ADD PEOPLE TO FUND ELIGIBILITY LIST</h2>
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
    </div>
</div>

<?php include VIEW.'includes/footer.php'?>