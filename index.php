<html>
<head>
    <title>EXO2</title>
    <meta charset="">
    <meta name="viewport" content="width=device-width">

    <!--style -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    


</head>

<body>
<header id="header">
    <nav class=" navbar navbar-default">
        <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand animated FadeInDown" href="#">Exo2</a>
                <a class="navbar-brand" <?php session_start(); echo"<h2>Bienvenue ". $_SESSION['username'] . " !</h2>"; ?></a>
            </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right animated FadeInDown">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>




<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="">
                <h1 class="animated FadeInDown">
                    OUR
                </h1> 
                <h1 class="animated FadeInDown">
                    WORKS.<hr>
                </h1> 
                <button type="button" onclick="All();"  class="btn btn-success">All</button>
                <button type="button" onclick="Website();" class="btn btn-success">Website</button>
                <button type="button" onclick="Branding();" class="btn btn-success">Branding</button>
            </div>  
        </div>
    </div>
</div>

</header>

<section class="services" id="resultat">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="service text-center wow FadeInLeft section">
                    <img src="img/moi.jpg" alt="" class="img-responsive roundedImage center-block"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service text-center wow FadeInLeft section">
                    <img src="img/Partie2.jpg" alt="" class="img-responsive roundedImage center-block"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service text-center wow FadeInRight section">
                    <img src="img/tête.jpg" alt="" class="img-responsive roundedImage center-block"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service text-center wow FadeInRight section">
                   <img src="img/bg.jpg" alt="" class="img-responsive roundedImage center-block"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service text-center wow FadeInRight section">
                    <img src="img/article.jpg" alt="" class="img-responsive roundedImage center-block"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service text-center wow FadeInRight section">
                    <img src="img/medaille.jpg" alt="" class="img-responsive roundedImage center-block"/>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/Partie1.jpg" alt="Chania" >
            <div class="carousel-caption">
                <p>
                    Etenim si attendere diligenter, existimare vere de omni hac causa volueritis,
                    sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, 
                    cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse,
                    nisi alicuius intolerabili libidine et nimis acerbo odio niteretur.
                </p>
                <img src="img/bg.jpg" alt="" class="img-responsive roundedImageslide center-block"/>
                <h3>À quoi ça sert ?</h3>
            </div>
        </div>

        <div class="item">
            <img src="img/Partie2.jpg" alt="Chania">
            <div class="carousel-caption">
                <p>
                    Etenim si attendere diligenter, existimare vere de omni hac causa volueritis,
                    sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, 
                    cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse,
                    nisi alicuius intolerabili libidine et nimis acerbo odio niteretur.
                </p>
                <img src="img/bg.jpg" alt="" class="img-responsive roundedImageslide center-block"/>
                <h3>À quoi ça sert ?</h3>
            </div>
        </div>

        <div class="item">
            <img src="img/Partie3.jpg" alt="Flower">
            <div class="carousel-caption">
                <p>
                    Etenim si attendere diligenter, existimare vere de omni hac causa volueritis,
                    sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, 
                    cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse,
                    nisi alicuius intolerabili libidine et nimis acerbo odio niteretur.
                </p>
                <img src="img/moi.jpg" alt="" class="img-responsive roundedImageslide center-block"/>
                <h3>À quoi ça sert ?</h3>
            </div>
        </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script> 
</body>
</html>