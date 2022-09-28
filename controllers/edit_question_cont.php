<?php
	#Name : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date-Created : 22_09_2022
	#Date-Modified : 23_09_2022

	include_once('models/Question.php');
	$question = new Question();

	if ( isset( $_REQUEST['id'] ) ) 
	{
		$admin_name = $_SESSION['admin_dt']['full_name'];

		$question_id = base64_decode( $_REQUEST['id'] );

		if ( $question_id ) 
		{
			
			if ( isset( $_POST['save_ques'] ) ) 
			{
				$botb = $_POST['botb'];
				$chapter = $_POST['chapter'];
				$verse = $_POST['verse'];
				$version = $_POST['version'];
				$passage = $_POST['passage'];

				if ( $botb && $chapter && $verse && $version && $passage ) 
				{
					$dt_01 = [ $botb, $chapter, $verse, $question_id ];

					$num_result = $question->getQuestionByBookChapterAndVerseById( $dt_01 );

					if ( $num_result == 0 ) 
					{

						$dt_01 = [ $botb, $chapter, $verse, $version, $passage, $admin_name, $question_id  ];

						$update_question = $question->updateQuestionById( $dt_01 );

						if ( $update_question ) 
						{
							$msg = '<h5 class="alert alert-success p-2">Question Updated Successfully</h5>';
						} 
						else 
						{
							$msg = '<h5 class="alert alert-danger p-2">Question Not Updated!</h5>';					
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

			$dt_01 = [ $question_id ];

			$question_data = $question->getQuestionById( $dt_01 );

			$book = $question_data['botb'];
			$chapter = $question_data['chapter'];
			$verse = $question_data['verse'];
			$version = $question_data['bible_version'];
			$passage = $question_data['passage'];
		}
		else
		{
			echo "Access Denied";
		}
	}

	//Edit Question Interface
	include_once('views/edit_question.php');
?>