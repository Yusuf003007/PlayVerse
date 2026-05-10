<?php
session_start();

// tüm sessionları sil
session_unset();
session_destroy();

// login sayfasına yönlendir
header("Location: login.php");
exit();
?>