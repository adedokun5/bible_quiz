<?php
	#Author : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 09_09_2022
	#Date Modified : 19_09_2022	

	include_once('models/Admin.php');
	$admin = new Admin();

	if ( isset( $_SESSION['admin_dt'] ) ) 
	{
		$admin_dt = $_SESSION['admin_dt'];
		
		$admin_id = $admin_dt['id'];
		$admin_uname = $admin_dt['username'];
		$admin_passport = $admin_dt['passport'];

		//button logic
		if ( isset( $_POST['update_name_btn'] ) ) 
		{
			$fullname = $_POST['full_name'];

			if ( $fullname ) 
			{
				$dt_01 = [ $fullname, $admin_id ];
				$update_name = $admin->updateNameById( $dt_01 );

				if ( $update_name ) 
				{
					$pass = true;
					$msg = '<h5 class="alert alert-success text-center p-2">Record Updated Successfully</h5>';
				}
				else
				{
					$msg = '<h5 class="alert alert-danger text-center p-2">Record Not Updated!</h5>';
				}
			}
			else
			{
				$msg = '<h5 class="alert alert-danger text-center p-2">Please, All fields are required!</h5>';
			}
		}
		//button login
		elseif ( isset( $_POST['update_password_btn'] ) ) 
		{
			$pword = $_POST['pword'];

			if ( $pword ) 
			{
				$enc_pword = encPword( $pword );
				$dt_01 = [ $enc_pword, $admin_id ];
				$update_pword = $admin->updatePasswordById( $dt_01 );

				if ( $update_pword ) 
				{
					$pass = true;
					$msg = '<h5 class="alert alert-success text-center p-2">Record Updated Successfully</h5>';
				}
				else
				{
					$msg = '<h5 class="alert alert-danger text-center p-2">Record Not Updated!</h5>';
				}
				
			}
			else
			{
				$msg = '<h5 class="alert alert-danger text-center p-2">Please, All fields are required!</h5>';
			}
		}
		//button logic
		elseif( isset( $_POST['update_passport_btn'] ) )
		{
			$file_name = $_FILES['passport']['name'];
			$image_temp_name = $_FILES['passport']['tmp_name'];
			$file_size = $_FILES['passport']['size'];

			if ( $file_name ) 
			{
				$dir = "assets/images/$admin_uname";

				$opened_dir = opendir( $dir );

				while ( $cur_file_name = readdir( $opened_dir ) ) 
				{
					if( !( $cur_file_name == "." || $cur_file_name == ".." ) )
					{	
						if ( $cur_file_name == $file_name ) 
						{
							continue;
						}
						else
						{
							unlink( $dir."/".$cur_file_name );
						}
					}
				}

				$dt_01 = [ $file_name, $admin_id ];
				$update_passport = $admin->updatePassportById( $dt_01 );

				if ( $update_passport ) 
				{
					move_uploaded_file( $image_temp_name , "$dir/$file_name");

					$msg = '<h5 class="alert alert-success text-center p-2">Passport Updated</h5>';
				} 
				else 
				{
					$msg = '<h5 class="alert alert-danger text-center p-2">Failed to Update Passport!</h5>';
				}
				
			} 
			else 
			{
				$msg = '<h5 class="alert alert-success text-center p-2">Please, Select an Image </h5>';
			}
		}
		
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

	//Account Setting Interface
	include_once('views/account_settings.php');
	
?>