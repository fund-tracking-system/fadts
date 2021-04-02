<?php 
$selector = $_GET["selector"];
$validator = $_GET["validator"];
if(empty($selector) || empty($validator)){
   header('Location:/fadts/home/forgot');
}else{
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Reset password</title>
   <link rel="stylesheet" type="text/css" href="<?php echo CSS.'logFog.css'?>">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
   <h2> FADTS | Reset Password</h2>
   <?php
         if((ctype_xdigit($selector) !==false) && (ctype_xdigit($validator) !==false)){        
   ?>
            <div class="box">
               <form class="box" method="post" id="form" action="/fadts/home/resetModel">

                  <fieldset style="padding: 35px 50px">

                     <legend style="color: #218BDB"><B>Reset your account password</B></legend>

                     <input type="hidden" name="selector" value="<?php echo $selector?>">
                     <input type="hidden" name="validator" value="<?php echo $validator?>">

                     <div class="form-group">
                        <label for="password"><B>New Password</B></label>
                        <input type="password" class="form-control" name="newpassword" id="newpassword"
                           placeholder="Enter Password">
                        <small>Error message</small>
                     </div>

                     <div class="form-group">
                        <label for="password"><B>Re-Enter Password</B></label>
                        <input type="password" class="form-control" name="againpassword" id="reEnter"
                           placeholder="Again Enter New Password">
                        <small>Error message</small>
                     </div>
                     </br>

                     <button type="submit" name="resetsubmit" class="btn btn-primary">Submit</button><br><br>

                  </fieldset>

               </form>

            </div>
            
   <?php 
         }     
      }
   ?>
</body>
</html>

<script src="/fadts/app/js/home.js"></script>

