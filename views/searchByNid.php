<?php
    include 'dashboard.php';
    ?>
<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="../css/searchByNid.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/logFog.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body style="background-color:#ced4da">
    <div class='searchByNid'>
        <form id="form" class='form'
            style="width: 80%; margin-left:300px;  margin-top:15px; overflow:auto;   height:600px; ">
            <fieldset
                style="background-color:#fffef4;margin-left:20px  border-bottom:10px; padding-bottom:12px;padding-top:20px; ">
                <h2 style="color:black ; margin-bottom:18px;padding-top:10px;">FADTS|SearchByNID</h2>
                <!--<fieldset style="padding: 35px 50px,background-color-black">
              <-- <div class = "form-group"> -->

                <div class="form-row">
                    <label for="NID-number" style="margin-left:70px;margin-bottom:18px;"><b>NID:</b></label>
                    <input class="form-control " id='NID-number'
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;"></input>
                    <small>Error</small>
                </div>

                <div class="form-row">
                    <label for="name" style="margin-left:70px;margin-bottom:18px;"><b>Name:</b></label>
                    <input class="form-control" id="name"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;"></input>
                    <small>Error</small>
                </div>

                <div class="form-row">

                    <label for="birth-date" style="margin-left:70px;margin-bottom:18px;"><b>Birth Date:</b></label>
                    <input class="form-control" id="birth-date"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;"></input>
                    <small>Error</small>
                </div>

                <div class="form-row">
                    <label for="address" style="margin-left:70px;margin-bottom:18px;"><b>Address:</b></label>
                    <textarea class="form-control" id="address"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;"></textarea>
                    <small>Error</small>
                </div>

                <div class="form-row">
                    <label for="job" style="margin-left:70px;margin-bottom:18px;"><b>Job Type:</b></label>
                    <input class="form-control" id="job"
                        style="margin-left:150px;margin-bottom:20px;margin-right:150px;"></input>
                    <small>Error</small>
                </div>


                <!-- </div>     -->


                <button style="margin-left: 85%;" type="submit" class='btn btn-primary' onclick="validateNID()">Search</button>
                <!--</fieldset>-->
            </fieldset>
        </form>
    </div>

</body>
<script type="text/javascript">
function validateNID(){
    alert("sdfkjsjb");




}
 var nid =getElementById("NID-number");



 
       
</script>
</script> -->
 <script src="../Js/searchByNid.js"></script> -->

</html>