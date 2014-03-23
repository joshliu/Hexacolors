<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hexacolor</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">

      <div class="starter-template">
        <h1 id="title">Hexacolor</h1>
        <h1 id="timer">0.00 Seconds</h1>
        <p class="lead" id="description">Click the colors of the Hexagon in the order that is given.</p>
        <p class="lead" id="colors">Blue, Purple, Green, Red, Yellow, Orange</p>
        <p class="btn btn-lg btn-default" id="start">Play Game</p>
        <span id="colors"></span><br>
        <span id="hexagon"><img src="graphics/hexagon.svg"></span>
      </div>
      <br>
      <center>
      <div id="footer">
        Created By Joshua Liu in 4 hours at HackBCA under the MIT License.
      </div>
    </center>

      <br>

    </div><!-- /.container -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://raw.githubusercontent.com/DmitryBaranovskiy/raphael/master/raphael-min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="hexacolor.js"></script>

  </body>
</html>