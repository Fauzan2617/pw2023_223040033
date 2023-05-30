<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("Location:../Log dan Regis/authentication-login.php");
exit;
