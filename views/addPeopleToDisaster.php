<?php include('header.php');?>

<div style="background-color:#ced4da">
    <div class="SearchByCriteriaform1">

        <form >

            <fieldset
            style="background-color:#fffef4;margin-left:20px  border-bottom:10px; padding-bottom:12px;padding-top:20px; margin-top:-0.5%; ">
                <h2 style="color:black ; margin-bottom:88px;padding-top:10px;text-align: center;"> Add Vitims to Disaster
                </h2>
                <div class="form-row" style="margin-top:30px;">

                    <label for="disaster" style="margin-left:50px;margin-bottom:30px;">Disaster Name:</label>
                    <select class="form-control" name="disaster" id="disaster"
                        style="margin-left:250px;margin-bottom:30px;margin-right:150px; margin-top:-4.5%">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="form-row" style="margin-top:30px;">
                    <label for="name" style="margin-left:70px;margin-bottom:30px;">Name:</label>
                    <input class="form-control" id="name"
                        style="margin-left:250px;margin-bottom:30px;margin-right:150px; margin-top:-4.5%"
                        aria-describedby="validationServer03Feedback" required></input>
                </div>
                <div class="form-row" style="margin-top:30px;">
                    <label for="NID-number" style="margin-left:70px;margin-bottom:30px; ">NID Number:</label>
                    <input class="form-control" id='NID-number'
                        style="margin-left:250px;margin-bottom:30px;margin-right:150px; margin-top:-4.5%"
                        aria-describedby="validationServer03Feedback" required></input>
                </div>
                <div class="form-row" style="margin-top:30px;">
                    <label for="reason" style="margin-left:70px;margin-bottom:30px; ">Reason:</label>
                    <textarea class="form-control" id="reason"
                        style="margin-left:250px;margin-bottom:30px;margin-right:150px; margin-top:-4.5%"
                        aria-describedby="validationServer03Feedback" required></textarea>
                </div>
                <button style="margin-left: 75%; width:13%; margin-bottom:20px;" type="submit"
                    class="btn btn-primary">Next</button>
            </fieldset>
        </form>

    </div>



</div>


<?php include('footer.php');?>