<?php

mysql_connect("localhost","root","");
mysql_select_db("library");

$bname=$_REQUEST['bname'];
$year=$_REQUEST['year'];
$aname=$_REQUEST['aname'];
$count=$_REQUEST['count'];


	$bname=strtoupper($bname);
	$aname=strtoupper($aname);
	
  
  mysql_query("INSERT INTO `inward`(`book name`, `author name`, `year of publishing`, `count`) VALUES ('$bname','$aname',$year,$count);");

   echo"<script>alert('inserted');</script>";
   echo"<script>top.location='framead.html'</script>";

?>