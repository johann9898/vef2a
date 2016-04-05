<?php 

include 'include/session_timeout.php';
include 'include/intro.php'; 
include 'include/upload.php'; 
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
 <?php
if (isset($result)) {
            echo '<ul>';
            //  Birta skilboðin úr messages array (Upload class).
            foreach ($result as $message) {
                echo "<li>$message</li>";
            }
            echo '</ul>';
        }
    ?>
<div class="wrapper row1">
  
  <header id="header" class="clear">
    <div id="hgroup">
      <h1 class="font_move">FeedBack</h1>
      </div>

    <nav>
    <div class="pure-menu pure-menu-open pure-menu-horizontal">
      <?php include 'include/profile_menu.php';?>
      </div>
    </nav>
  </header>
</div>
<!-- content -->
<div class="pure-g" id="max">
  <div class="pure-u-1 pure-u-sm-12-24 pure-u-md-12-24 pure-u-lg-12-24" id="form1">
    <form action="" method="post" enctype="multipart/form-data" id="uploadImage">
        <p>
            <label for="image">Upload image:</label>
            <input type="file" name="image" id="image">
        </p>
        <p>
            <input type="submit" name="upload" id="upload" value="Upload">


        </p>


    </form>
    
    <!-- / content body -->
  </div>
  <div class="pure-u-1 pure-u-sm-12-24 pure-u-md-12-24 pure-u-lg-12-24" id="form1">

    <div>
      <?php 
        include 'include/profile_info.php';
       ?>
    </div>
  </div>
  
</div>
<div>
      
     <?php include 'logout.php' ?>

</div>
<footer  id="copyright" class="clear">
  <p>&copy; <?php include 'include/footer.php' ?>  Jóhann Rúnarsson</p>
</footer>
</body>
</html>
