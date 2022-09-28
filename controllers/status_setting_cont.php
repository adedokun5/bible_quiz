<?php
	
	#Name : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 26_09_2022
	#Date Modified : 26_09_2022

	include_once('models/User.php');
	$user = new User();

	if ( $set_status ) 
	{
		$current_day = date('d');
		$current_month = date('m');
		$current_year = date('y');

		foreach ( $set_status as $user_dt ) 
		{
			$user_id = $user_dt['id'];

			$dt_01 = [ $user_id, $user_id ];
			$scores_table_date_modified = $user->getDateModified( $dt_01 );
			$date_modified = $scores_table_date_modified['date_modified'];

			$date_time_arr = explode( ' ', $date_modified );
			$date = $date_time_arr[0];
			$date_arr = explode('-', $date );

			$year_modified = $date_arr[0];
			$month_modified = $date_arr[1];
			$day_modified = $date_arr[2];

			if ( $year_modified == 2022 && $current_year <= $year_modified ) 
			{
				if ( $month_modified < 10 && ( $current_month - $month_modified ) > 2 ) 
				{
					$status = 'Inactive';
					$dt_01 = [ $status, $user_id ];

					$update_status = $user->updateStatusById( $dt_01 );
				}
				else
				{
					$status = 'Active';
					$dt_01 = [ $status, $user_id ];
					$update_status = $user->updateStatusById( $dt_01 );
				}

			}
			elseif ( ( $current_year - $year_modified ) == 1 ) 
			{
				if( $month_modified == 10 && $current_month == 01 )
				{
					$status = 'Inactive';
					$dt_01 = [ $status, $user_id ];

					$update_status = $user->updateStatusById( $dt_01 );
				}
				elseif( $month_modified == 11 && $current_month == 02 )
				{
					$status = 'Inactive';
					$dt_01 = [ $status, $user_id ];

					$update_status = $user->updateStatusById( $dt_01 );
				}
				elseif( $month_modified == 12 && $current_month == 03 )
				{
					$status = 'Inactive';
					$dt_01 = [ $status, $user_id ];

					$update_status = $user->updateStatusById( $dt_01 );
				}
				else
				{
					$status = 'Active';
					$dt_01 = [ $status, $user_id ];

					$update_status = $user->updateStatusById( $dt_01 );
				}

			}
			else
			{
				$status = 'Inactive';
				$dt_01 = [ $status, $user_id ];

				$update_status = $user->updateStatusById( $dt_01 );

			}

		}
	}

?>