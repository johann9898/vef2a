<!-- <?php  -->
if (isset($_POST['register'])) {
	$username = trim($_POST['username']);
	$password = trim($_POST['pwd']);
	$retyped = trim($_POST['conf_pwd']);
	$userfile = 'C:/private/encrypted.csv';
    require_once 'include/register_user.php';
    
}
?> -->
