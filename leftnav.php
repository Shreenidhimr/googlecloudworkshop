<html>
<style>
body{
background-color:#006666;
}
input[type=submit] {
    width: 100%;
    background-color: #2B2B2B ;
    color: white;
    padding: 6px 10px;
    margin: 4px 0;
    border: none;
    border-radius: 2px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #4CAF50;
}

</style>

<form action="redirect.php">
<input type="submit" value="HOME" formtarget="right">
</form>

<form action="add.php">
<input type="submit" value="ISSUE" formtarget="right">
</form>
<form action="delbk.php">
<input type="submit" value="TO RETURN BOOKS" formtarget="right">
</form>
<form action="avail.php">
<input type="submit" value="BOOKS AVAILABILITY" formtarget="right">
</form>
<form action="inward.html">
<input type="submit" value="INWARD ENTRY" formtarget="right">
</form>
</html>