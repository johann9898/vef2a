<?php include 'include/intro.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Welcome <?php include 'include/title.php';?></title>
<meta charset="iso-8859-1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link rel="stylesheet" href="styles/layout.css" type="text/css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div>
  
  <header id="header" class="clear">
    <div id="hgroup">
      <h1 class="font_move">Home</h1>
      </div>
<<<<<<< HEAD
=======
    <nav>
      <?php include 'include/menu.php';?>
>>>>>>> origin/master

    <nav>
    <div class="pure-menu pure-menu-open pure-menu-horizontal" >
      <?php include 'include/menu.php';?>
      </div>
    </nav>
  </header>
</div>
<!-- content -->
<<<<<<< HEAD
<div  clsss"pure-g" id="middle">
<section>
  <div id="container" class="pure-u-1 pure-u-sm-24-24 pure-u-md-24-24 pure-u-lg-24-24">
    <!-- Slider -->
    <section class="move"><img src= "<?php echo $input[array_rand($input)]; ?>" alt=""></section>
=======
<div class="wrapper row2">
  <div id="container" class="pure-u-1 pure-u-sm-24-24 pure-u-md-24-24 pure-u-lg-24-24">
    <!-- Slider -->
    <section id = "fade" ><img src= "<?php echo $input[array_rand($input)]; ?>" alt=""></section>
>>>>>>> origin/master
    <!-- main content -->
    
    <!-- / content body -->
  </div>
  </section>
</div>

</div>
<footer  id="copyright" class="clear">
  <p>&copy; <?php include 'include/footer.php'?>  Jóhann Rúnarsson</p>
</footer>
</body>
</html>
