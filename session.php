 <?php
 session_start();
 $usn=$_REQUEST['id'];
 $_SESSION['usn']=$usn;
   echo"<script>top.location='framead.html'</script>";
   ?>