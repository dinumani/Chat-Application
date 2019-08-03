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

$err=$_GET['err'];
if ($_SESSION['userid'] == '' || $_SESSION['userid']==null) 
{
    echo "
    
    <form method='post' action='log.php'>

<fieldset>
<legend>Login</legend>

    <pre>
                UserId: <input type='text' name='uname' required>  <span class='error'><font color='red'>$err </font></span>
<br>
              Password: <input type='password' name='pass' required>
<br>
                        <input type='submit' value='Login'>
</pre>
</fieldset>
</form>

    
    
    ";
    
    
}
else
echo "
<script>
window.location.href='slam.php';
</script>
";



?>






</body>

</html>
