<main class="container">
	<div class="row my-5">
		<div class="card">
			<div class="card-header bg-white">
				<h3 class="card-title fw-bold">Questions</h3>
	    	<?= $msg ?>	
			</div>
			
		  <div class="card-body">
		  	<table class="table table-hovered">
		  		<thead>
		  			<th class="medium-screen">S/N</th>
		  			<th>Passage</th>
		  			<th class="medium-screen">Version</th>
		  			<?php
		  				if ( $account_type == 1 ) 
		  				{
		  			?>
		  			<th class="medium-screen">Added By</th>
		  			<th class="medium-screen">Modified By</th>
		  			<?php		
		  				}
		  			?>

		  			<th>Actions</th>
		  		</thead>
		  		<tbody>
		  			<?php
		  				$sn = 0;
		  				foreach ( $questions as $question_dt ) 
		  				{
			  				$sn++;
			  				$pag_question_id = base64_encode( $question_dt['id'] );
			  			?>
			  			<tr>
			  				<td class="medium-screen"> <?= $sn ?> </td>
			  				<td> <?= $question_dt['passage'] ?> <br> 
			  					<span class="fw-bold"><?= $question_dt['botb']." ".$question_dt['chapter'].":".$question_dt['verse'] ?></span>  
			  				</td>
			  				<td class="medium-screen"> <?= $question_dt['bible_version'] ?> </td>
				  			<?php
				  				if ( $account_type == 1 ) 
				  				{
				  			?>
			  				<td class="medium-screen"> <?= $question_dt['added_by'] ?> </td>
			  				<td class="medium-screen"> <?= $question_dt['modified_by'] ?> </td>
				  			<?php		
				  				}
				  			?>

			  				<td>
								<button type="button" class="btn btn-success btn-lg text-dark">
						  				<a href="edit_question?id=<?=$pag_question_id ?>" target="_blank" > <i class="bi bi-pencil"></i> Edit </a>
								</button>
								<button type="btn" class="btn btn-danger mt-2 btn-lg text-dark">
									<a href="?id=<?=$pag_question_id ?>" ><i class="bi bi-trash"></i> Delete</a>
								</button>
			  				</td>

			  			</tr>
			  		<?php
			  			}
			  		?>
		  		</tbody>

		  	</table>

				<section class="pagination-container">
					<?php 
						$prev = $page - 1;
					?>
					<nav aria-label="Page navigation example">
					  <ul class="pagination" >
					  	<?php
					  		if ( $prev != 0 ) {
					  			
					  	?>
					    <li class="page-item"><a class="page-link text-success" readonly  href="?cur_page=<?= $prev ?>">Prev</a></li>

					    <?php
					    	}
					    ?>
  					<?php
  						for ( $i = 1; $i <= $pages; $i++ ) 
  						{ 
  						  if ( $pages > 1 )
  						  {	
  								if ( $page == $i ) 
  								{
  					?>

  						<li class="page-item"><a class="page-link bg-success text-white" href="?cur_page=<?= $i ?>"> <?= $i ?> </a></li>

  					<?php
  								}
  								else
  								{
  					?>
  						<li class="page-item"><a class="page-link text-success" href="?cur_page=<?= $i ?>"> <?= $i ?> </a></li>

  					<?php
  								}
  						  }
  						}
  					?>

					  	<?php
					  		$next = $page + 1;

					  		if ( $next <= $pages ) {
					  			
					  	?>
					    	<li class="page-item "><a class="page-link text-success" href="?cur_page=<?= $next ?>">Next</a></li>

					    <?php
					    	}
					    ?>
					  </ul>
					</nav>
				</section>

		  </div>
		</div>
	</div>
</main>