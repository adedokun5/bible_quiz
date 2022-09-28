<?php
	#Author : Adedokun Julius Ayobami
	#Email  : adedokunjuliusayobami@gmail.com
	#Date Created  : 24_09_2022
	#Date Modified : 24_09_2022

	include_once('models/User.php');
	$user = new User();

	$dt_01 = [];

	$total_users = $user->getAllUser( $dt_01 );

	if ( $total_users ) 
	{
		$best_score = $user->getBestScore( $dt_01 )['best_score'];
		
		$per_page = 10;
		$pages = ceil( $total_users/$per_page );

		if ( isset( $_REQUEST['cur_page'] ) ) 
		{
			$page = $_GET['cur_page'];
		} 
		else 
		{
			$page = 1;
		}
		
		$page_start = ( $page - 1 ) * $per_page;

		$set_status = $user->usersTable( $page_start, $per_page, [ ] );	

		require_once('status_setting_cont.php');

		$status = 'active';
		$dt_01 = [ $status ];
		$active_users = $user->getActiveUsers( $dt_01 );

		if( !$active_users )
		{
			$active_users = 0;
		}

		$users = $user->usersTable( $page_start, $per_page, [ ] );		 
	}
	else
	{
		$total_users = 0;
		$msg =  '<h5 class="alert alert-danger text-center p-2"> No Record Found</h5>';
		$best_score = 0;
		$active_users = 0;

	}
	
	//Dashboard Interface
	include_once('views/dashboard.php');
?>