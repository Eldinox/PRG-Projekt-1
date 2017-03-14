<?php
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
		include '../core/database/connect.php';
		$username = $_POST['registerName'];
		$password = $_POST['registerPassword'];
		$check_password = $_POST['checkRegisterPassword'];
		
		$sql_username_Check = "SELECT username FROM users WHERE username = '$username'";
		$result_username_check = mysqli_query($con, $sql_username_Check);
		$user_name_check = mysqli_num_rows($result_username_check);
		if($user_name_check > 0)
		{
			//username schon vorhanden
			header('Location: ../index.php?username_error');
			exit();
		}
		elseif($password !== $check_password) 
		{
			//passwort falsch wiederholt
			header('Location: ../index.php?password_error');
			exit();
		}	
		else
		{
			$encrypted_pw = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO users(username, password, profile_picture, games, wins, rank, best_time) 
			VALUES('$username', '$encrypted_pw', '', '0', '0', '0', '0')";
			$result = mysqli_query($con, $sql);
			header('Location: ../index.php?register_success');
		}
	}
?>