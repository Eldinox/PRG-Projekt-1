<?php
	//Login Form
	echo "<form method='post' action='Gruppen_de/login.php'>
			<input type='text' name='username' placeholder='Benutzername' autofocus required>
			<input type='password' name='password' placeholder='Passwort' required>
			<button type='submit' name='login'>Login</button>
			</form>";

	if(isset($_POST['login']))
	{
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];

		//Später:Passwort für den angegebenen Benutzer wird der Datenbank entnommen und entschlüsselt*/

		if(//Keine Übereinstimmung zwischen eingegebenem Benutzernamen und entschlüsseltem Passwort)
		{
			//Weiterleitung zum Loginbereich mit Fehlermeldung im url
			header('Location: ../Index.html?login_error');
			exit();
		}
		else
		{
			//Später:Wenn Übereinstimmung gefunden, wird für diesen Benutzer eine Session erstellt
			$_SESSION['id'] = $row['user_id'];
			$_SESSION['name'] = $row['username'];
			header('Location: ../Index.html');
		}
	}
?>