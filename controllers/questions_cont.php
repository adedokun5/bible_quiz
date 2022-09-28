<?php
	#Author : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 14_09_2022
	#Date Modified : 14_09_2022	

	include_once('models/Question.php');
	$question = new Question();

	$admin_id = $_SESSION['admin_dt']['id'];
	$account_type = $_SESSION['admin_dt']['acct_type'];

	if ( $admin_id ) 
	{
		if ( isset( $_REQUEST['id'] ) ) 
		{
			$question_id = base64_decode( $_REQUEST['id'] );

			$dt_01 = [ $question_id ];

			$delete_question = $question->deleteById( $dt_01 );

			if ( $delete_question ) 
			{
				$msg = '<h5 class="alert alert-success text-center p-2">Question Deleted Successfully</h5>';
			}
		}

		$total_questions = $question->getAllQuestion( [ ] );

		if ( $total_questions > 0 ) 
		{
			$per_page = 10;
			$pages = ceil( $total_questions/$per_page );

			if ( isset( $_REQUEST['cur_page'] ) ) 
			{
				$page = $_GET['cur_page'];
			} 
			else 
			{
				$page = 1;
			}
			
			$page_start = ( $page - 1 ) * $per_page;

			$questions = $question->questionTable( $page_start, $per_page, [ ] );
		}
		else
		{
			$msg = '<h5 class="alert alert-success text-center p-2">No Questions Found</h5>';;
		}
	}

	//Questions Interface
	include_once('views/questions.php');
	
?>