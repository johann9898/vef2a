<?php 
print_r($_POST);

$currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<ul id="nav">
<li><a href="index.php" <?php if ($currentPage == 'index.php') {
echo 'id="here"';} ?>>Home</a></li>
<li><a href="blog.php" <?php if ($currentPage == 'blog.php') {
echo 'id="here"';} ?>>Blog</a></li>
<li><a href="gallery.php" <?php if ($currentPage == 'gallery.php') {
echo 'id="here"';} ?>>Gallery</a></li>
<li><a href="profile.php" <?php if ($currentPage == 'profile.php') {
echo 'id="here"';} ?>><?php 
// check that form has been submitted and that name is not empty
if (isset($_POST['send'])) {
	if ($_POST && !empty($_POST['firstname'])) {
// set session variable
$_SESSION['firstname'] = $_POST['firstname'];

}
}
if (isset($_SESSION['firstname'])) {
	echo $_SESSION['firstname'];
}
?> </a></li>
</ul>
