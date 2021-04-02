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
                     echo '<div class="alert alert-danger" role="alert">Wrong e-mail or password!</div>';
                  }
                  if($error == "direct_access"){
                     echo '<div class="alert alert-danger" role="alert"">Direct access not allowed!</div>';
                  }
                  if($error == "new_pwd_updated"){
                     echo '<div class="alert alert-success" role="alert">Password added successfully!</div>';
                  }
               }
            ?> 

            <div class="form-group">
               <label for="username"><B>Email</B></label>
               <input type="email" id="email" class="form-control" name="email" placeholder="Enter e-mail">
               <small></small>
            </div>

            <div class="form-group">
               <label for="password"><B>Password</B></label>
               <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
               <small>error message</small>
            </div>

            <button type="submit" name="logsubmit" class="btn btn-primary" >Login</button><br><br>

            <div class="new-account">
               <label style="font-size: 13px"><B>Don't remember password?</B></label>
               <a href="/fadts/home/forgot"><B>Click here</B></a>
            </div>

         </fieldset>

      </form>



</body>
 <script src="/fadts/app/js/home.js"></script>

</html>
