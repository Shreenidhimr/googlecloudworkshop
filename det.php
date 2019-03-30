<html>
<style>
body{
	  background-color: #f2f2f2;
	  float: center;
  }
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
    
  </style>
<?php
mysql_connect("localhost","root","");
mysql_select_db("library");
 session_start();
$id=$_SESSION['usn'];

$data=mysql_query("select usn,name,sem,branch from details where usn='$id';");
echo"<table class='gridtable' border='2' align='center'>";
echo"<tr><td>USN<td>NAME<td>SEM<td>BRANCH</tr>";
while($a=mysql_fetch_array($data))
{
	$b=$a['name'];
	$c=$a['sem'];
    $d=$a['branch'];
    
	echo"<tr><td>$id<td>$b<td>$c<td>$d</tr>";
}
echo"</table>";

?>
</html>