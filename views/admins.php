<main class="container">
	<div class="row my-5">
		<div class="card">
			<div class="card-header bg-white">
				<h3 class="card-title fw-bold">Admin</h3>
	    	<?= $msg ?>	
			</div>
			
		  <div class="card-body">
		  	<table class="table table-hovered">
		  		<thead>
		  			<th>S/N</th>
		  			<th>Name</th>
		  			<th class="medium-screen">Username</th>
		  			<th class="small-screen">Phone Number</th>
		  			<th>Actions</th>
		  		</thead>
		  		<tbody>
		  			<?php
		  				$sn = 0;
		  				foreach ( $admin as $admin_dt ) 
		  				{
			  				$sn++;
			  				$pag_admin_id = base64_encode( $admin_dt['id'] );
			  			?>
			  			<tr>
			  				<td> <?= $sn ?> </td>
			  				<td> <?= $admin_dt['full_name'] ?> </td>
			  				<td class="medium-screen"> <?= $admin_dt['username'] ?> </td>
			  				<td class="small-screen"> <?= $admin_dt['phone_num'] ?> </td>
			  				<td>
								<button type="button" class="btn btn-success btn-lg fw-bold text-dark">
						  				<a href="admin_details?id=<?=$pag_admin_id ?>" target="_blank" >Profile </a>
								</button>
								<button type="btn" class="btn btn-danger del-button btn-lg fw-bold text-dark">
									<a href="?id=<?=$pag_admin_id ?>" >Delete</a>
								</button>
			  				</td>

			  			</tr>
			  		<?php
			  			}
			  		?>
		  		</tbody>
		  	</table>

			<section>
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


<!-- Update Fullname Modal -->
<div class="modal fade" id="fullName" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fw-bold" id="exampleModalLabel">Change Name</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form method="POST">
	    		<div class="form-group mt-2">
	    			<label for="full_name" class="fw-bold">Full Name <span class="text-danger">*</span></label>
	    			<div>
	    				<input type="text" name="full_name" id="full_name" class="form-control" oninput="updateNameBtn()" required maxlength="200" value="<?= persistData( 'full_name', $pass ) ?>" >
	    				<span id="name_field_msg" class=" text-danger mt-1 fw-bold"></span>
	    			</div>
	    		</div>

	    		<div class="text-center mt-4">
	    			<button type="submit" name="update_name_btn" id="update_name_btn" disabled class="btn btn-success">Save changes</button>
	    		</div>
	    	</form>
      </div>
    </div>
  </div>
</div>
