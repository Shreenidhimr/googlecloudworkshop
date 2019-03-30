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
input[type=date], select {
    width: 35%;
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
<div>
<form action="addbk.php" method="post" align="center">

<label for "bbkname">ENTER BOOK NAME:</label>
<input name="bkname" type="text" size="20" id="bbkname">
<br>
<label for "arrname">ENTER AUTHOR NAME:</label>
<input name="arname" type="text" size="20" id="arrname">
<br>
<label for="doi">ENTER DATE OF ISSUE:</label>
<input name="doi" type="date" >
<br>
<label for="dd">ENTER DUE DATE:</label>
<input name="dd" type="date" >
<br>
<input type="button" value=" BACK " onclick="window.history.back();" />
<input type="submit" value="submit">

</div>