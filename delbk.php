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
  input[type=submit] {
    width: 15%;
    background-color: #00abff ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #4CAF50;
}
 input[type=button] {
    width: 15%;
    background-color: #00abff ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=button]:hover {
    background-color: #4CAF50;
}

  </style>
<form action='deletebk.php' method='post'>
<?php
$i=1;
mysql_connect("localhost","root","");
mysql_select_db("library");
 session_start();
$id=$_SESSION['usn'];


$data=mysql_query("select * from library where id='$id';");
echo"<table class='gridtable' border='2' align='center'>";
 echo"<tr><td>select<td>USN<td>BOOK<td>AUTHOR<td>DATE OF ISSUE<td>DUE DATE</tr>";

 while($a=mysql_fetch_array($data))
{
	$b=$id;
	$c=$a['book'];
    $d=$a['author'];
	$doi=$a['DOI'];
	
	
	$dd=$a['DD'];
 
 echo" <tr><td><input type='radio' name='z$i' value='$c'/><td>$b<td>$c<td>$d<td>$doi<td>$dd</tr>"; 
  $i++;	
}
$i--;
echo "</table>";
echo "<p align='center'>";
echo "<input type='hidden' name='n' value='$i'/>";

echo"<input type=\"button\" value=\" BACK \" onclick=\"window.history.back();\" >";
echo"   ";
echo"<input type='submit' value='submit'>";
?>

</form>
</html>
