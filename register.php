<html>
<head>
<style>
body{

background-color:skyblue;
}
</style>

</head>
<body >

<?php
session_start();
$count=0;

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
$Name=$_POST['name'];
$Userid=$_POST['userid'];
$Pass=$_POST['password'];
$Mail=$_POST['mail'];
$Mob=$_POST['mob_no'];




if(!preg_match("/^[a-zA-Z'-]+$/",$Name))
{
    $ename="Enter Valid Name";
}
else
$count++;

if(!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,20}$/",$Pass))
$epass="Use Strong Password";
else
$count++;

if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$Mail))
$email="Enter Valid Email !!!";
else
$count++;

if(!preg_match("/^[0-9]{10}+$/",$Mob))
$emob="Enter Valid Mobile No. !!!";
else
$count++;
$sql = "SELECT user_id FROM cus_info";
$result=mysqli_query($conn,$sql);
$matchfound=false;
if (mysqli_num_rows($result)>0) {
    
while($row=mysqli_fetch_array($result)){
$current=$row["user_id"];
if($Userid==$current)
{
   $matchfound=true;
   $error_message="<font color='red'>User Id Already Exist !!!</font>";
   break;
}
}

}

if(!$matchfound)
    $count++;
if($count>4)
{
    
$sql2 = "INSERT INTO cus_info values ('$Name','$Userid','$Pass','$Mail','$Mob')";
if(mysqli_query($conn,$sql2))
{
echo "<center><h1>Registration Success !!!</h1><br>";
unset($_SESSION['userid']);
$_SESSION['userid']=$Userid;

echo "
<script>
window.location.href='slam.php';
</script>";
}
else
echo "Registration Failed !!!";
}
else
echo("<font color='white'> Please Correct the Following Error to Proceed...!!!</font>");
    
}
mysqli_close($conn);
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SERVER"]); ?>">
<fieldset>
<legend >New User</legend>
<pre>
                          Name: <input type="text" name="name"  required ><span>   <?php echo $ename;?></span><br>
                       User Id: <input type="text" name="userid" id="user" required "><span>   <?php echo $error_message;?></span><br>
                      Password: <input type="password" name="password" required><span> {password should contain 1 capital letter, 1 special character and length minimum of 8}  <?php echo $epass;?></span><br>
                        E-mail: <input type="text" name="mail" required><span>   <?php echo $email;?></span><br>
                     Mobile No: <input type="text" name="mob_no" required><span>   <?php echo $emob;?></span><br>
                                  <input type="submit" value="Register">
</pre>
</fieldset>
</form>



</body>


</html>
