<?php
mysql_connect("localhost","root","");
mysql_select_db("library");
$n=$_REQUEST['n'];
for($i=1;$i<=$n;$i++)
{if(isset($_REQUEST['z'.$i]))
	{
	$bk=$_REQUEST['z'.$i];
	
	mysql_query("delete from library where book='$bk';");
	}
}
echo"<script>alert('deleted'); top.location='framead.html';</script>";
?>