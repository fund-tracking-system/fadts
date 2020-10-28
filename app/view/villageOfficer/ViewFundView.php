<?php include VIEW.'includes/header.php' ?>
<?php include VIEW.'includes/sidebar.php' ?>

<div>
    <div class='SearchByCriteriaform1'>



        <form class="form" method="post" action="" id="form">

            <fieldset class="BackgroundFS">

                <h2>View Fund Details
                </h2>

                </br>
                </br>
                <div class="form-row">
                    <label for="select-disaster" class="detailsLable"><b>Fund
                            Type:</b></label>
                    <select name="select-disaster" id="select-disaster" class="form-control inputDetails"
                        name="disaster">
                        <option value="Samurdhi" name="Samurdhi">Samurdhi</option>
                        <option value="Elder" name="Elder">Elder's Pesion</option>
                        <option value="Farmer" name="Farmer">Farmer's Pension</option>
                        <option value="Disable" name="Disable">Dsable</option>
                    </select>
                </div>


                <div class="form-row">
                    <label for="select-disaster" class="detailsLable"><b>Fund
                            Name:</b></label>
                    <input class="form-control inputDetailsFunfInput" id="neame" name="name"></input>
                </div>



                <div class="form-row">
                    <label for="select-disaster" class="detailsLable"><b>Fund
                            Date:</b></label>
                    <input class="form-control inputDetails" placeholder="YYYY/MM/DD" id="Date" name="Date"></input>
                </div>

                <button class='btn btn-primary location'>View Select Fund</button>
            </fieldset>

        </form>

        <form method="post" action="" id="form">

            <fieldset class="BackgroundFS">


                <h2>View Fund</h2>


                <div class="form-row">
                    <div class="flx">
                        <label class='LblflxOne' for="Estimate"><b>Estimate
                                People:</b></label>
                        <input class="form-control flxInputOne" value="amount of peoples who Nominated"
                            readonly></input>


                        <label class=' LblflxTwo' for="number"><b>Dlivered
                                People:</b></label>
                        <input class="form-control flxInputTwo" id='deleverdPeoples'
                            value="amount of peoples who Recived" readonly></input>
                    </div>
                </div>

                <div class="form-row">
                    <div style="display:flex;">
                        <label class='LblflxOne' for="fundAmount"><b>Fund
                                Amount:</b></label>
                        <input class="form-control flxInputOne" id='F-amount' value="amount of allocated money"
                            readonly></input>


                        <label class='LblflxTwo' for="number"><b>Distributed amount:</b></label>
                        <input class="form-control flxInputTwo" id='D-amount' value="amount of Distributed money"
                            readonly></input>
                    </div>

            </fieldset>

        </form>




        <form>
            <fieldset class="BackgroundFS">
                <h3 class="fntStyle"><b> Dilivered person List</b></h2>
                    <div class="tbleMargin">
                        <table>
                            <tr>
                                <th><b>NID </b></th>
                                <th><b>Name</b></th>
                                <th><b>Amount</b></th>
                                <th><b>Diliver Status</th>
                            </tr>
                            <tr>
                                <td>99687686</td>
                                <td>2020 19</td>
                                <td></td>
                                <td>Diliverd</td>
                            </tr>
                            <tr>
                                <td>Covid</td>
                                <td>202019</td>
                                <td></td>
                                <td>Dilivered</td>
                            </tr>

                        </table>
                    </div>
            </fieldset>
        </form>
    </div>
</div>

<?php include VIEW.'includes/footer.php' ?>