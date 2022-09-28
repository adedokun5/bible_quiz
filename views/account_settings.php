<div class=" mt-3">
	<?= $msg ?>	
</div>
<main class="container-fluid">
	<div class="row my-5">

		<aside class="col-lg-3 rounded mb-4">
	    <section class="list-group fw-bold my-auto">
	    	<div class="row">
		    	<div class="mb-3 mb-md-0 mt-md-0 mb-lg-3 col-md-4 col-lg-12 text-center">
		    		<!-- Button trigger modal -->
						<button type="button" class="btn btn-light btn-lg fw-bold text-dark" data-bs-toggle="modal" data-bs-target="#fullName">
						  Change Full Name
						</button>					    	
					</div>

					<div class="mb-3 mb-md-0 col-md-4 mb-lg-3 col-lg-12 text-center">
		    		<!-- Button trigger modal -->
						<button type="button" class="btn btn-light btn-lg fw-bold text-dark" data-bs-toggle="modal" data-bs-target="#password">
						  Change Password
						</button>					    	
					</div>

					<div class="text-center col-md-4 col-lg-12 mb-3 mb-md-0">
		    		<!-- Button trigger modal -->
						<button type="button" class="btn btn-light btn-lg fw-bold text-dark" data-bs-toggle="modal" data-bs-target="#image">
						  Change Passport
						</button>					    	
					</div>
				</div>
	    </section>
		</aside>

		<div class="card col-lg-9 col-xl-8">
			<div class="card-header bg-white">
				<h3 class="card-title fw-bold">	Profile </h3>
				<h6 class="card-subtitle mb-2 text-muted lead">You can only edit your name, password and passport.</h6>

			</div>
			
		  <div class="card-body btn-light mb-3 rounded">
	    	<div class="row">
					<div class="d-sm-flex justify-content-between d-md-block col-md-5">
						<div class="mb-md-5">
							<h5 class="text-capitalize">welcome, <strong><?=$fullname ?></strong>.</h5>
				    </div>
				    <div class="img-box">
				    	<img src="assets/images/<?= "$username/$passport_name" ?>" alt="image" class="img img-fluid">
				    </div>
					</div>

					<div class="col-md-7">
		    		<div class="form-group mt-2">
		    			<label for="full_name" class="fw-bold">Username</label>
		    			<div>
		    				<input type="text" class="form-control text-capitalize" readonly value="<?= $username ?>" >
		    			</div>
		    		</div>
		    		<div class="form-group mt-2">
		    			<label for="email" class="fw-bold">Email</label>
		    			<div>
		    				<input type="email" readonly class="form-control" value="<?= $email ?>">
		    			</div>
		    		</div>
		    		<div class="form-group mt-2">
		    			<label for="phone_num" class="fw-bold">Phone Number</label>
		    			<div>
		    				<input type="text" readonly class="form-control" value="<?= $phone_num ?>">
		    			</div>
		    		</div>
		    		<div class="form-group mt-2">
		    			<label for="state" class="fw-bold">State</label>
		    			<div>
		    				<input type="text" readonly class="form-control" value="<?= $state ?>">
		    			</div>
		    		</div>
		    	</div>

	    	</div>
		    
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

<!-- Update Password Modal -->
<div class="modal fade" id="password" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fw-bold" id="exampleModalLabel">Change Password</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form method="POST">
					<div class="form-group mt-2">
	    			<label for="pword" class="fw-bold">Password <span class="text-danger">*</span></label>
	    			<div>
	    				<input type="password" name="pword" id="pword" class="form-control" maxlength="8" oninput="updatePasswordBtn()" required value="<?= persistData( 'pword', $pass ) ?>" >	    				
	    			</div>
	    		</div>
	    		<div class="form-group mt-2">
	    			<label for="con_pword" class="fw-bold">Confirm Password <span class="text-danger">*</span></label>
	    			<div>
	    				<input type="password" name="con_pword" id="con_pword" class="form-control" oninput="updatePasswordBtn()" maxlength="8" required value="<?= persistData( 'con_pword', $pass ) ?>">
	    			</div>
	    			<span id="password_field_msg" class=" text-danger mt-1 fw-bold"></span>
	    		</div>
	    		<span>
						<label class="mt-2 fw-bold">
							<input type="checkbox" onclick="passwordType()" > Show Passwords
						</label>
					</span>

	    		<div class="text-center mt-4">
	    			<button type="submit" name="update_password_btn" disabled id="update_password_btn" class="btn btn-success">Save changes</button>
	    		</div>
	    	</form>
      </div>
    </div>
  </div>
</div>

<!-- Update Passport Modal -->
<div class="modal fade" id="image" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title fw-bold" id="exampleModalLabel">Change Passport</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form method="POST" enctype="multipart/form-data">
	    		<div class="form-group mt-2">
	    			<label for="passport" class="fw-bold">Passport <span class="text-danger">*</span></label>
	    			<div>
	    				<input type="file" name="passport" id="passport" class="form-control" oninput="updatePassportBtn()" required >
	    				<span id="passport_field_msg" class=" text-danger mt-1 fw-bold"></span>
	    			</div>
	    		</div>

	    		<div class="text-center mt-4">
	    			<button type="submit" disabled name="update_passport_btn" id="update_passport_btn" class="btn btn-success">Save changes</button>
	    		</div>
	    	</form>
      </div>
    </div>
  </div>
</div>