<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Mažoretky Brno</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
<body>
<header>
  <nav id="header-nav">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="pull-left visible-md visible-lg">
          <div id="logo-img" alt="Logo image"></div>
        </a>
          
        <div class="navbar-brand">
          <a href="index.php"><h1>Lassies</h1></a>
          <p>
            <span>Mažoretky Brno</span>
           </p>
        </div>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li class="visible-xs active">
              <a href="index.php?page=home">
                <span class="glyphicon glyphicon-home"></span> Domů</a>
            </li>
            <li>
              <a href="index.php?page=groups">
                <span class="glyphicon glyphicon-hand-right"></span><br class="hidden-xs"> Skupiny</a>
            </li>
            <li class="visible-xs">
              <a href="index.php?page=news">
                <span class="glyphicon glyphicon-star" ></span><br class="hidden-xs"> Aktuality</a>
            </li>
            <li>
              <a href="index.php?page=achievements">
                <span class="glyphicon glyphicon-stats"></span><br class="hidden-xs"> Úspěchy</a>
            </li>
            <li>
              <a href="indes.php?page=galery">
                <span class="glyphicon glyphicon-film"></span><br class="hidden-xs"> Galerie</a>
            </li>
            <li id="phone" class="hidden-xs">
              <a href="tel:420 728 826 788">
                <span>728 826 788</span></a><div>veronika.vaska@email.cz</div>
            </li>
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>

  <div id="call-btn" class="visible-xs">
    <a class="btn" href="tel:+420 728 826 788">
    <span class="glyphicon glyphicon-earphone"></span>
      728 826 788
    </a>
  </div>

    <?
    $strana = $_GET[strana];
    if ($strana){$strana == $_GET[strana];}
    else {$strana = main;}
  
    $odkaz = "$strana.php";
    ?>

<div id="main-content" class="container">
  <div class=" col-sm-9 col-xs-12">
      <?include ($odkaz);?>
    </div>

  <div class="col-sm-3 visible-sm visible-md visible-lg">
      <div id="actuals-tile">
        

      <?include (news.php);?>

      </div>
  </div>
</div>


<footer class="panel-footer">
  <div class="container">
    <div class="row">
      <section id="misto" class="col-sm-4">
        <span>Místo:</span><br>
        Centrum Šumavská 416/15 - Kr. Pole<br>
        Brno
        <hr class="visible-xs">
      </section>
      <section id="sponsor" class="col-sm-4">
        <span>Sponzoři:</span><br>
        <br>
        
        <p></p>
        <hr class="visible-xs">
      </section>
      <section id="testimonials" class="col-sm-4">
        <p></p>
        <p></p>
      </section>
    </div>
    <div class="text-center">&copy; Copyright Mazoretky Brno 2016</div>
  </div>
</footer>

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
