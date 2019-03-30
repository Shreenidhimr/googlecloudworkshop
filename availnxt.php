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
</style>
<?php
 mysql_connect("localhost","root","");
 mysql_select_db("library");
 $bk=$_REQUEST['bk'];
 $bk=strtoupper($bk);
 

 $data=mysql_query("SELECT * FROM `inward` WHERE `book name`='$bk';");
 echo"<table class='gridtable' border='2' align='center'>";
 echo"<body><tr><td>BOOK<td>AUTHOR<td>COUNT</tr>";
while($a=mysql_fetch_array($data))
{	
	$b=$a['book name'];
	$c=$a['author name'];
    $d=$a['count'];
}
$query=mysql_query("SELECT COUNT(*) FROM `library` WHERE `book`='$bk';");
$query1=mysql_fetch_array($query);
$q=$query1[0];

                         $d=$d-$query1[0];
	echo"<tr><td>$b<td>$c<td>$d</tr>";

echo"</table></body>";
?>
