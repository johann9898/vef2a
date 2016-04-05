<?php
//session_start();
include 'include/intro.php';
/*include 'include/delete_session.php'; */
/*include 'include/login2.php';
if (isset($_POST['send'])) {
    $username = trim($_POST['regirster_username']);
    $firstname = trim($_POST['register_first']);
    $lastname = trim($_POST['register_last']);
    $password = trim($_POST['register_password']);
    $email = trim($_POST['register_email']);
    $userfile = 'H:\Vef2A\vef_2a\userlist.csv';
    require_once 'include/register_user.php';
    
}
*/
?>
<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {


    require 'include/do_register.php';
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Welcome <?php include 'include/title.php';?></title>
<meta charset="iso-8859-1"> 
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src='https://www.google.com/recaptcha/api.js'></script>
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
 
<div class="wrapper row1">
  
  <header id="header" class="clear">
    <div id="hgroup">
      <h1 class="font_move">Register</h1>
      </div>

    <nav>
    <div class="pure-menu pure-menu-open pure-menu-horizontal">
      <?php include 'include/menu.php';?>
      </div>
    </nav>
  </header>
</div>
<!-- content -->
<div class="pure-g" id="max">
  <div class="pure-u-1 pure-u-sm-12-24 pure-u-md-12-24 pure-u-lg-12-24" id="form1">
    
    <main>
        <h1>Register</h1>
        
        <?php
            /*if (isset($result) || isset($errors)) {
                echo '<ul>';
                if (!empty($errors)) {
                    foreach ($errors as $item) {
                        echo "<li>$item</li>";
                    }
                } 
                else {
                    echo "<li>$result</li>";
                }
                    echo '</ul>';
            }*/
        ?>
        <form method="post" action="">
            <p class="form_box">
                <label for="name">username:</label>
                <input name="regirster_username" id="regirster_username" type="text" placeholder="Enter a First name" required>

            </p>
            <p class="form_box">
                <label for="name">First name:</label>
                <input name="register_first" id="register_first" type="text" placeholder="Enter a First name" required>

            </p>
            <p class="form_box">
                <label for="name">Last Name:</label>
                <input name="register_last" id="register_last" type="text" placeholder="Enter a Last name" required="need a real name">
            </p>
            <p class="form_box">
                <label for="password">Password:</label>
                <input name="register_password" id="register_password" type="password" placeholder="Please Write a Password" required>
            </p>
            <p class="form_box">
                <label for="email">Email:</label>
                <input name="register_email" id="register_email" type="email" placeholder="Enter an Email" required>
                <?php if ($missing && in_array('name', $missing)) { ?>
                        <span class="warning"><?php echo $checkEmail ?></span>
                    <?php } ?>

            </p>
            <p class="form_box">
                <input name="send" type="submit" value="Sign Up">
            </p>
        </form>

       
    </main>
    <!-- / content body -->
  </div>
  <div class="pure-u-1 pure-u-sm-12-24 pure-u-md-12-24 pure-u-lg-12-24" id="form2">

    <?php
        if ($errors){
            echo "<p>$error</p>";
        }
        else if (isset($_GET['expired'])) { ?>
    <p>Your session has expired. Please log in again.</p>
    <?php }
        ?>
    <h1>Login</h1>
    <?php
    
    include 'include/login.php';
    ?>
        
</div>
  
</div>

</div>
<footer  id="copyright" class="clear">
  <p>&copy; <?php include 'include/footer.php'?>  Jóhann Rúnarsson</p>
</footer>
</body>
</html>
