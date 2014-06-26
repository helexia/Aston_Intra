<?php
	//	TODO : 
	//		crypter/décrypter les mots de passe
	//		infobulles sur les balises input pour aider l'utilisateur (nb de caracteres ..)
	//		personnaliser les msg d'erreurs
	//		augmenter la sécurité (htmlspecialchars .. )
	
	
	
	// on interroge la bd uniquement si les champs sont remplis :
	if ( isset($_POST['user_login']) and isset($_POST['user_password']) and strlen($_POST['user_login']) >0 and strlen($_POST['user_password']) >0 ) {
		require("connexionBDD.php");
		try {
			$requete=$bdd->prepare('SELECT login FROM utilisateurs WHERE login=:login AND password=:password');
			$requete->execute(array(':login'=>$_POST['user_login'],':password'=>$_POST['user_password']));
			$resultat = $requete->fetch();
			$requete->closeCursor();
			
			if ($resultat) {		
				// si les login/mot de passe correspondent :
				session_start();
				$_SESSION['login']=$_POST['user_login'];
				
				var_dump($_SESSION);
				header('Location:../index.php');
			}
			else {
				// si le login ou le password sont incorrects :
				echo ('Login ou mot de passe incorrect');
			}

		}
		catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
		
	}
	else {
		echo('champs vides');
	}
?>