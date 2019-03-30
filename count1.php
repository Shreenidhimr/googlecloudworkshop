<html>
<h3 align="center">DUE LIST</h3>
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
input[type=date], select {
    width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=button] {
    width: 25%;
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
  <script>
function printbt()
{
	var printbt = document.getElementById('print');
	var backbt = document.getElementById('back');
	printbt.style.visibility='hidden';
    backbt.style.visibility='hidden';	
	window.print();
	window.location("rootframe.html");
}
</script>


<?php

mysql_connect("localhost","root","");
mysql_select_db("library");
$cd=$_REQUEST['cd'];


function cmp($cd1,$dd1)
{
  $d=explode("-",$dd1);
  $c=explode("-",$cd1);	
    if ($c[0]<$d[0])
       return -1;

    else if ($c[0]>$d[0])
       return 1;

    if ($c[0]==$d[0])
    {
         if ($c[1]<$d[1])
              return -1;
         else if ($c[1]>$d[1])
              return 1;
         else if ($c[2]<$d[2])
              return -1;
         else if($c[2]>$c[2])
              return 1;
         else
              return 0;
    }
}
$data=mysql_query("SELECT * from `library`");
echo"<table class='gridtable' border='2' align='center'>";
echo"<tr><td>USN<td>BOOK NAME<td>AUTHOR<td>DATE OF ISSUE<td>DUE DATE</tr>";
while($a=mysql_fetch_array($data))
{
  $id=$a['id'];
  $book=$a['book'];
  $author=$a['author'];
  $doi=$a['DOI'];
  $dd=$a['DD'];
  
 $ret=cmp($cd,$dd);
 if($ret>=0)
 {
	 echo"<tr><td>$id<td>$book<td>$author<td>$doi<td>$dd</tr>";
 }
 
 
  
}



echo"</table>";

	


  ?>