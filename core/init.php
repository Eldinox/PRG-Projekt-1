<?php
	session_start();
	require 'database/connect.php';
	
	function logged_in()
	{
		return(isset($_SESSION['user_id'])) ? true : false;
	}
	
	function user_data($user_id)
	{
		$data = array();
		$user_id = (int)$user_id;
		
		$func_num_args = func_num_args();
		$func_get_args = func_get_args();
		
		if($func_num_args > 1)
		{
			$con = mysqli_connect('localhost','root','','projekt1accounts');
			unset($func_get_args[0]);
			$fields = '`' . implode('`, `', $func_get_args) . '`';
			echo "SELECT $fields FROM users WHERE user_id = '$user_id'";
			die();
			$data = mysqli_query($con,"SELECT $fields FROM users WHERE user_id = '$user_id'");
		}
	}
	
	if(logged_in() === true)
	{
		echo 'logged in!';
		$session_user_id = $_SESSION['user_id'];
		$user_data = user_data($session_user_id, 'user_id', 'username', 'password', 'profile_picture', 'games', 'wins', 'rank', 'best_time');
	}
?>