<?php
$Userid=$_POST['uid'];
if($Userid==null || $Userid=="")
 {
     echo "<script type='text/javascript'>alert('User Id Must be given....');
     window.location.href='process.php';
     </script>";
 };
$name=$_POST['cname'];
$Relation=$_POST['relation'];
$Like=$_POST['like'];
$Hate=$_POST['hate'];
$Die=$_POST['die'];
$First=$_POST['first'];
$Message=$_POST['message'];
$Nick=$_POST['nick'];
$Song=$_POST['song'];
$Sender=$_POST['n'];



$servername = "localhost";
$username = "id3075277_gasagency";
$password = "mani1998";
$dbname = "id3075277_gasagency";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO slam_book (b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,userid) VALUES ('$name','$Relation','$Like','$Hate','$Die','$First','$Message','$Nick','$Song','$Sender','$Userid')";

if (mysqli_query($conn, $sql)) {
    echo "<center><h1>Thank You !</h1><br><br>
    <a href='process.php'>Back....</a>
    </center>";
} else {
    echo "<h1>Sorry, Problem Occured....Check USER ID.....</h1>";
}

mysqli_close($conn);






?>
