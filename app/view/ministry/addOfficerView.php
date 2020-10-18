<?php include VIEW.'includes/header.php' ?>

<?php include VIEW.'includes/sidebar.php' ?>

<div class="all_bacground_clor">
    <div class="SearchByCriteriaform1 ">

        <form id="form" action="post">
            <fieldset class="BackgroundFS">

                <h2>Add Officer Form
                </h2>

                <div class="form-row">
                    <label for="officer-id" class="inputLable"><b>Officer ID:</b></label>
                    <input class="form-control Input" id="officer-id" required></input>

                </div>
                <div class="form-row">

                    <label for="nid" class="inputLable"><b>NID:</b></label>
                    <input class="form-control Input" id='nid' required></input>
                </div>




                <div class="form-row">
                    <label for="region" class="inputLable"><b>Region:</b></label>
                    <select class="form-control Input" name="region" id="region">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>


                <div class="form-row">

                    <label for="position" class="inputLable"><b>Position:</b></label>
                    <select class="form-control Input" name="position" id="position">
                        <option value="volvo">Divisional Secretary</option>
                        <option value="saab">District sectrary</option>
                        <option value="mercedes">auditor</option>
                        <option value="audi">Vilage Officer</option>
                    </select>
                </div>

                <div class="form-row">
                    <label for="exampleFormControlInput1" class="inputLable"><b>Email
                        </b></label>
                    <input type="email" class="form-control Input" id="exampleFormControlInput1" required
                        placeholder="name@example.com">
                </div>

                <div class="form-row">
                    <label for="exampleFormControlInput1" class="inputLable"><b>Email again
                        </b></label>
                    <input type="email" class="form-control Input" id="exampleFormControlInput1" required
                        placeholder="name@example.com">
                </div>

                <div class="Twobtn">

                    <button type="submit" class=' btn btn-primary '>Confirm</button>
                    <button class=' btn btn-primary '>View List</button>
                </div>
            </fieldset>


        </form>
    </div>



</div>

<?php include VIEW.'includes/footer.php'?>