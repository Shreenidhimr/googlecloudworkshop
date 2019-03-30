
<?php
mysql_connect("localhost","root","");
mysql_select_db("library");
 session_start();
$usn=$_SESSION['usn'];
$doi=$_REQUEST['doi'];
$dd=$_REQUEST['dd'];
$bkname=$_REQUEST['bkname'];
$arname=$_REQUEST['arname'];
$bkname=strtoupper($bkname);
$arname=strtoupper($arname);
mysql_query("INSERT INTO `library`(`id`, `book`, `author`,`DOI`,`DD`) VALUES ('$usn','$bkname','$arname','$doi','$dd');");

echo"<script>alert('inserted');</script>";
 echo"<script>top.location='framead.html'</script>";
?>
