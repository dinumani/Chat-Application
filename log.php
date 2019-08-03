<?php

session_start();
$servername = "localhost";
$username = "id3075277_gasagency";
$password = "mani1998";
$dbname = "id3075277_gasagency";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$ename=$epass=$email=$emob=$eror_messsage="";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
$Userid=$_POST['uname'];
$Pass=$_POST['pass'];
$matchfount=false;
$sql = "SELECT user_id,password FROM cus_info";
$result=mysqli_query($conn,$sql);
$matchfound=false;
if (mysqli_num_rows($result)>0) {
    
while($row=mysqli_fetch_array($result)){
  
if($Userid==$row["user_id"])
{
  if($Pass==$row["password"]){
      
      $matchfound=true;
      break;
      
  }
}

}
mysqli_close($conn);
if(!$matchfound)
{
echo "
<script>
var error='Invalid Credentials !!!';
window.location.href='login.php?err='+error;
</script>
";
}
else
{
    $_SESSION['userid']=$Userid;
    header('Location: slam.php');
    exit;
    
}
    
}

}


?>
