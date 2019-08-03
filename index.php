<html>
<head>

<title>Home</title>

<frameset rows="20%,*" border="2">
<frame src="head.html" name="head">
<frameset cols="20%,*">

<frame src="menu.html" name="menu">

<?php

session_start();

if($_SESSION['userid']!=''||$_SESSION['userid']!=null)
{
   echo "<frame src='slam.php' name='body'>";
}
else
echo "<frame src='process.php' name='body'>";
?>



</frameset> 
</frameset>


</head>










</html>
