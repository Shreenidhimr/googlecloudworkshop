<?php
mysql_connect("localhost","root","");
mysql_select_db("library");
$n=$_REQUEST['n'];


for($i=1;$i<=$n;$i++)
{if(isset($_REQUEST['z'.$i])||isset($_REQUEST['user'.$i]))
	{
		
	$user=$_REQUEST['user'.$i];	
	$bk=$_REQUEST['z'.$i];
	
	
	$query=mysql_query("UPDATE `role` SET `username`='$user',`role`='$bk' WHERE `username`='$user';");
	}
}
if($query)
{
echo"<script>alert('UPDATED'); top.location='index2.html';</script>";
}
else
{
	echo"<script>alert('NOT UPDATED'); top.location='index2.html';</script>";
}
?>