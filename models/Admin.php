<?php
	#Author : Adedokun Julius Ayobami
	#Email  : adedokunjuliusayobami@gmail.com
	#Date Created  : 01_09_2022
	#Date Modified : 13_09_2022

	include_once( 'DatabaseLogic.php' );

	class Admin
	{
		use DatabaseLogic;

		private $db_table_name = 'admins';

		function addNew( array $dt )
		{
			$sql = " INSERT INTO $this->db_table_name ( `full_name`, `email`, `phone_num`, `state`, `passport`, `username`, `password` ) VALUES ( ?, ?, ?, ?, ?, ?, ? ) ";

			$res = $this->runQuery( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function getAdmin( array $dt )
		{
			$sql = " SELECT * FROM `admins` WHERE username = ? AND password = ? ";

			$res = $this->runQuery_2( $sql, $dt );
			if ( $res ) 
			{
				return $res;
			}
		}	

		function getAdminData( array $dt )
		{
			$sql = " SELECT * FROM `admins` WHERE username = ? ";

			$res = $this->fetch( $sql, $dt );
			if ( $res ) 
			{
				return $res;
			}
		}

		function getAllAdmin( array $dt )
		{
			$sql = " SELECT * FROM `admins` WHERE NOT id = ? ";

			$res = $this->queryResultFound( $sql, $dt );
			if ( $res ) 
			{
				return $res;
			}
		}

		function getAdminDataById( array $dt )
		{
			$sql = " SELECT * FROM `admins` WHERE id = ? ";

			$res = $this->fetch( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function getPwordByUname( array $dt )
		{
			$sql = " SELECT password FROM `admins` WHERE username = ? ";

			$res = $this->fetch( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function getByEmail( array $dt )
		{
			$sql = " SELECT * FROM `admins` WHERE email = ? ";

			$res = $this->queryResultFound( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}	

		function getByUsername( array $dt )
		{
			$sql = " SELECT * FROM `admins` WHERE username = ? ";

			$res = $this->queryResultFound( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function deleteById( array $dt )
		{
			$sql = " DELETE FROM `admins` WHERE id = ? ";

			$res = $this->runQuery_2( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function updatePasswordById( array $dt )
		{
			$sql = " UPDATE `admins` SET `password`= ?  WHERE id = ? ";

			$res = $this->runQuery_2( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function updateNameById( array $dt )
		{
			$sql = " UPDATE `admins` SET `full_name`= ?  WHERE id = ? ";

			$res = $this->runQuery_2( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function updatePassportById( array $dt )
		{
			$sql = " UPDATE `admins` SET `passport`= ?  WHERE id = ? ";

			$res = $this->runQuery_2( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function adminTable( $page_start, $per_page, array $dt )
		{
			$sql = " SELECT * FROM `admins` WHERE NOT id = ? LIMIT $page_start, $per_page ";

			$res = $this->fetchAll( $sql, $dt );

			if ( $res ) 
			{
				return $res;
			}
		}
	}

?>