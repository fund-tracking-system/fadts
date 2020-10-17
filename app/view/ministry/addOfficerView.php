<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>

<div style="background-color:#ced4da">

    <form class="SearchByCriteriaform1">
    

            <fieldset
                style="background-color:#fffef4;margin-left:0px;height:600px;">

                <h2 style="color:black ; margin-bottom:55px;padding-top:10px; ">Add Officer Form
                </h2>
                <div class="form-row" style="margin-bottom:20px;">
                    <label for="officer-id" style="margin-left:70px;margin-bottom:18px;"><b>Officer ID:</b></label>
                    <input class="form-control" id="officer-id"
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px;margin-top:-3.5%"></input>

                </div>
                <div class="form-row" style="margin-bottom:20px;">

                    <label for="nid" style="margin-left:70px;margin-bottom:18px;"><b>NID:</b></label>
                    <input class="form-control " id='nid'
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%"></input>
                </div>




                <div class="form-row" style="margin-bottom:20px;">
                    <label for="region" style="margin-left:70px;margin-bottom:18px;"><b>Region:</b></label>
                    <select class="form-control" name="region"
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px;margin-top:-3.5%" id="region">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="form-row" style="margin-bottom:20px;">

                    <label for="position" style="margin-left:70px;margin-bottom:18px;"><b>Position:</b></label>
                    <select class="form-control" name="position" id="position"
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px;margin-top:-3.5%">
                        <option value="volvo">Divisional Secretary</option>
                        <option value="saab">District sectrary</option>
                        <option value="mercedes">auditor</option>
                        <option value="audi">Vilage Officer</option>
                    </select>
                </div>
                <div class="form-row" style="margin-bottom:20px;">
                    <label for="exampleFormControlInput1" style="margin-left:70px;margin-bottom:18px;"><b>Email
                            </b></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%" placeholder="name@example.com">
                </div>

                <div class="form-row" style="margin-bottom:20px;">
                    <label for="exampleFormControlInput1" style="margin-left:70px;margin-bottom:18px;"><b>Email again
                            </b></label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        style="margin-left:180px;margin-bottom:20px;margin-right:150px; margin-top:-3.5%" placeholder="name@example.com">
                </div>
                <div class='buttons' style="margin-left:900px;">

                    <button class='confirm-button btn btn-primary '>Confirm</button>
                    <button class='view-list-button btn btn-primary'>View List</button>
                </div>
            </fieldset>


    </form>





</div>

<?php include VIEW.'includes/footer.php'?>