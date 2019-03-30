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

<form action="redirectroot.php">
<input type="submit" value="HOME" formtarget="right">
</form>

<form action="count.php">
<input type="submit" value="DUE LIST" formtarget="right">
</form>

<form action="export.php">
<input type="submit" value="EXPORT" formtarget="right">
</form>
<form action="fac.php">
<input type="submit" value="FACULTY LIST" formtarget="right">
</form>
</html>