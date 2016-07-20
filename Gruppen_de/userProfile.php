<!-- Das Userprofil mit Namen, Profilbild und Daten zum Benutzer, wie Siegesrate uÄ. -->
<?php
	echo $_SESSION['name'];
	echo " <img src=https://upload.wikimedia.org/wikipedia/en/b/b1/Portrait_placeholder.png id=profilePicture>
			<table>
				<tr><td>Beste Zeit Singleplayer</td><td>###</td></tr>
				<tr><td>0/0 Spielen gewonnen (0%)</td></tr>
				<tr><td>Ranglistenplatz:</td><td>###</td></tr>
			</table>"
?>