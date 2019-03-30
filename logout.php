<?php
session_start();
unset($_SESSION['id']);
session_destroy();
echo"<script>top.location='index2.html'</script>";
?>