<?php
   $host = "localhost";
   $username = "root";
   $password = "donsaale";
   $db = "al_razzaq";

   $conn = mysqli_connect($host, $username, $password, $db);

   if ($conn) {
      // echo "connection successful";
   }
   else{
       echo "connection failed";

   }
?>