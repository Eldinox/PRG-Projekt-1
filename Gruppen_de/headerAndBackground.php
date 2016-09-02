<!-- <head>Container mit Metadaten, Titel und Stylesheet wird auf jeder Seite oben included
		auf der er benötigt wird. -->
<?php
	session_start();
?>
<!DOCTYPE html>
<html lang=de>
<head>
<meta charset=UTF-8>
<title>Escape the Haunted House</title>
<link rel=stylesheet href=backgroundcolorSheet.css type=text/css>	
</head>

<!--
===================================
=== Feedback Alpers, 2016-07-27 ===
===================================

Laut strukt.html sollen in dieser Gruppe die folgenden Container enthalten sein:

-001-		Hintergrundbild
-002-		Hintergrundmusik 
-003-		Header-Container / Header dieser Seite

Diese Datei enthält dagegen die folgenden Elemente:
- Doctype Declaration
- Internationalisierung
- Head
- Lokalisierung
- Title
- Integration eines Stylesheet

Damit hat diese Datei mit der Definition der Gruppe effektiv nichts gemeinsam.
-->