<?php 

if(isset($_POST['fogsubmit'])){


   $selector = bin2hex(random_bytes(8));
   $token = random_bytes(32);

   $myurl = "localhost/home/reset?selector=".$selector."&validator=".bin2hex($token);
   
   $expires = date("U") + 1800;

   require 'connection.php';   // database connection file calling

   $username = $_POST['username'];
   $email    = $_POST['email'];

   $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
   $stmt = mysqli_stmt_init($con);
   
   if(!mysqli_stmt_prepare($stmt,$sql)){
      //header('Location:/fadts/home/forgot');
      echo "There was an error!";
      exit();   
   }
   else{
      mysqli_stmt_bind_param($stmt,"s",$email);
      mysqli_stmt_execute($stmt);
   }   

   $sql = "INSERT INTO pwdReset (pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES (?,?,?,?)";

   $stmt = mysqli_stmt_init($con);

   if(!mysqli_stmt_prepare($stmt,$sql)){
      header('Location:/fadts/home/forgot');
      exit();   
   }
   else{
      $hashedToken = password_hash($token, PASSWORD_DEFAULT);
      mysqli_stmt_bind_param($stmt,"ssss",$email,$selector,$hashedToken,$expires);
      mysqli_stmt_execute($stmt);
   }

   mysqli_stmt_close($stmt);
   mysqli_close($con);

   $to = $email;

   $subject = "Reset your password";

   $message = "<p>We recieved a password reset request. The link to reset your password is below. If it is not you make this request, you can ignore this email</p>";
   $message .= '<p>Here is your password reset link: </br>';
   $message .= '<a href"' .$myurl. '">'.$myurl.'</a></p>';

   $headers = "From: FADTS <fadts@gmail.com>\r\n";
   $headers .= "Reply-To: fadts@gmail.com\r\n";
   $headers .= "Content-type: text/html\r\n";

   mail($to,$subject,$message,$headers);

   header("Location:/fadts/home/forgot?reset=success");


}
else{
   header('Location:/fadts/home/forgot');
   exit();
}