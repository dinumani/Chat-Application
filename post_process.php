<html>
<head>

<style>
body{

background-color:skyblue;
}
div{
height:100%;
width:100%;
}
h1{
color:blue;
}

pre{
font-size:16px;
}


</style>

</head>

<body>

<?php
$uid=$_GET['userid'];

?>


<fieldset>


<form method="post" action="insertp.php">




<legend>Slam Book</legend>

<pre>
                            User Id: <input type="text" name="uid" value="<?php echo $uid; ?>"> *<br>
                1.My Name in ur Phone : <input type="text" name="cname" required><br>
          2.Relation between u and me : <input type="text" name="relation" required><br>
             3.Something u like in me : <input type="text" name="like" required><br>
             4.Something u hate in me : <input type="text" name="hate" required><br>
 5.What would be ur reaction if I die : <input type="text" name="die" required><br>
6.what did u feel when u first saw me : <input type="text" name="first" required><br>
                   7.A Message for me : <input type="text" name="message" required><br>
                 8.A nick name for me : <input type="text" name="nick" required><br>
   9.A song u want to dedicate for me : <input type="text" name="song" required><br>
                      10.Your Name Pls. <input type="text" name="n"> (Optional...)<br>
                                       <input type="submit" value="POST">
</pre>
</form>



</fieldset>



</body>



</html>
