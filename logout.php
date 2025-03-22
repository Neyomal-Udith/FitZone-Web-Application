<?php
session_start();
session_destroy(); 
header("Location: loginUI.php"); 
exit();
?>