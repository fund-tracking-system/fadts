<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form>
            <fieldset class="BackgroundFS">
                <fieldset style="background-color: #EBF6FA; border:none;margin-top:-10px;">
                    <fieldset style="background-color: #EBF6FA; border:none; margin-top:30px;">

                        <h2 style="margin-bottom:30px;"> DISASTER DETAILS ANALISYS</h2>


                        <table>

                            <thead>
                                <tr>


                                    <th>
                                        <fieldset class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b>Disaster Type <br> <br>
                                                        <?php echo "Flood"?></b></label>
                                                <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;"
                                                    value="<?php echo $_SESSION['amountPerPerson']?>" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                    <th>
                                        <fieldset class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="dilivered" class="inputLable"><b>Victims 
                                                        amount <br> <br>
                                                        <?php echo "400"?></b></label>
                                                <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;" id='dilivered'
                                                    value="<?php echo $_SESSION['fundDelivered']?>" readonly></input>
                                            </div>
                                        </fieldset>

                                    </th>
                                    <th>
                                        <fieldset class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b> DIsaster Region <br> <br>
                                                        <?php echo "Opatha"?></b></label>
                                                <input class="form-control details" type="hidden"
                                                    style="margin-left:100px;" id='undelivered'
                                                    value="<?php echo $_SESSION['fundUndelivered']?>" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                    <th>
                                        <fieldset class="FSdetail">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b> Disaster Name<br>
                                                        <br><?php echo " Big Flood "?></b></label>
                                                <input class="form-control details" id='' type="hidden"
                                                    style="margin-left:100px;"
                                                    value="<?php echo $_SESSION['totalRecipients']?>" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                    <th>
                                        <fieldset class="FSdetail" style="margin-right:30px;">
                                            <div class="form-row " style="margin-left:-45px; margin-top:10px;">
                                                <label for="nid" class="inputLable"><b>Disaster Date
                                                        <br> <br><?php echo $_SESSION['publishedTime']?>
                                                    </b></label>
                                                <input class="form-control details" id='' type="hidden"
                                                    style="margin-left:100px;"
                                                    value="<?php echo $_SESSION['publishedTime']?>" readonly></input>
                                            </div>
                                        </fieldset>
                                    </th>
                                <tr>


                            </thead>
                        </table>
                    </fieldset>

                </fieldset>
            </fieldset>
        </form>

    </div>
</div>
<?php include VIEW.'includes/footer.php' ?>