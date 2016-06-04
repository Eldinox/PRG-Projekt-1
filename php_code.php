<?php
	/*
	Auf den Canvas-Container der Ansicht InGame k�nnte ich nur mit JavaScript zugreifen.
	An dieser Stelle frage ich mich was f�r eine Alternative mir in PHP zur Verf�gung steht.
	*/
	
	//Variablen
	$level;
	$playfield_width = 960;
	$playfield_height = 640;
	$player_speed = 150;
	$score;
	$keyfragments_collected;
	$health;
	$player_direction = "left";
	
	//Das Spielfeld wird in ein Raster aufgeteilt
	$column_width, $column_height = 20;
	
	function init()
	{
		/*
		Initialize Funktion wird zu beginn des Spiels aufgerufen.
		Sie ruft die Funktionen zum Erstellen der Objekte auf und setzt die Werte zur�ck, weil das Spiel von 
		Vorne beginnt.
		*/
		$player_direction = "left";
		$score = 0;
		$level = 1;
		$keyfragments_collected = 0;
		create_player();
		create_keysfragments();
		create_enemies();
	}
	
	function create_player();
	{
		//Erstellt den Spieler
		
	}
	
	function create_keyfragments();
	{
		//Erstellt die Schl�sselfragmente (1 in Level 1, 5 in Level 5 usw.) zuf�llig auf dem Spielfeld
		for(int i = 0; i < $level; i++)
		{
			$keyX = Math.round(Math.random()*($playfield_width-$column_width)/$column_width));
			$keyy = Math.round(Math.random()*($playfield_height-$column_height)/$column_width));
			//Schl�sselfragment wird an dieser X/Y Position erstellt
		}
	}
	
	function create_enemies();
	{
		//Erstellt die Gegner
	}
?>














