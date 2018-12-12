<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>App</title>

    <!-- Bootstrap -->
    <!--<link href="assets/css/animate.css" rel="stylesheet">-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include("header.php"); ?>
    <?php include(CURRENT_FILE); ?>
    <?php include("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
   <script src="assets/js/jquery.fancybox.pack.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="text/javascript">
$(document).ready(function() {
    $('#list').click(function(event){
      event.preventDefault();
      $('#tiendaaa .item').addClass('list-group-item');
    });
    $('#grid').click(function(event){
      event.preventDefault();
      $('#tiendaaa .item').removeClass('list-group-item');
      $('#tiendaaa .item').addClass('grid-group-item');
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
  $("a.afancybox").fancybox();
});
</script>

  </body>
</html>
