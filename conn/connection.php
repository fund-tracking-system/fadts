<?php 
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'project';

   $connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

   if(mysqli_connect_errno()){
      die('Database connection failed'.mysqli_connect_errno());
   }

   ?>