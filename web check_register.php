<?php
$servername = "localhost";
$username = "id3075277_gasagency";
$password = "mani1998";
$dbname = "id3075277_gasagency";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$ename=$epass=$email=$emob=$eror_messsage="";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$Name=$_POST['username'];

$Pass=$_POST['password'];

$sql2 = "INSERT INTO cus_info(user_id,password) values ('$Name','$Pass')";
if(mysqli_query($conn,$sql2))
{
echo "Registration Success !!!";
echo "Mani";

}
else
{
    echo "Registration Failed!!!\n";
    echo "Mani\n";
    echo "Mani\n";
}

    








?>

