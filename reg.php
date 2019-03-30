<html>
<!DOCTYPE html>
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
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
<script type="text/javascript" src="disable.js"></script>


<h1 align="center">ENTER DETAILS</h1>
  
<div>
<table align="center">

<form action="data.php" method="post">
<tr>

<td style="width: 40%; text-align:right" align="right">

<label for="uusn">ENTER USN</label>
</td>
                            <td style="width: 60%; text-align: left">
<input name=usn id="uusn" onblur="alphanumeric(usn);" type=text size="10" placeholder="4jn...." required>
<br>
</td>
</tr>
<tr>
<td style="width: 40%; text-align:right" align="right">

<label for="nname">ENTER NAME</label>
</td>
                            <td style="width: 60%; text-align: left">
<input name=name1 id="nname"  onblur="allLetter(name1);" type="text" size="20" placeholder="your name" required>
<br>
</td>
</tr>
<tr>
<td style="width: 40%; text-align:right" align="right">

<label for="ssem">ENTER SEM</label>
</td>
                            <td style="width: 60%; text-align: left">
<input name=sem1 id="ssem" onblur="allnum(sem1);" type="text" size="20"required>
<br>
</td>
</tr>
<tr>
<td style="width: 40%; text-align:right" align="right">

<label for="bbranch">ENTER BRANCH</label>
 
</td>
                            <td style="width: 60%; text-align: left"> <select id="bbranch" name="branch">
      <option value="INFORMATION SCIENCE AND ENGINEERING">ISE</option>
      <option value="COMPUTER SCIENCE AND ENGINEERING">CSE</option>
      <option value="ELECTRONICS AND COMMUNICATION AND ENGINEERING">ECE</option>
	  <option value="ELECTRICAL AND ELECTRONICS ENGINEERING">EEE</option>
	  <option value="TELECOMMUNICATION ENGINEERING">TCE</option>
      <option value="MECHANICAL ENGINEERING">ME</option>
	  <option value="CIVIL ENGINEERING">CE</option>
	  </select>
<br>
</td>
</tr>
<tr>
</div>

<td style="width: 40%; text-align:right" align="right">

<label for="sec">ENTER SECTION</label>
</td>
                            <td style="width: 60%; text-align: left">
<input name=sec id="sec" onblur="allLetters(sec);" type="text" size="20" placeholder="your sec"required>
<br>
</td>
</tr>
<tr>
<td style="width: 40%; text-align:right" align="right">
 
<label for="pass">CREATE PASSWORD</label required>
</td>
                            <td style="width: 60%; text-align:left">
<input name="password" id="pass" type="password" size="20"required>
<br>
</td>
</tr>
<tr>
<td style="width: 40%; text-align:right" align="right">

<center>CONFIRM PASSWORD:
</td>
<td style="width: 60%; text-align:left"><input name="cpassword" type="password" size="20"required></center>
<center>
</td>
</tr>

<br>

</table>
                         <center><input type="button" value=" BACK " onclick="window.history.back();" >  <input type="submit" value="submit" align="center">
							
							
	</form>			