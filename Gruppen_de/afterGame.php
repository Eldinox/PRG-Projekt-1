<?php
	//Der Aftergame Screen zeigt den Sieg/die Niederlage und die erreichten Werte und Änderungen an.

	echo "<article id='aftergame'>
		<p><h2>Erfolgreich entkommen!/Leider nicht geschafft</h2></p>
		<p>Es dauerte ### Minuten/Sekunden bis zu deiner Flucht/du erwischt wurdest.</p>
		<p>Du hast eine neue Bestzeit erreicht.</p>
		<p>Neue Multiplayer Siegesrate: ###.</p>
		<p>Rankglistenplatz: ###.</p>
		<form method='post' action='inmenu.php?intro'><button>Neu Starten</button></form>
		<form method='post' action='inmenu.php?mainmenu'><button>Zur&uuml;ck zum Hauptmen&uuml;</button></form>
		</article>"
?>