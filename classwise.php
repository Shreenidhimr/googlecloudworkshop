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

input[type=submit]:hover {
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
<script type="text/javascript">
function printbt()
{
	var printbt = document.getElementById('print');
	var backbt = document.getElementById('back');
	
	printbt.style.visibility='hidden';
	backbt.style.visibility='hidden';
   	
	window.print();
	window.location("rootframe.php");
}
</script>
<?php

mysql_connect("localhost","root","");
mysql_select_db("library");

$sem=1;
while($sem<=8)
{    echo"<h3 align=center>SEM:$sem</h1>";
	echo"<table class='gridtable' border='2' align='center'>";
echo"<tr><td>USN<td>BOOK NAME<td>AUTHOR<td>DATE OF ISSUE<td>DUE DATE</tr>";
	$query=mysql_query("SELECT usn FROM `details` WHERE `sem`=$sem;");
      while($b=mysql_fetch_array($query))
	  {
		  $usn=$b['usn'];
		  
         $status=mysql_query("SELECT * FROM `library` WHERE `id`='$usn';");
            
              while($a=mysql_fetch_array($status))
               {

                     	$z=$a['id'];
	                   $b=$a['book'];
                        $c=$a['author'];
                         $doi=$a['DOI'];
	                         $dd=$a['DD'];
	                  echo"<tr><td>$z<td>$b<td>$c<td>$doi<td>$dd</tr>";
               }
             
          
      }
	    echo"</table>";
              $sem++;
}

?>
<p align=center>

<input type="button" value=" BACK " id="back" onclick="window.history.back();" ><?php echo"  "; ?><input type="submit" value="PRINT" id="print" onclick="printbt();"/></p>
</html>