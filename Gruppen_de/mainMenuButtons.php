<!-- Buttons die als Hauptmenü in InMenu.html included werden. -->
<?php
	echo 	"<form method='post' action='InMenu.html?modeselection'><button>Spiel starten</button></form>
			<form method='post' action='InMenu.html?options'><button>Optionen</button></form>
			<form method='post' action='InMenu.html?help'><button>Hilfe</button></form>
			<form method='post' action='InMenu.html?highscore'><button>Highscore</button></form>
			<form action='Gruppen_de/logout.php'><button>Ausloggen</button></form>";
?>

<!--
===================================
=== Feedback Alpers, 2016-07-27 ===
===================================

Es ist unnötig, dass Sie hier jede Zeile mit einem einzelnen echo() versehen. Notieren Sie doch ein echo( am Anfang und ein ); am Ende.

-->