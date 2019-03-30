<?php
session_start();
unset($_SESSION['usn']);
echo"<script>top.location='frame log.html'</script>";
?>