<?php

   $conn = mysqli_connect("localhost", "root", "", "chat");
   if(!$conn){
       echo "Not Connected to Database" . mysqli_connect_error();
   }

?>
