<?php
	include 'Gruppen_de/headerAndBackground.php';
?>
<body>
	<header>
	<h1>Escape the Haunted House</h1>
	</header>	
		<main>
			<?php
				$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				if(strpos($url, 'mainmenu') !== false)
				{
					include 'Gruppen_de/mainMenuButtons.php';
					include 'Gruppen_de/userProfile.php';
				}
				elseif(strpos($url, 'modeselection') !== false)
				{
					include 'Gruppen_de/modeSelection.php';
				}
				elseif(strpos($url, 'options') !== false)
				{
					include 'Gruppen_de/options.php';
				}
				elseif(strpos($url, 'help') !== false)
				{
					include 'Gruppen_de/helpmenu.php';
				}
				elseif(strpos($url, 'highscore') !== false)
				{
					include 'Gruppen_de/highscoreList.php';
					include 'Gruppen_de/userProfile.php';
				}
				elseif(strpos($url, 'intro') !== false)
				{
					include 'Gruppen_de/intro.php';
				}
				elseif(strpos($url, 'aftergame') !== false)
				{
					include 'Gruppen_de/afterGame.php';
				}
			?>	
		</main>
		<aside>
			<?php 
			if(strpos($url, 'mainmenu') !== false)
				{
					include 'Gruppen_de/news.php';
			    }
			?>
		</aside>
	</body>
</html>