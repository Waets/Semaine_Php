<header class="topbar">
  <h1 class="brand">
    <a href="#">
      <img src="http://store.akamai.steamstatic.com/public/shared/images/header/globalheader_logo.png" alt="Steam">
    </a>
  </h1>

  <nav class="main-menu">
    <a href="#">Store ▾</a>
    <a href="#">Community ▾</a>
    <a href="#">Profile ▾</a>
    <a href="#">About</a>
    <a href="#">Support</a>
    <a href="index.php">Home</a>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
  </nav>

  <a href="#" class="install-steam">
    <span class="octicon octicon-desktop-download"></span>
Install Steam
</a>

  <a href="#" class="alerts" data-number="5">
    <span class="octicon octicon-mail"></span>
  </a>

  <a href="#" class="profile">
    <span class="name-and-balance"><?php session_start(); echo $_SESSION['username']; ?><br> $ 0,00</span>
    <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/55/55e31493cc3bde5597be339f7b76327235027d86.jpg" alt="" class="avatar">
  </a>
</header>

<main class="main">

  <a href="#" class="feature">
    <img src="http://cdn.akamai.steamstatic.com/steam/clusters/frontpage/20c2376ce51067521d6712aa/page_bg_english.png?t=1446828489" alt="">
  </a>
</main>