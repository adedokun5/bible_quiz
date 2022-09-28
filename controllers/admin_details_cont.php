<?php
	#Name : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date-Created : 20_09_2022
	#Date-Modified : 20_09_2022

	include_once('models/Admin.php');
	$admin = new Admin();

	if ( isset( $_REQUEST['id'] ) ) 
	{
		$admin_id = base64_decode( $_REQUEST['id'] );

		if ( $admin_id ) 
		{
			$dt_01 = [ $admin_id ];

			$admin_data = $admin->getAdminDataById( $dt_01 );

			$fullname = $admin_data['full_name'];
			$username = $admin_data['username'];
			$email = $admin_data['email'];
			$state = $admin_data['state'];
			$username = $admin_data['username'];
			$phone_num = $admin_data['phone_num'];
			$passport_name = $admin_data['passport'];
		}
		else
		{
			echo "Access Denied";
		}
	}

	//Admin Details Interface
	include_once('views/admin_details.php');
?>