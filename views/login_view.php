<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/logFog.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	
</head>
<body >
	<h2> FADTS | User Login</h2>
		<?php echo "$this->$name" ?>
		<div class="box">		
			<form class="box" method="post">
			<fieldset style="padding: 35px 50px">
			<legend style="color: #218BDB"><B>Sign in to your account</B> </legend>	
				<div class="form-group">
    				<label for="username"><B>User name</B></label>
    				<input type="text" class="form-control" name="username" placeholder="Enter Username">
  				</div>
  			<div class="form-group">
    			<label for="password"><B>Password</B></label>
    			<input type="password" class="form-control" name="password" placeholder="Enter Password">
  			</div>
  			<button type="submit" class="btn btn-primary">Login</button><br><br>
  			<div class="new-account">
				<label style="font-size: 13px"><B>Don't remember password?</B></label>
				<a href="<?php echo "";?>" ><B>Click here</B></a>	
			</div>	
			</fieldset>
			</form>
		</div>
</body>

</html>
