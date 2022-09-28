<?php
	#Author : Adedokun Julius Ayobami
	#Email  : adedokunjuliusayobami@gmail.com
	#Date Created  : 01_09_2022
	#Date Modified : 01_09_2022

	include_once( 'DatabaseLogic.php' );

	class Question
	{
		use DatabaseLogic;

		private $db_table_name = 'questions';

		function addNew( array $dt )
		{
			$sql = " INSERT INTO $this->db_table_name ( `botb`, `chapter`, `verse`, `bible_version`, `passage`, `added_by`, `modified_by` ) VALUES ( ?, ?, ?, ?, ?, ?, ? ) ";

			$res = $this->runQuery( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function getQuestionById( array $dt )
		{
			$sql = " SELECT * FROM `questions` WHERE id = ? ";

			$res = $this->fetch( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function getQuestionByBookChapterAndVerse( array $dt )
		{
			$sql = " SELECT * FROM `questions` WHERE botb = ? AND chapter = ? AND verse = ? ";

			$res = $this->queryResultFound( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function getQuestionByBookChapterAndVerseById( array $dt )
		{
			$sql = " SELECT * FROM `questions` WHERE botb = ? AND chapter = ? AND verse = ? AND NOT id = ? ";

			$res = $this->queryResultFound( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function getAllQuestion( array $dt )
		{
			$sql = " SELECT * FROM `questions`";

			$res = $this->queryResultFound( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}	

		function deleteById( array $dt )
		{
			$sql = " DELETE FROM `questions` WHERE id = ? ";

			$res = $this->runQuery_2( $sql, $dt );
			if ( $res ) {
				return $res;
			}
		}

		function updateQuestionById( array $dt )
		{
			$sql = " UPDATE `questions` SET `botb`= ?,`chapter`= ?,`verse`= ?,`bible_version`= ?,`passage`= ?, `modified_by`= ?  WHERE  id = ? ";

			$res = $this->runQuery_2( $sql, $dt );
			
			if ( $res ) {
				return $res;
			}
		}

		function questionTable( $page_start, $per_page, array $dt )
		{
			$sql = " SELECT * FROM `questions` LIMIT $page_start, $per_page ";

			$res = $this->fetchAll( $sql, $dt );

			if ( $res ) 
			{
				return $res;
			}
		}

	}

?>