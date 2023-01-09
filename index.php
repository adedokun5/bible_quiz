<?php
	#Author : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 29_08_2022
	#Date Modified : 09_09_2022

	$msg = '';
	$pass = false;

	include_once('models/app_functions.php');
	ob_start();

	if ( session_status() == 1 ) {
		session_start();
	}

	$server_name = "https://".$_SERVER['SERVER_NAME'];
	$uri = $_SERVER['REQUEST_URI'];
	//url
	$main_url = "$server_name/my_apps/bible_quiz";
	$app_url = "$server_name/$uri";

	$uri_arr = explode( '/', $uri );
	$page_start = count( $uri_arr ) - 1;
	$page = $uri_arr[ $page_start ];

	$page_arr = explode( '?', $page );
	$page = $page_arr[ 0 ];

	if ( !$page ) 
	{
		$page = 'login';
	}
			
	include_once 'views/header.php';

	$page_x = "/controllers/".$page."_cont.php";

	$cur_dir = dirname(__FILE__);
	$file = "$cur_dir$page_x";

	if ( is_file( $file ) ) 
	{
		include_once "$file";
	} 
	else 
	{
		header( "location:$main_url", true, 301 );
		exit();
	}
	
	include_once 'views/footer.php';

	ob_end_flush();

?>