<?php 
// check that form has been submitted and that name is not empty
if (isset($_POST['send'])) {
	if ($_POST && !empty($_POST['firstname'])) {
// set session variable
$_SESSION['firstname'] = $_POST['firstname'];
}
if ($_POST && !empty($_POST['lastname'])) {
// set session variable
$_SESSION['lastname'] = $_POST['lastname'];

}
if ($_POST && !empty($_POST['firstname'])) {
// set session variable
$_SESSION['email'] = $_POST['email'];

}
}
?>

<h1>Personal Info: </h1>
<p class="info_font"><?php if (isset($_SESSION['firstname'])) {
	echo $_SESSION['firstname'];
} ?></p>
<p class="info_font"><?php if (isset($_SESSION['lastname'])) {
	echo $_SESSION['lastname'];
} ?></p>
<p class="info_font"><?php if (isset($_SESSION['email'])) {
	echo $_SESSION['email'];
} ?></p>
