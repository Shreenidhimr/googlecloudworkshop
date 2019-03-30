<html>
<style>
input[type=password], select {
    width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=text], select {
    width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: ;
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

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}.select-selected {
  background-color: DodgerBlue;
</style>

<div>
<form align="center" action="session.php" method="post">
ENTER USN:<input type="text" name="id" size="10"/required><br>
<input type="submit" value="submit"/>
</form>
<h3 align=center>OR</h3>
<form align="center" action="session.php" method="post">
SELECT NAME (FACULTY):<?php mysql_connect("localhost","root","");
mysql_select_db("library");
	$query=mysql_query("select * from faculty");
	 echo"<select name='id'>";
	 echo"<option>--none--</option>";
      while($b=mysql_fetch_array($query))
	  {
		  $name=$b['Name'];
		  $usn=$b['username'];
		 
		   echo"<option value='$name'>$name</option>";
		  
	  }
	  echo"</select>";
	  ?>
	<br><input type="submit" value="submit"/>	  
 
</form>
</div>
</html>
