<?php
session_start();

session_destroy();
echo "Session destroyed!";
header("Refresh:1; url=index.php");
?>
