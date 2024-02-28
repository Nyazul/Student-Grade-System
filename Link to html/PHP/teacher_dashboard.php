<?php
session_start();
echo "Welcome to ".$_SESSION["user_type"]." dashboard<br>";
echo $_SESSION["user_type"]." Id : ";
echo $_SESSION["user_id"];
echo "<br>Session Id : ".session_id();
?>