<?php
session_start();
session_unset();
session_destroy();
header("Location: /ProyectoFinal/WEB/Login.html");
exit();
?>