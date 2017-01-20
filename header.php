<?php session_start(); ?>

<html>
<head>
    <title>EXO2</title>
    <meta charset="">
    <meta name="viewport" content="width=device-width">

    <!--style -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<header class="topbar">
    <h1 class="brand">
        <a href="index.php">
            <img src="http://store.akamai.steamstatic.com/public/shared/images/header/globalheader_logo.png"
                 alt="Steam">
        </a>
    </h1>

    <nav class="main-menu">
           <a href="login.php">Log in</a>
           <a href="signin.php">Sign in</a>
           <a href="logout.php">Logout</a>  
        <a href="store.php">Store</a>
        <a href="profile.php">Profil</a>
        <a href="panier.php"><i class="glyphicon glyphicon-shopping-cart"></i></a>
    </nav>


    <a href="profile.php" class="profile">
      <span class="name-and-balance"><?php session_start();echo $_SESSION['username']; ?>
            <br> $ 0,00
          </span>
      <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/55/55e31493cc3bde5597be339f7b76327235027d86.jpg"alt="" class="avatar">
    </a>
</header>
</body>

</html>