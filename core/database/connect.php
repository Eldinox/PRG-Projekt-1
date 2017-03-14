<?php
	$con = mysqli_connect("localhost", "root", "", "projekt1accounts");
	if(!$con)
	{
		die('Connection failed:'.mysqli_connect_error());
	}
?>