<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" action="/fadts/ministry/createFundModel" id="createFund">
            <fieldset class="BackgroundFS">
                <h2> CREATE FUND </h2>

                <fieldset class="searchBar">   
                    <div class="form-row">
                        <label for="name" class="inputLable"><b>Name:</b></label>
                        <input class="form-control Input" name="name"></input>
                    </div>

                    <div class="form-row">
                        <label for="amount" class="inputLable"><b>Amount per person:</b></label>
                        <input class="form-control Input" name="amount"></input>
                    </div>

                    <div class="form-row">
                        <label for="description" class="inputLable"><b>Description:</b></label>
                        <textarea class="form-control Input txtWidth" id="description" name="description"></textarea>
                    </div>

                    <!-- <div class="form-row" style="margin-bottom:50px;"> -->
                    <div class="form-row">
                        <!-- <label for="tnid" class="inputLable" style="margin-right:185px;"><b>Region:</b></label> -->
                        <label for="region[]" class="inputLable" style="margin-right:285px;"><b>Region:</b></label>

                        <?php
                            require 'connection.php'; 
                                            
                            $rgn="SELECT level, regionid, superRegion,name FROM region WHERE level != 4";
                            $rgnRes=$con->query($rgn) ;
                            $res=$rgnRes->fetch_all(MYSQLI_ASSOC);
                            
                            $_SESSION['region_result']=$res;  //for assign region  
                        ?>

                        <select id='region' class='form-control Input' multiple='multiple' name='region[]' id='region' style='position:sticky; top:60px; overflow:scroll; width:53%;'>                        
                            <?php 
                                foreach($res as $data){                     
                                //echo "<option value='$data['regionid']'>colombo</option>";
                                echo '<option value="'.$data['regionid'].'">'.$data['name'].'</option>';                        
                                }
                            ?>
                        </select>
                    </div>

                    <div class='buttons' style="margin-top:50px;">
                        <button type="submit" name= "submit" class='btn btn-primary signlebtn'>Next</button> 
                    </div>
                </fieldset>    
            </fieldset>
        </form>
    </div>
</div>

<script>
$(document).ready(function() {
   $('#region').select2();
});
</script>

<?php include VIEW.'includes/footer.php'?>