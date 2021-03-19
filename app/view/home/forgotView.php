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

            <?php
                
               if(isset($_GET['error'])){
         
                  $error = $_GET['error'];
                  if($error == "db_conn_err"){
                     echo '<div class="alert alert-danger" role="alert">Database connection error!</div>';
                  }
                  if($error == "wrong_id_or_mail"){
                     echo '<div class="alert alert-danger" role="alert">Wrong e-mail or User NID!</div>';
                  }
                  if($error == "success"){
                     echo '<div class="alert alert-success" role="alert">Check your email!</div>';
                  }
               }
            ?> 


            <div class="form-group">
               <label for="username"><B>User NID</B></label>
               <input type="text"  class="form-control" name="usernid" id="usernid" placeholder="Enter NID"><small>Error message</small>
            </div>
            <div class="form-group">
               <label for="email"><B>Email</B></label>
               <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
               <small>Error message</small>
            </div>
 
            <button type="submit" name="fogsubmit" class="btn btn-primary">Submit</button><br><br>

            <div class="new-account">
               <label style="font-size: 13px"><B>Back to login :</B></label>
               <a href="/fadts/home/index"><B>Click here</B></a>
            </div>

         </fieldset>
      </form>
   </div>

</body>

<!-- <script src="/fadts/app/js/home.js"></script>  -->

</html>