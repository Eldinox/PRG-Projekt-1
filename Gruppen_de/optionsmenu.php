<?php
	echo "<article>
			<ul>
				<li>
					<p>Audio</p>
					<p><input name=audioVolume id=audioVolume type=range min=0 value=60 max=100 orient=vertical></p>
				</li>
				<li>...</li>
				<li>
					<p>Passwort &auml;ndern</p>
					<p><?php
						echo "<form method='POST' action='".setNewPassword()."'>
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
						echo "<form method='POST' action='".setNewProfilePicture()."'>
								<input type='hidden' name='user_id' value='".$_SESSION['id']."'>
								<p><input type='text' name='new_pic' placeholder='Link zum Bild'></p>
								<button type='submit' name='submitNewPicture'>Bild speichern</button>
								</form>";
								include 'Gruppen_de/loginRegisterStatus.php';
					?></p>
				</li>
			</ul>
			<form action='Index.html'><button>Zur&uuml;ck zum Hauptmen&uuml;</button></form>
		</article>"

	function setNewPassword()
	{
	
	}

	function setNewProfilePicture($con)
	{
		
	}
?>