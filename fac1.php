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
    width: 10%;
    background-color: #00abff ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
  input[type=select] {
    width: 10%;
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

  </style>
<form action='fac2.php' method='post'>
<?php
$i=1;
$j=1;

mysql_connect("localhost","root","");
mysql_select_db("library");

echo"<table class='gridtable' border='2' align='center'>";
echo"<tr><td>FACULTY NAME<td>DESIGNATION<td>USERNAME<td>ROLE</tr>";
$q=mysql_query("select * from faculty");
while($data=mysql_fetch_array($q))
{
	$name=$data['Name'];
	$desig=$data['designation'];
	$user=$data['username'];
	$p=mysql_query("select role from role where `username`='$user';");
	while($data1=mysql_fetch_array($p))
	{
		$role=$data1['role'];
		

       echo"<input type='hidden' name='user$i' value='$user'/>";
 
 echo" <tr><td>$name<td>$desig<td>$user<td><select name='z$i'>
      <option value='$role'>$role</option>";
	  if($role=='admin')
	  {echo" <option value='root'>root</option>
      <option value='regular'>regular</option></select></tr>";
	  }
	  if($role=='root')
	  {
		  echo" <option value='admin'>admin</option>
      <option value='regular'>regular</option></select></tr>";
	  }
	  if($role=='regular')
	  {
		  
      echo"<option value='admin'>admin</option>
        <option value='root'>root</option>
         </select></tr>"; 
	  }
  $i++;	
	}
}
$i--;
echo "</table>";
echo "<p align='center'>";
echo "<input type='hidden' name='n' value='$i'/>";
echo "<input type='hidden' name='user' value='$user'/>";
echo"<input type='submit'value='submit'>";

?>
</form>
</html>
