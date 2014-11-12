<!DOCTYPE html>
<html lang="fr">
<?php
   define("APP_ROOT", __DIR__);
   require_once(APP_ROOT.'/include/user.php');   
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>[ASTEK] Torrent Crawler</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="container col-lg-offset-2 col-lg-8">
      <div class="header">
        <!-- <ul class="nav nav-pills pull-right" role="tablist"> -->
        <!--   <li role="presentation" class="active"><a href="#">Home</a></li> -->
        <!--   <li role="presentation"><a href="#">Surveys</a></li> -->
        <!--   <li role="presentation"><a href="#"></a></li> -->
        <!-- </ul> -->
        <h3 class="text-muted">The Torrent Crawler [ASTEK]</h3>
      </div>

      <div class="jumbotron">
        <h2>Set - Crawl - Download</h2>
        <p class="lead">Check your list of surveys, and add a one. Launch the search, and once the 
	application finds an interesting link, download is launched automatically with your default torrent client. </p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Start survey</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
	  <h1 class="text-success">My surveys</h1>
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6 bg-info" style="max-height:500px; overflow:auto">
	  <h1>Search history</h1> 
	  <p>Search launched on <?php echo date("m/d/Y H:i:s") ;?> ...</p>
	  <p>Interesting result for "Le seigneur des anneaux" ...</p>
	  <p>Download launched for "Le seigneur des anneaux" ...</p>
        </div>
      </div>

      <div class="footer">
        <p>&copy; Astek 2014</p>
      </div>

    </div> <!-- /container -->

  </body>
</html>
