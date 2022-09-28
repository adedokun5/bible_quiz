<?php
	#Author : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 31_08_2022
	#Date Modified : 02_09_2022

	//admin class
	include_once 'models/Admin.php';

	//instance of admin
	$admin = new Admin();

	if ( isset( $_POST['save_btn'] ) ) 
	{
		//Getting user input
		$full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$phone_num = $_POST['phone_num'];
		$state = $_POST['state'];
		$username = $_POST['username'];
		$password = $_POST['pword'];
		$image_name = $_FILES['passport']['name'];
		$image_temp_name = $_FILES['passport']['tmp_name'];

		//validating Inputs
		if ( $full_name && $email && $phone_num && $state && $username && $password && $image_name ) 
		{
			$dt_01 = [ $email ];
			$num_email = $admin->getByEmail( $dt_01 );

			if ( $num_email == 0 ) 
			{
				$dt_01 = [ $username ];
				$num_username = $admin->getByUsername( $dt_01 );

				if ( $num_username == 0 ) 
				{
					$pword = encPword( $password );
					$dt_01 = [ $full_name, $email, $phone_num, $state, $image_name, $username, $pword];
					$add_admin = $admin->addNew( $dt_01 );

					$dir = "assets/images/$username";
					$make_dir = mkdir( $dir, true, 777 );

					if ( $add_admin && $make_dir ) 
					{	
						move_uploaded_file( $image_temp_name, "$dir/$image_name" );

						$msg = '<h5 class="alert alert-success p-2">Record Added Successfully</h5>';
						$pass = true;
					} 
					else 
					{
						$msg = '<h5 class="alert alert-danger p-2">Record Not Added!</h5>';
					}
				} 
				else 
				{
					$msg = '<h5 class="alert alert-danger p-2">Username already exist!</h5>';
				}
			} 
			else 
			{
				$msg = '<h5 class="alert alert-danger p-2">Email already exist!</h5>';
			}
		}
		else
		{
			$msg = '<h5 class="alert alert-danger p-2">Please, All fields are required!</h5>';
		}
	}

	//New Admin Interface
	include_once( 'views/new_admin.php' );
?>