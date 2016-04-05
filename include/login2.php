<?php  
$error = '';
if (isset($_POST['login'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    // location of usernames and passwords
    $userlist = 'H:\Vef2A\vef_2a\userlist\userlist.csv';
    // location to redirect on success
    $redirect = 'http://tsuts.tskoli.is/2T/1608984379/include/profile.php';
    require_once 'include/authenticate.php';
    }
 ?>  