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
			<div id="logbox">

			<?php if(isset($error) && !empty($error)){ ?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $error; ?>
				</div>
			<?php } ?>

			<div class="tuna"></div>
			<br>

				<style>
				.tuna {
				  animation: walk-cycle 1s steps(12) infinite;
				  background: url(http://stash.rachelnabors.com/img/codepen/tuna_sprite.png) 0 0 no-repeat; 
				  height: 200px;
				  width: 400px;
				  margin: 100px auto 0;
				}

				@keyframes walk-cycle {  
				  0% {background-position: 0 0; } 
				  100% {background-position: 0 -2391px; } 
				}

				html {text-align: center;}
				</style>

				<script>document.querySelector('input').addEventListener('click', playMusic);

				function playMusic() {  
				  document.querySelector('audio').play();
				  // audio tags have play
				};</script>

				<h1><i class="fa fa-soundcloud"></i> Connectez-vous !</h1>
				<form method="POST" action="connection.php">
					<div class="form-input">
						<span class="email1 email">
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
						<input type="submit" value="Se Connecter">	
					</div>
					<p class="account">Vous n'avez pas de compte ? <a href="register.php">Inscrivez vous !</a></p>
				</form>
			</div>
		</div>
	</section>