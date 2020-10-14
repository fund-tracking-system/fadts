<?php

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'project';

   $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

   if(mysqli_connect_errno()){ 
      echo "connection failed";
      die('Database connection failed'.mysqli_connect_errno());
   }
   else{
      //echo "db eka goda";
   }

