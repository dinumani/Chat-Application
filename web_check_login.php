<?php

   $con=mysqli_connect("localhost","id3075277_gasagency","mani1998","id3075277_gasagency");

   if (mysqli_connect_errno($con)) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
	
   $username = $_POST['username'];
   $password = $_POST['password'];
   $result = mysqli_query($con,"SELECT mob_no,mail_id FROM cus_info where user_id='$username' and password='$password'");
   $row = mysqli_fetch_array($result);
   $data = $row[0];
   $mail = $row[1];

   if($data){
     echo "Login Success !!!";
     
   }
   else
   {
       echo "Invlid Credentials !!!";
   }
	
   mysqli_close($con);
 ?>
