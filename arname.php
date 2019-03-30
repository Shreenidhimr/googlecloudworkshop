<?php
mysql_connect("localhost","root","");
mysql_select_db("library");
$usn=$_REQUEST['usn'];
$name=$_REQUEST['name'];
$sem=$_REQUEST['sem'];
$branch=$_REQUEST['branch'];
mysql_query("INSERT INTO `details`(`usn`, `name`, `sem`, `branch`) VALUES ('$usn','$name','$sem','$branch')");

echo"<script>alert('inserted');</script>";
?>