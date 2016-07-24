<?php
	//Der url wird auf eine angefügte Fehlermeldung nach dem registrieren oder einloggen 
	//überprüft und die jeweilige Meldung wird im Statusbereich ausgegeben.
	$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$logreg_status = 'Bitte f&uuml;llen Sie alle Felder aus um einen Account zu erstellen';
	if(strpos($url, 'username_error') !== false)
	{
		$logreg_status = 'Dieser Benutzername existiert bereits';
	}	
	elseif(strpos($url, 'password_error') !== false)
	{
		$logreg_status = 'Das Passwort wurde nicht korrekt wiederholt';
	}
	elseif(strpos($url, 'login_error') !== false)
	{
		$logreg_status = 'Benutzername oder Passwort wurden falsch eingegeben';
	}
	elseif(strpos($url, 'register_success') !== false)
	{
		$logreg_status = 'Registrierung erfolgreich. Sie k&ouml;nnen sich nun einloggen';
	}
	echo $logreg_status;
?>