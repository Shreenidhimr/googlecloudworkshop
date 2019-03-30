<html>
<form action="logout.php" align="right">

<?php
session_start();
if(!isset($_SESSION['id']))
{	echo"<script>top.location='index2.html';</script>";}

$id=$_SESSION['id'];
echo"$id";
echo"<input type='submit' value='logout'>";

?>
</form>
</html>