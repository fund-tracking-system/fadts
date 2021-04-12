<?php

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'project';

   //create connection
   $con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

   //Check connection
   if ($con->connect_error) {
   die("Database not connected: " . $conn->connect_error);
   }
   

