<html>
<head>
<style>
body{

background-color:yellow;
}
</style>
</head>

<body>
<?php
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


$sql = "SELECT cdTitle,cdGenre FROM CD;";

$sql2 = "SELECT artName, cdTitle, cdGenre, cdRating, cdYear FROM Artist NATURAL JOIN CD";
$sql3="select artName,cdRating,artNationaligy from Artist a join CD b where a.artId=b.artId";
$result=mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);

if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_array($result))
{
    $cdTit=$row['cdTitle'];
    $cdGen=$row['cdGenre'];

echo "<br>$cdTit&nbsp,&nbsp$cdGen";


}


}
if(mysqli_num_rows($result2)>0)
{
    echo "<b><br><br><br><br><br>artName , cdTitle             ,cdGenre     , cdRating     , cdYear<br><br></b>";
 while($row=mysqli_fetch_array($result2))
 {
     
     echo $row['artName']." , ".$row['cdTitle']." , ".$row['cdGenre']." , ".$row['cdRating']." , ".$row['cdYear']."<br><br>";
     
 }
}
if(mysqli_num_rows($result3)>0)
{
    echo "<br><br><br><br><br><table border='2'>";
      echo "<tr><th>ArtName</th><th>CDRating</th><th>artNatinaligy</th><tr>";
 while($row=mysqli_fetch_array($result3))
 {
   
     echo "<tr>
     <td> ".$row['artName']
     ."<td> ".$row['cdRating']
     ."<td> ".$row['artNationaligy']
     ."</tr>";     
 }
 echo "</table>";
}
else
echo "No data found";

?>


</body>

</html>
