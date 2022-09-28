<?php
	#Author : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 08_09_2022
	#Date Modified : 08_09_2022

	include_once('models/Question.php');
	$question = new Question(); 

	$admin_uname = $_SESSION['admin_dt']['username'];

	if ( isset( $_POST['save_ques'] ) ) 
	{
		$botb = $_POST['botb'];
		$chapter = $_POST['chapter'];
		$verse = $_POST['verse'];
		$version = $_POST['version'];
		$passage = $_POST['passage'];

		if ( $botb && $chapter && $verse && $version && $passage ) 
		{
			$dt_01 = [ $botb, $chapter, $verse ];
			$num_result = $question->getQuestionByBookChapterAndVerse( $dt_01 );

			if ( $num_result == 0 ) 
			{
				$dt_01 = [ $botb, $chapter, $verse, $version, $passage, $admin_uname, $admin_uname  ];

				$add_question = $question->addNew( $dt_01 );
				if ( $add_question ) 
				{
					$pass = true;
					$msg = '<h5 class="alert alert-success p-2">Question Added Successfully</h5>';
				} 
				else 
				{
					$msg = '<h5 class="alert alert-danger p-2">Question Not Added!</h5>';					
				}
			} 
			else 
			{
				$msg = '<h5 class="alert alert-danger p-2">Sorry, Question already exist!</h5>';
			}
		} 
		else 
		{
			$msg = '<h5 class="alert alert-danger p-2">Please, All fields are required!</h5>';
		}
	}
	
	//New Question Interface
	include_once('views/new_question.php');

?>