<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0" >
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/mystyle/style.css">
	<title>Bible Quiz</title>
</head>
<body>

	<?php 
		if ( !( $page == 'login' ) ) 
		{
			$admin_dt = $_SESSION['admin_dt'];
			$account_type = $admin_dt['acct_type'];
	?>
		<header class="container-fluid">
			<div class="row p-1 p-md-2">
				<div class="d-flex justify-content-between">
					<section class="mt-1">
						<span class="h1 d-block d-sm-inline org-name">
							<strong>Bible Quiz</strong>
						</span>
						<span class="h5">
							<a href="dashboard"><i class="bi bi-house-fill"></i> Dashboard</a>
						</span>
					</section>

					<section>
						<button class="btn offcanvas-trigger-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
						  <i class="bi bi-grid-3x3-gap-fill text-white h1"></i>
						</button>

						<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
						  <div class="offcanvas-header">
						    <h5 class="offcanvas-title h3 fw-bold" id="offcanvasExampleLabel">
						    	Operations
						    </h5>
						    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						  </div>
						  <div class="offcanvas-body bg-success">
						    <ul class="list-group fw-bold">
						    	<?php 
						    		if ( $account_type == 1 ) 
						    		{
						    	?>
								    	<li class="list-group-item">
												<a href="new_admin" class="btn offcanvas-btn">
												 	<i class="bi bi-person-plus-fill h3 text-success"></i> 
												 	Add New Admin
												</a>				    	
											</li>
								    	<li class="list-group-item">
								    		<a href="admins" class="btn offcanvas-btn">
								    			<i class="bi bi-people-fill h3 text-success"></i> 
								    			Manage Admin
								    		</a>
								    	</li>
								  <?php
								  	}
								  ?>
						    	<li class="list-group-item">
						    		<a href="new_question" class="btn offcanvas-btn">
						    			<i class="bi bi-people-fill h3 text-success"></i> 
						    			Add Quiz Question
						    		</a>
						    	</li>
						    	<li class="list-group-item">
						    		<a href="questions" class="btn offcanvas-btn">
						    			<i class="bi bi-bookshelf h3 text-success"></i>
						    			Mange Quiz Questions
						    		</a>
						    	</li>
						    	<li class="list-group-item">
						    		<a href="account_settings" class="btn offcanvas-btn">
						    			<i class="bi bi-gear-fill h3 text-success"></i>
						    			Account Settings
						    		</a>
						    	</li>
						    	<li class="list-group-item">
						    		<a href="logout" class="btn offcanvas-btn">
						    			<i class="bi bi-arrow-return-left h3 text-success"></i>
						    			Logout
						    		</a>
						    	</li>
						    </ul>
						  </div>
						</div>
					</section>
					
				</div>
				
			</div>
		</header>
	<?php
		}
	?>	
</body>
</html>
<!-- Update Fullname Modal -->
<div class="modal fade" id="guide" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fw-bold" id="exampleModalLabel">User's Guide</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>
