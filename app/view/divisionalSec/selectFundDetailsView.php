<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>



<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1">
        <form method="post" id="formAddPeople" action="/fadts/divisional/addPeopleModel">
            <fieldset class="BackgroundFS">
                <h2 style="margin-bottom:100px;"> FUND DETAILS ANALISYS</h2>

                <div class="form-row" style="margin-top:40px;">
                    <label for="nid" class="inputLable" style="margin-top:-40px; "><b>Delivered amount</b></label>
                    <input class="form-control details"style="margin-left:43px;"  id='' value="<?php echo $_SESSION['fundDelivered']?>"readonly></input>
                </div>
                <div class="form-row">
                    <label for="nid" class="inputLable" style="margin-top:-40px;"><b>Unelivered amount</b></label>
                    <input class="form-control details" style="margin-left:33px;" id=''  value="<?php echo $_SESSION['fundDelivered']?>"readonly></input>
                </div>

                <div class="form-row">
                    <label for="nid" class="inputLable" style="margin-top:-40px;"><b>Total Recipient amount</b></label>
                    <input class="form-control details" id='' value="<?php echo $_SESSION['fundDelivered']?>"readonly></input>
                </div>



            </fieldset>
        </form>

    </div>
</div>
<?php include VIEW.'includes/footer.php' ?>