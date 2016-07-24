<?php
	//Registrierungs Form
	echo "<h2>Noch keinen Account? Jetzt registrieren</h2>
			<form method='post' action='Gruppen_de/register.php'>
			<p><input type='text' name='registerName' placeholder='Benutzername' required></p>
			<p><input type='password' name='registerPassword' placeholder='Passwort' required></p>
			<p><input type='password' name='checkRegisterPassword' placeholder='Passwort wiederholen' required></p>
			<p><button type='submit' name='register'>Registrieren</button></p>
			</form>";

	if(isset($_POST['register']))
	{
		session_start();
		$username = $_POST['registerName'];
		$password = $_POST['registerPassword'];
		$check_password = $_POST['checkRegisterPassword'];
		
		//Datenbank wird durchsucht, ob der gewählte Name schon vergeben ist
		//Wenn nicht, dann wird überprüft ob die beiden Passwörter  übereinstimmen
		if(//Username schon vorhanden)
		{
			header('Location: ../Index.html?username_error');
			exit();
		}
		elseif($password !== $check_password) 
		{
			header('Location: ../Index.html?password_error');
			exit();
		}	
		else
		{
			//Passwort wird verschlüsselt
			//Benutzername und Passwort werden auf der nächsten ID in der Datenbank gespeichert
			header('Location: ../Index.html?register_success');
		}
	}
?>