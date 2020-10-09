<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>forgot password</title>
   <link rel="stylesheet" type="text/css" href="<?php echo CSS.'logFog.css'?>">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
   <h2> FADTS | Reset Password</h2>
   <div class="box">
      <form class="box" method="post" action="/fadts/app/model/home/loginModel.php">

         <fieldset style="padding: 35px 50px">

            <legend style="color: #218BDB"><B>Reset your account password</B></legend>

            <div class="form-group">
               <label for="password"><B>New Password</B></label>
               <input type="password" class="form-control" name="newpassword" placeholder="Enter Password">
            </div>

            <div class="form-group">
               <label for="password"><B>Re-Enter Password</B></label>
               <input type="password" class="form-control" name="againpassword" placeholder="Again Enter New Password">
            </div>
            </br>

            <button type="submit" name="fogsubmit" class="btn btn-primary"><B>Submit</B></button><br><br>

            <div class="new-account">

            </div>

         </fieldset>

      </form>

   </div>

</body>

</html>