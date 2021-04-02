<?php 
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['fogsubmit'])){


   $selector = bin2hex(random_bytes(8));
   $token = random_bytes(32);

   $myurl = "localhost/fadts/home/reset?selector=".$selector."&validator=".bin2hex($token);

   $expires = date("U") + 1800;

   require 'connection.php';   // database connection file calling

   $usernid = $_POST['usernid'];
   $email    = $_POST['email'];


   $sql = "SELECT userid FROM user WHERE usernid=? AND email=?";
   $stmt = mysqli_stmt_init($con);
   mysqli_stmt_prepare($stmt,$sql);
   mysqli_stmt_bind_param($stmt,"ss",$usernid,$email);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);

   if(mysqli_num_rows($result)==1){

      $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
      $stmt = mysqli_stmt_init($con);
   
      if(!mysqli_stmt_prepare($stmt,$sql)){
         header('Location:/fadts/home/forgot?error=db_conn_err');
         exit();   
      }
      else{
         mysqli_stmt_bind_param($stmt,"s",$email);
         mysqli_stmt_execute($stmt);
      }   

      $sql = "INSERT INTO pwdReset (pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES (?,?,?,?)";

      $stmt = mysqli_stmt_init($con);

      if(!mysqli_stmt_prepare($stmt,$sql)){
         header('Location:/fadts/home/forgot?error=db_conn_error');
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
      $message .= "<a href = $myurl >$myurl</a></p>";

      $headers = "From: FADTS fadtsproject@gmail.com>\r\n";
      $headers .= "Reply-To: fadtsproject@gmail.com\r\n";
      $headers .= "Content-type: text/html\r\n";

      require_once "PHPMailer/PHPMailer.php";
      require_once "PHPMailer/SMTP.php";
      require_once "PHPMailer/Exception.php";

      $name='FADTS Admin';
      $mail = new PHPMailer();

      $mail->isSMTP();
      $mail->Host = "smtp.gmail.com";
      $mail->SMTPAuth = true;
      $mail->Username = "fadtsproject@gmail.com";
      $mail->Password = 'fadts@123'; 
      $mail->Port = 465;
      $mail->SMTPSecure = "ssl";

      $mail->isHTML(true);
      $mail->setFrom($email,$name);
      $mail->addAddress($email);
      $mail->Subject = ("$email ($subject)");
      $mail->Body = $message;
      $mail->createHeader($headers);

      if($mail->send()){
         header('Location:/fadts/home/forgot?error=success');
         exit();
      }else{
         header('Location:/fadts/home/forgot?error=failed');
         exit();
      }

   }
   else{
      header('Location:/fadts/home/forgot?error=wrong_id_or_mail');
      exit();  
   }
}else{
   header('Location:/fadts/home/forgot');
   exit();
}


   