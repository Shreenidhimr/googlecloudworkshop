<?php
 
 
 
 

mysql_connect("localhost","root","");
mysql_select_db("library");
if (isset($_POST['search'])) {
 
//Search box value assigning to $Name variable.
 
   $Name = $_POST['search'];
 
//Search query.
 
   $Query = "SELECT `book name` FROM `inward` WHERE `book name`='$Name';";
 
//Query execution
 
   $ExecQuery = mysql_query($Query);
 
//Creating unordered list to display result.
 
   echo '
 
<ul>
 
   ';
 
   //Fetching result from database.
 
   while ($Result = mysql_fetch_array($ExecQuery)) {
 
       ?>
 
   <!-- Creating unordered list items.
 
        Calling javascript function named as "fill" found in "script.js" file.
 
        By passing fetched result as parameter. -->
 
   <li onclick='fill("<?php echo $Result['Name']; ?>")'>
 
   <a>
 
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
 
       <?php echo $Result['book name']; ?>
 
   </li></a>
 
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
 
   <?php
 
}}
 
 
?>
 
</ul>
 
?>