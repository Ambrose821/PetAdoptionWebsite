<?php
session_start();
session_destroy();
header("Location: logoutConfirm.php");
exit();
?>
