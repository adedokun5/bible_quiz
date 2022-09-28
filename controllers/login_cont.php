<?php
	#Author : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 31_08_2022
	#Date Modified : 20_09_2022

	include_once( 'models/Admin.php' );

	$admin = new Admin();
	
	if ( isset( $_POST['login_btn'] ) ) 
	{
		$username = $_POST['username'];
		$password = $_POST['pword'];

		if ( $username && $password ) 
		{
			$dt_01 = [ $username ];
			$db_pword = $admin->getPwordByUname( $dt_01 );

			if ( $db_pword ) {
			
				$pwordx = $db_pword[ 'password' ];
				
				$match = decPword( $password, $pwordx );

				if ( $match ) 
				{
					$admin_dt = $admin->getAdminData( $dt_01 );
					$admin_id = $admin_dt['id'];
					$_SESSION['admin_dt'] = $admin_dt;
					$time_out = time() + 5000;
					setcookie( 'access', $admin_id, $time_out );				
					header( 'location:dashboard', true, 301 );
				} 
				else 
				{
					$msg = '<h5 class="alert alert-danger p-2">Invalid Username or Password!</h5>';
				}
			}
			else 
			{
				$msg = '<h5 class="alert alert-danger p-2">Invalid Username or Password!</h5>';
			}
		}
	}
	
	//Login Interface
	include_once( 'views/login.php' );
?>