<?php
	#Author : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 14_09_2022
	#Date Modified : 14_09_2022	

	include_once('models/Admin.php');
	$admin = new Admin();

	$admin_id = $_SESSION['admin_dt']['id'];

	if ( $admin_id ) 
	{
		if ( isset( $_REQUEST['id'] ) ) 
		{
			$admin_id = base64_decode( $_REQUEST['id'] );

			$dt_01 = [ $admin_id ];

			$delete_admin = $admin->deleteById( $dt_01 );

			if ( $delete_admin ) 
			{
				$msg = '<h5 class="alert alert-success text-center p-2">Admin Deleted Successfully</h5>';
			}
		}

		$total_admin = $admin->getAllAdmin( [ $admin_id ] );

		if ( $total_admin > 0 ) 
		{
			
			$per_page = 10;
			$pages = ceil( $total_admin/$per_page );

			if ( isset( $_REQUEST['cur_page'] ) ) 
			{
				$page = $_GET['cur_page'];
			} 
			else 
			{
				$page = 1;
			}
			
			$page_start = ( $page - 1 ) * $per_page;

			$admin = $admin->adminTable( $page_start, $per_page, [ $admin_id ] );

		}
		else
		{
			$msg = '<h5 class="alert alert-success text-center p-2">No Admin Found</h5>';;
		}
	}

	//Admin Interface
	include_once('views/admins.php');
	
?>