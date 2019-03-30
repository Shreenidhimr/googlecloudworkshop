<html>
  <style>
  table.gridtable{
	  font-family:verdana,arial,sans-serif;
	  font-size:15px;
	  color:#333333;
	  border-width: 5px;
	  border-color: #666666;
	  border-collapse:collapse;
	  
  }
 
  table.gridtable td{
	  border-width: 1px;
	  padding: 8px;
	  border-style: solid;
	  border-color: #666666;
	  background-color: #77ccbb;
	  vertical-align: middle;
    display: table-cell;
  }
     #navbar1{width:200px;height: 20px;border:1px;float:right;}
	  a{display: block; color: grey;line-height: 20px;
          text-align: center;font-family: cursive;font-size:15px;text-decoration: none;}
    #navbar2{width:200px;height: 20px;border:1px;float:left;}
	  a{display: block; color: grey;line-height: 20px;
          text-align: center;font-family: cursive;font-size:15px;text-decoration: none;}
		</style>
<?php
 mysql_connect("localhost","root","");
 mysql_select_db("library");
 session_start();
$id=$_SESSION['id'];


if(isset($id))
 {
 $data=mysql_query("select id,book,author from library where id='$id';");
 echo"<table class='gridtable' border='2' align='center'>";
 echo"<body><tr><td>USN<td>BOOK<td>AUTHOR</tr>";
 while($a=mysql_fetch_array($data))
{
	$b=$a['id'];
	$c=$a['book'];
    $d=$a['author'];
                         
	echo"<tr><td>$b<td>$c<td>$d</tr>";
}
echo"</table></body>";
}

else
{
	echo"<script>alert('ERROR:UNABLE TO PROCESS');</script>";
	 echo"<script>window.location='pagemid.html'</script>";
}
?>

</html>