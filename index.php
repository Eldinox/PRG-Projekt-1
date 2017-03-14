<?php
	include 'Gruppen_de/headerAndBackground.php';
?>
<body>
	<header>
	<h1>Escape the Haunted House</h1>  
		<?php
			if(isset($_SESSION['id']))
			{
				header('Location: http://localhost/PRG-Projekt-1/inmenu.php?mainmenu');
			}
			else
			{
				include 'Gruppen_de/login.php';
			}
		?>
	</header>	
		<main>
			<?php
				include 'Gruppen_de/register.php';
				include 'Gruppen_de/loginRegisterStatus.php';
			?>	
		</main>
		<aside>
			<?php include 'Gruppen_de/news.php';?>
		</aside>
	</body>
</html>