<head>
    <title>BAPPOST</title>
    <meta charset="">
    <meta name="viewport" content="width=device-width">

    <!--style -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    


</head>
<body style="background-color: #333;">

  <section id="login-container">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 midway-horizontal midway-vertical fadeInDown animated">
      <div id="logbox" class="register">
        

        <?php if(isset($_SESSION['message']) && !empty($_SESSION['message'])){ ?>
          <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $_SESSION['message']; ?>
            <?php unset($_SESSION['message']); ?>
          </div>
        <?php } ?>

        <form method="POST" action="validation.php">
        <div class="text-center contacter">
        	<h1><i class="text-center fa fa-soundcloud"></i> Inscrivez-vous !</h1>
          <div class="form-input">
            <span class="username">
              <input type="text" name="username" placeholder="Nom d'utilisateur">
            </span>
          </div>
          <div class="form-input">
            <span class="email">
              <input type="text" name="email" placeholder="Email">
            </span>
          </div>
          <div class="form-input">
            <span class="password">
              <input type="password" name="password" placeholder="Mot de passe">
            </span>
          </div>
          <br>
          <div class="form-submit">
            <input type="submit" value="Je m'inscris">  
          </div>
          <p class="account">Vous avez un compte ? <a href="login.php">Connectez-vous</a></p>
      </div>
        </form>

      </div>
    </div>
  </section> 