<header>
	<?php //include('');
	if(!$_SESSION) {
	?>
		<form method="POST" action="php/connexion.php">
			<label for="input_login">Identifiant : </label>
			<input type="text" id="input_login" name="user_login" />
			<label for="input_password">Mot de passe : </label>
			<input type="password" id="input_login" name="user_password" />
			<input type="submit" value="OK" />
			<a href="#">mot de passe oublié ?</a>	
		</form>
    <?php
    }

	else {
    ?>
        <form method="POST" action="php/deconnexion.php">
        	<input type="submit" value="Deconnexion" />
        </form>
    <?php
    }
include('menu.php');
	?>
</header>