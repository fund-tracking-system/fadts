<?php

session_start();

require 'connection.php'; 


$sql="SELECT fundId	, name,region,publishedTime FROM fund";
$result=$con->query($sql);
$res=$result->fetch_all(MYSQLI_ASSOC); 
$_SESSION['fundList']=$res;
var_dump($res);








 header("Location:/fadts/divisional/fundDetailsSelectView"); 


?>