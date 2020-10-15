<?php 
   session_start();
   session_unset();
   session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>forgot password</title>
   <link rel="stylesheet" type="text/css" href="<?php echo CSS.'logFog.css'?>">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
   <h2> FADTS | Forgot Password</h2>
   <div class="box">
      <form class="box" id="form" method="post" action="/fadts/home/forgotModel">
         <fieldset style="padding: 35px 50px">
            <legend style="color: #218BDB"><B>Sign in to your account</B></legend>

            <div class="form-group">
               <label for="username"><B>User name</B></label>
               <input type="text"  class="form-control" name="username" id="username" placeholder="Enter User name"><small>Error message</small>
            </div>
            <div class="form-group">
               <label for="email"><B>Email</B></label>
               <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
               <small>Error message</small>
            </div>
 
            <button type="submit" name="fogsubmit" class="btn btn-primary">Submit</button><br><br>
         </fieldset>
      </form>
   </div>

</body>
<script src="/fadts/app/js/home.js"></script> 

</html>