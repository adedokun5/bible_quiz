<?php
	#Author : Adedokun Julius Ayobami
	#Email  : adedokunjuliusayobami@gmail.com
	#Date Created  : 01_09_2022
	#Date Modified : 01_09_2022

	trait DatabaseLogic
	{
		//database name
		private $db_name = "bible_quiz";
		private $host_name = 'localhost';
		private $username = 'root';
		private $password ='';
		private $conn;

		function connection()
		{
			try 
			{
				$this->conn = new PDO( "mysql:host=$this->host_name; dbname=$this->db_name", $this->username, $this->password  );
				if ( $this->conn ) {
					return $this->conn;
				}
			} 
			catch ( PDOException $e ) {
				return 'Sorry, Unable to Connect';
			}
		}

		function fetch( $sql, array $dt )
		{
			$query = $this->connection()->prepare( $sql );
			$res = $query->execute( $dt );
			$rows = $query->rowCount();
			if ( $rows > 0 ) {
				$data = $query->fetch( PDO::FETCH_ASSOC );
				return $data;
			}
		}

		function fetchAll( $sql, array $dt )
		{
			$query = $this->connection()->prepare( $sql );
			$res = $query->execute( $dt );
			$rows = $query->rowCount();
			if ( $rows > 0 ) {
				$data = $query->fetchAll( PDO::FETCH_ASSOC );
				return $data;
			}
		}

		function runQuery( $sql, array $dt )
		{
			$query = $this->connection()->prepare( $sql );
			$res = $query->execute( $dt );

			if ( $res ) {
				return $res;
			}
		}

		function runQuery_2( $sql, array $dt )
		{
			$query = $this->connection()->prepare( $sql );
			$res = $query->execute( $dt );
			$rows = $query->rowCount();
			if ( $rows > 0 ) {
				return $rows;
			}
		}

		function queryResultFound( $sql, array $dt )
		{
			$query = $this->connection()->prepare( $sql );
			$res = $query->execute( $dt );
			$rows = $query->rowCount();
			if ( $rows > 0 ) {
				return $rows;
			}
		}

	}

?>