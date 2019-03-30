<?php
mysql_connect("localhost","root","");
mysql_select_db("library");
session_start();
$id=$_REQUEST['id2'];
$pw=$_REQUEST['password'];
$pw=md5($pw);
$id=strtoupper($id);
$p=mysql_query("SELECT `usn`, `password` FROM `login` WHERE usn='$id';");
 while($pd=mysql_fetch_array($p))
{
  $psd=$pd['password'];
}


if ($psd==$pw)
 {	
    $r=mysql_query("select role from role where username='$id';");
    while($rol=mysql_fetch_array($r))
   {
     $role=$rol['role'];
   }
	
      if($role=='admin')
	   {
		   $_SESSION['id']=$id;
          header("location:frame log.php");
	   }
     else if($role=='root')
	   {
		$_SESSION['id']=$id;
        header("location:rootframe.php");
	   }
  else 
	  {
		 $_SESSION['id']=$id;
		header("location:framestu.html");
      }
 }
else
{
 echo"<script>alert('ID AND PASSWORD ARE INCORRECT OR LOGIN NOT SUCCUESSFULL');window.location='index2.html'</script>";
}
 ?>
 