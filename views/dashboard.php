<main class="container">
	<div class="row mt-3 mb-5">
		<?= $msg ?>
		<div class="d-flex justify-content-between mb-3">
			<div class="users text-center">
				<h3> <strong>Total<br>Users</strong></h3>
				<span class="result-box"> <strong> <?= $total_users ?> </strong></span>
			</div>
			<div class="active-users text-center">
				<h3><strong>Active Users</strong></h3>
				<span class="result-box"> <strong> <?= $active_users ?> </strong></span>	
			</div>
			<div class="score text-center">
				<h3> <strong>Best Score</strong></h3>
				<span class="result-box"> <strong> <?= $best_score ?> </strong></span>
			</div>
		</div>

		<div class="card">
			<div class="card-header bg-white">
				<h3 class="card-title fw-bold">User's</h3>
			</div>
			
		  <div class="card-body">
		  	<table class="table table-hovered">
		  		<thead>
		  			<th>S/N</th>
		  			<th>Name</th>
		  			<th class="medium-screen">Lowest Score</th>
		  			<th class="medium-screen">Best Score</th>
		  			<th>Status</th>
		  		</thead>
		  		<tbody class="fw-bold">
		  			<?php
		  				if ( $users ) 
		  				{
			  				$sn = 0;
			  				foreach ( $users as $user_dt ) 
			  				{
				  				$sn++;
				  				$pag_admin_id = base64_encode( $user_dt['id'] );
				  			?>
				  			<tr>
				  				<td> <?= $sn ?> </td>
				  				<td> <?= $user_dt['name'] ?> </td>
				  				<td class="medium-screen"> <?= $user_dt['lowest_score'] ?> </td>
				  				<td class="medium-screen"> <?= $user_dt['best_score'] ?> </td>
				  				<td> <?= $user_dt['status'] ?> </td>

				  			</tr>
			  		<?php
			  				}
			  			}
			  		?>
		  		</tbody>

		  	</table>

		  	<section>
					<?php 
						if ( $users ) 
						{
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
					<?php
						}
					?>
				</section>
		  </div>
		</div>
	</div>
</main>