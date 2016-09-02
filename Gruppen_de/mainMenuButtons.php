<!-- Buttons die als Hauptmenü in Index.html included werden, wenn man eingeloggt ist.		
		Im Moment hat nur der Logout Button eine Funktion, die anderen reloaden bloß die Seite -->
<?php
	echo "<form action='Index.html'><button>Spiel starten</button></form>";
	echo "<form action='Index.html'><button>Optionen</button></form>";
	echo "<form action='Index.html'><button>Hilfe</button></form>";
	echo "<form action='Index.html'><button>Highscore</button></form>";
	echo "<form action='Gruppen_de/logout.php'><button>Ausloggen</button></form>";
?>

<!--
===================================
=== Feedback Alpers, 2016-07-27 ===
===================================

Es ist unnötig, dass Sie hier jede Zeile mit einem einzelnen echo() versehen. Notieren Sie doch ein echo( am Anfang und ein ); am Ende.

-->