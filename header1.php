<html>
<style>
body{
background-color:#006666;
}
input[type=submit] {
    
    background-color: #2B2B2B ;
    color: white;
    padding: 6px 10px;
    margin: 4px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #4CAF50;
}
</style>


<form action="logout.php" align="right">
<?php
session_start();
if(!isset($_SESSION['id']))
{	echo"<script>top.location='index2.html';</script>";}

$id=$_SESSION['id'];

echo"<img src='b.png' width='72%'  height='80%' align='left' alt='load failed'/>";
echo"<img src='icon1.jpg' width='5%' height='45%' align='right' alt='load failed'/><br>";
echo"<br><br><h10 style='color:white'>$id</h10>";
echo"<input align='right' type='submit' value='logout' formtarget='right'>";

?>
</form>
</html>