<!-- <?php -->
if (isset($_POST['LogOut']))
{
$_SESSION = [];
// invalidate the session cookie
if (isset($_COOKIE[session_name()])) {
setcookie(session_name(), '', time()-86400, '/');
}
// end session
session_destroy();
}
 ?> -->