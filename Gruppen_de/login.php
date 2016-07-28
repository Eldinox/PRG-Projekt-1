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

		if(//Keine Übereinstimmung zwischen eingegebenem Benutzernamen und entschlüsseltem Password)
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

<!--
===================================
=== Feedback Alpers, 2016-07-27 ===
===================================

Laut strukt.html sollen in dieser Gruppe die folgenden Container enthalten sein:

-004-		Label-Container / "Username:" 	
-005- 		Label-Container / "Passwort:"
-026-		Input-Container / Eingabe Username
-027-	 	Input-Container / Eingabe Passwort
-030-		Schaltfläche / "Einloggen"
-031-		Schaltfläche / "Registrieren"

Sie haben hier einen bösen Logikfehler einprogrammiert:

Diese Datei hat den Namen login.php und befindet sich im Verzeichnis Gruppen_de. So wie Sie das öffnende Tag des Formulars programmiert haben wird dieses Dokument "versuchen" die eingegebenen Daten an sich selbst weiterzuleiten, damit es selbst diese Daten auswertet. Das kann nicht funktionieren.

In der Definiton der Gruppe fehlt ein Element: Das Formular.

Umgekehrt haben Sie im Formular in dieser Datei die Labels nicht programmiert.

Weiterhin sollten Sie spätestens bei der Programmierung erkannt haben, dass die strukturellen Elemente 30 und 31 so nicht umsetzbar sind: Über den submit-input können NutzerInnen sich momentan entweder einloggen oder registrieren. Damit beides möglich ist, müssen Sie noch etwas in der Definition der Gruppe ändern.

Außerdem gilt weiterhin: Im Verzeichnis Gruppen_de sollen sich ausschließlich Gruppen befinden, keine PHP-Skripte. (Für den Fall, dass Sie in der Aufgabenstellung etwas missverstanden haben: Das Verzeichnis Gruppen_de ist nicht das Wurzelverzeichnis des Projekts.

Zu den meisten der übrigen Dateien im Verzeichnis Gruppen_de werde ich nichts schreiben, weil die Probleme da identisch sind.
-->