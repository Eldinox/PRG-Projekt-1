<?php
	echo $_SESSION['name'];
	$pic = $_SESSION['pic'];
	echo " <img src='$pic' id='profilePicture'>
			<table>
				<tr><td>Beste Zeit Singleplayer</td><td>###</td></tr>
				<tr><td>0/0 Spielen gewonnen (0%)</td></tr>
				<tr><td>Ranglistenplatz:</td><td>###</td></tr>
			</table>"
?>