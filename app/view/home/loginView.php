<?php 
   session_start();
   session_unset();
   session_destroy();
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>login</title>
   <link rel="stylesheet" type="text/css" href="<?php echo CSS.'logFog.css'?>">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body  >  
   <h2> FADTS | User Login</h2>

      <form id="form" class="box"  method="post" action="/fadts/home/indexModel">
      
         <fieldset style="padding: 35px 50px">

            <legend style="color: #218BDB"><B>Sign in to your account</B> </legend>

            <?php
               
               if(isset($_GET['error'])){
         
                  $error = $_GET['error'];
                  if($error == "db_conn_err"){
                     echo '<div class="alert alert-danger" role="alert">Database connection error!</div>';
                  }
                  if($error == "wrong_user_or_pass"){
                     echo '<div class="alert alert-danger" role="alert">Wrong username or password!</div>';
                  }
                  if($error == "direct_access"){
                     echo '<div class="alert alert-danger" role="alert"">Direct access not allowed!</div>';
                  }
               }
            ?>

            <div class="form-group">
               <label for="username"><B>User name</B></label>
               <input type="text" id="username" class="form-control" name="username" placeholder="Enter Username">
               <small></small>
            </div>

            <div class="form-group">
               <label for="password"><B>Password</B></label>
               <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
               <small>error message</small>
            </div>

            <button type="submit" name="logsubmit" class="btn btn-primary">Login</button><br><br>

            <div class="new-account">
               <label style="font-size: 13px"><B>Don't remember password?</B></label>
               <a href="/fadts/home/forgot"><B>Click here</B></a>
            </div>

         </fieldset>

      </form>


</body>
<!-- <script src="/fadts/app/js/home.js"></script> -->

</html>
