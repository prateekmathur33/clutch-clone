<?php
	session_start();
	unset($_SESSION['userId'], $_SESSION['user_name']);
    $_SESSION['logged_in'] = false;
    $_SESSION['err_msg'] = "You are successfully logout.";
    header("Location: index.php");
    exit;
?>