<?php
   session_start();
   $_SESSION["username"]='guest';
   unset($_SESSION["password"]);
   
   echo 'You have cleaned session';
   header('Refresh: 1; URL = index.php');
?>