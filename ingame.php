<?php
	include 'Gruppen_de/headerAndBackground.php';
?>
	<body>
		<main>
			<?php
				echo "<form method='post' action='inmenu.php?mainmenu' id=ingameBack><button>Zur&uuml;ck</button></form>
						<form method='post' action='inmenu.php?aftergame' id=gameEnd><button>Weiter</button></form>";
				include 'Gruppen_de/playfield.php';
			?>	
		</main>
	</body>
</html>