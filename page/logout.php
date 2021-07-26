<?php
session_start();

$_SESSION["isLogin"] = "false";
header("Location: /page/login.php");

session_unset();
session_destroy();
