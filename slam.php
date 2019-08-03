<html>
<head>
<style>
body{

background-color:skyblue;
}
</style>
</head>

<body>
<?php
session_start();
if($_SESSION['userid']!=''||$_SESSION['userid']!=null)
{
$uid=$_SESSION['userid'];
$servername = "localhost";
$username = "id3075277_gasagency";
$password = "mani1998";
$dbname = "id3075277_gasagency";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$ename=$epass=$email=$emob=$eror_messsage="";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


echo "Welcome ! ".$uid;
$sql = "SELECT * FROM slam_book where userid='".$uid."'";

echo "<h3>Your Link :  </h3>";
echo "http://tkvlic7563.000webhostapp.com/slambook/post_process.php?userid=$uid";
echo "&nbsp&nbsp&nbsp<a href='whatsapp://send?text=http://tkvlic7563.000webhostapp.com/slambook/post_process.php?userid=$uid' data-action='share/whatsapp/share'>Share</a>";

echo "<br><br><h1 style='color:green'>Your Messages...</h1>";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_array($result))
{
    $cname=$row['b1'];
    $rel=$row['b2'];
    $like=$row['b3'];
    $hate=$row['b4'];
    $die=$row['b5'];
    $feel=$row['b6'];
    $message=$row['b7'];
    $nick=$row['b8'];
    $song=$row['b9'];
    $sender=$row['b10'];
if($sender==null || $sender=="")
{
    $sender="Un Known Person :";
    
}
else
{
    $sender==$sender;
}

echo "<br><u><h2 style='color:blue;'>$sender : </h2></u>";
echo "<div style='color:red;'>

<pre>

                   1.My name in ur Phone :  $cname <br>
             2.Relation Between U and Me :  $rel<br>
                3.Something u like in Me :  $like<br>
                4.Something u hate in Me :  $hate<br>
    5.What would be ur reaction if I die :  $die<br>
   6.What did u Feel when u first Saw me :  $feel<br>
                      7.A Message for Me :  $message<br>
                    8.A Nick Name for Me :  $nick<br>
         9. A Song u Want to dedicate Me :  $song<br>
                         
</pre>

</div><hr>";





}


}
else{
    echo "You have no messages.....";
    
}
echo "<center><form>
<input type='button' value='Logout' onclick='logout()'>
</form></center>";
}
else
{
    echo "<script>
    alert('Login and then Access....');
    window.location.href='login.php';
    </script>";
    
}

?>


<script>
function logout()
{
window.location.href="logout.php";
}
</script>


</body>

</html>
