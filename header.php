<header class="topbar">
  <h1 class="brand">
    <a href="index.php">
      <img src="http://store.akamai.steamstatic.com/public/shared/images/header/globalheader_logo.png" alt="Steam">
    </a>
  </h1>

  <nav class="main-menu">
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      <a href="store.php">Store</a>
      <a href="profil.php">Profil</a>
      <a href="panier.php"><i class="glyphicon glyphicon-shopping-cart"></i></a>
  </nav>



  <a href="profile.php" class="profile">
    <span class="name-and-balance"><?php session_start(); echo $_SESSION['username']; ?><br> $ 0,00</span>
    <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/55/55e31493cc3bde5597be339f7b76327235027d86.jpg" alt="" class="avatar">
  </a>
</header>