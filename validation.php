<?php
	require('config/config.php');
	require('model/functions.fn.php');
	session_start();

	if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && 
	  !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	// TODO

		$username = htmlspecialchars($_POST["username"]);
		$email    = htmlspecialchars($_POST["email"]);
	  $password = htmlspecialchars($_POST["password"]);

		$request = $db->prepare("SELECT id FROM users WHERE username LIKE :username OR email LIKE :email");
            $request->execute(
              array(
                "username" => $username,
                "email" => $email
              )
            );
            $users = $request -> fetchAll();

            if (sizeof($users) == 0){
              $request = $db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");

              $request->execute(
                array(
                  "username" => $username,
                  "email" => $email,
                  "password" => $password
                )
              );

            header("Location: login.php");

            }else {
              $_SESSION['message'] = 'Ce nom d\'utilisateur existe déjà';
			        header('Location: register.php');
            }

	}else{ 
  		$_SESSION['message'] = 'Erreur : Formulaire incomplet';
  		header('Location: register.php');
	}
?>