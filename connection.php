<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('model/functions.fn.php');

/********************************
			PROCESS
********************************/

if(isset($_POST['email']) && isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['password'])){

		// TODO

		if(isset($_POST["email"]) 
		  && isset($_POST["password"]))
		    {

		    $email = htmlspecialchars($_POST["email"]);
		    $password = htmlspecialchars($_POST["password"]);

		    $request = $db->prepare("SELECT id FROM users WHERE email LIKE :email AND password LIKE :password");
		    $request->execute(
		      array(
		        "email" => $email,
		        "password" => $password
		        )
		    );

		    $users = $request->fetchAll();

		    if(sizeof($users) > 0)
		    { 
		      header("Location: index.php");

		    }else {
		    	$error = 'Mauvais email et/ou mot de passe';
		    	header("Location: login.php");
		    }
		  }

		  userConnection($db, $email, $password);
	
 	      

	}else{
		$error = 'Champs requis !';
		header("Location: login.php");
	}
}





/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
