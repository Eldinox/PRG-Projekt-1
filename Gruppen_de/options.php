<?php
	include 'core/database/connect.php';
?>
<body>
	<header>
		<h1>Optionen</h1>
	</header>	
	<main>
	<!-- MainContainer zeigt später in der Bildschirmmitte eine Liste mit Einstellungsmöglichkeiten und einen Knopf
		um zurück zum Hauptmenü zu gelangen -->
		<article>
			<ul>
				<li>
					<p>Audio</p>
					<p><input name=audioVolume id=audioVolume type=range min=0 value=60 max=100 orient=vertical></p>
				</li>
				<li>...</li>
				<li>
					<p>Passwort &auml;ndern</p>
					<p><?php
						echo "<form method='POST' action='".setNewPassword($con)."'>
								<input type='hidden' name='user_id' value='".$_SESSION['id']."'>
								<p><input type='password' name='oldPassword' placeholder='Aktuelles Passwort eingeben'></p>
								<p><input type='password' name='newPassword' placeholder='Neues Passwort eingeben'></p>
								<p><input type='password' name='checkPassword' placeholder='Neues Passwort wiederholen'></p>
								<button type='submit' name='submitNewPassword'>Passwort speichern</button>
								</form>";
					?></p>
				</li>
				<li>
					<p>Profilbild &auml;ndern</p>
					<p><?php
						echo "<form method='POST' action='".setNewProfilePicture($con)."'>
								<input type='hidden' name='user_id' value='".$_SESSION['id']."'>
								<p><input type='text' name='new_pic' placeholder='Link zum Bild'></p>
								<button type='submit' name='submitNewPicture'>Bild speichern</button>
								</form>";
								include 'loginRegisterStatus.php';
					?></p>
				</li>
			</ul>
			<form action='index.php'><button>Zur&uuml;ck zum Hauptmen&uuml;</button></form>
		</article>
	</main>
</body>
</html>

<?php
	function setNewPassword($con)
	{
		if(isset($_POST['submitNewPassword']))
		{
			$user_id = $_POST['user_id'];
			$old_password = $_POST['oldPassword'];
			$new_password = $_POST['newPassword'];
			$check_password = $_POST['checkPassword'];
			$encrypted_pw = password_hash($new_password, PASSWORD_DEFAULT);

			$sql = "SELECT * FROM users WHERE user_id = '$user_id'";	
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);

			$hash = password_verify($old_password, $row['password']);

			if($hash == 0)
			{
				header('Location: inmenu.php?options?pw_error');
			}
			elseif($new_password !== $check_password)
			{
				header('Location: inmenu.php?options?pwrep_error');
			}
			else
			{
				$sql = "UPDATE users SET password='$encrypted_pw' WHERE user_id='$user_id'";
				$result = mysqli_query($con, $sql);
				header('Location: inmenu.php?options?pwrep_success');
			}
		}
	}

	function setNewProfilePicture($con)
	{
		if(isset($_POST['submitNewPicture']))
		{
			$user_id = $_POST['user_id'];
			$profile_picture = $_POST['new_pic'];

			$sql = "UPDATE users SET profile_picture='$profile_picture' WHERE user_id='$user_id'";
			$result = mysqli_query($con, $sql);
			header('Location: inmenu.php?options?newpic_success');
		}
	}
?>
