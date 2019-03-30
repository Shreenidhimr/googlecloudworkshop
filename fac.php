
<html>
<style>
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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

input[type=submit]:hover {  width: 15%;
    
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    background-color: #4CAF50;
}

input[type=button]:hover {  width: 15%;
    
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    background-color: #4CAF50;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

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
<form  action=fac1.php>
<?php
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
	$p=mysql_query("select role from role where username='$user';");
	while($data1=mysql_fetch_array($p))
	{
		$role=$data1['role'];
		echo"<tr><td>$name<td>$desig<td>$user<td>$role</tr>";
	}
}
echo"</table>";

?>



<center><input type="button" value=" BACK " onclick="window.history.back();" ><?php echo"  "; ?><input type="submit" value="EDIT"  formtarget="right"></center>
</form>	