<!-- Das Userprofil mit Namen, Profilbild und Daten zum Benutzer, wie Siegesrate uÄ. -->
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

<!--
===================================
=== Feedback Alpers, 2016-07-27 ===
===================================

Im Verzeichnis Gruppen_de sollen ausschließlich die Gruppen enthalten sein. Diese Dateien werden später mittels der Funktion include() in die Ansichten integriert. Deshalb ist ein ?php-Container nicht nur überflüssig, sondern falsch.

Laut strukt.html ist das hier der Inhalt dieser Gruppe:

-009-		Label-Container / Username
-010-		Label-Container / "Beste Zeit im Singleplayer"
-011-		Label-Container / ... Spiele von ... Spielen gewonnen ("Winrate in %")
-012-		Label-Container / Ranglistenplatz
-025-		Bildcontainer / Profilbild
-045-		Tabelle 2x3 / zeigt Spielerstatistik

Und durch den Vergleich können Sie direkt sehen, dass diese Datei eben nicht der Definition entspricht. Bitte ändern Sie das.
-->