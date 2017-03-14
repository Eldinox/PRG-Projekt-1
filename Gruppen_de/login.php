<?php
	echo "<form method='post' action='Gruppen_de/login.php'>
			<input type='text' name='username' placeholder='Benutzername' autofocus required>
			<input type='password' name='password' placeholder='Passwort' required>
			<button type='submit' name='login'>Login</button>
			</form>";

	if(isset($_POST['login']))
	{
		session_start();
		include '../core/database/connect.php';
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM users WHERE username = '$username'";	
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$hash_pw = $row['password'];
		$hash = password_verify($password, $hash_pw);

		if($hash == 0)
		{
			header('Location: ../index.php?login_error');
			exit();
		}
		else
		{
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hash_pw'";	
			$result = mysqli_query($con, $sql);
			$_SESSION['id'] = $row['user_id'];
			$_SESSION['name'] = $row['username'];
			$_SESSION['pic'] = $row['profile_picture'];
			header('Location: http://localhost/PRG-Projekt-1/inmenu.php?mainmenu');
		}
	}
?>