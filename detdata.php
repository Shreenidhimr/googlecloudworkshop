<html>
<style>
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
    width: 35%;
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
<form align="center" action="det.php" method="post">
ENTER USN<input type="text" name="usn" size="10" maxlength="10"/><br>
<input type="submit" value="submit"/>
</html>