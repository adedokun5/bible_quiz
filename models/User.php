<?php
	#Author : Adedokun Julius Ayobami
	#Email  : adedokunjuliusayobami@gmail.com
	#Date Created  : 24_09_2022
	#Date Modified : 26_09_2022

	include_once( 'DatabaseLogic.php' );

	class User
	{
		use DatabaseLogic;

		function getAllUser( array $dt )
		{
			$sql = " SELECT * FROM `users`";

			$res = $this->queryResultFound( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function getActiveUsers( array $dt )
		{
			$sql = " SELECT * FROM `users` WHERE status = ? ";

			$res = $this->queryResultFound( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function getBestScore( array $dt )
		{
			$sql = " SELECT `best_score` FROM `users` ORDER BY best_score DESC LIMIT 1";

			$res = $this->fetch( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function updateStatusById( array $dt )
		{
			$sql = " UPDATE `users` SET `status`= ?  WHERE  id = ? ";

			$res = $this->runQuery_2( $sql, $dt );
			
			if ( $res ) {
				return $res;
			}
		}

		function usersTable( $page_start, $per_page, array $dt )
		{
			$sql = " SELECT * FROM `users` LIMIT $page_start, $per_page ";

			$res = $this->fetchAll( $sql, $dt );

			if ( $res ) 
			{
				return $res;
			}
		}

		function getDateModified( array $dt )
		{
			$sql = " SELECT users_score.date_modified FROM users INNER JOIN users_score ON users.id = ? AND users_score.user_id = ? ";

			$res = $this->fetch( $sql, $dt );

			if ( $res ) 
			{
				return $res;
			}
		}

	} 

?>