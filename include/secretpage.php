<?php
session_start();
// if session variable not set, redirect to login page
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != 'Jethro Tull') {
header('Location: http://localhost/phpsols/sessions/login.php');
exit;
}
?>