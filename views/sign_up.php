<main class="container">
	<div class="row my-5">
		<div class="card">
			<div class="card-header bg-white">
				<h3 class="card-title fw-bold">	Add Admin</h3>
	    	<h6 class="card-subtitle mb-2 text-muted lead">Please, all fields are required</h6>
	    	<?= $msg ?>	
			</div>
			
		  <div class="card-body">
		    <form  method="POST" enctype="multipart/form-data" >
		    	<div class="row">
		    		<div class="form-group col-md-6 mt-2">
		    			<label for="full_name" class="fw-bold">Full Name <span class="text-danger">*</span></label>
		    			<div>
		    				<input type="text" name="full_name" id="full_name" required class="form-control" oninput="addAdminSubmitBtn()" maxlength="200" value="<?= persistData( 'full_name', $pass ) ?>" >
		    				<span id="name_field_msg" class=" text-danger mt-1 fw-bold"></span>
		    			</div>
		    		</div>
		    		<div class="form-group col-md-6 mt-2">
		    			<label for="email" class="fw-bold">Email <span class="text-danger">*</span></label>
		    			<div>
		    				<input type="email" name="email" id="email" class="form-control" oninput="addAdminSubmitBtn()" maxlength="100" required value="<?= persistData( 'email', $pass ) ?>">
		    				<span id="email_field_msg" class=" text-danger mt-1 fw-bold"></span>
		    			</div>
		    		</div>
		    		<div class="form-group col-md-6 mt-2">
		    			<label for="phone_num" class="fw-bold">Phone Number <span class="text-danger">*</span></label>
		    			<div>
		    				<input type="text" name="phone_num" id="phone_num" class="form-control" oninput="addAdminSubmitBtn()" maxlength="11" required value="<?= persistData( 'phone_num', $pass ) ?>">
		    				<span id="phn_no_field_msg" class=" text-danger mt-1 fw-bold"></span>
		    			</div>
		    		</div>
		    		<div class="form-group col-md-6 mt-2">
		    			<label for="state" class="fw-bold">State <span class="text-danger">*</span></label>
		    			<div>
		    				<input type="text" name="state" id="state" class="form-control" oninput="addAdminSubmitBtn()" maxlength="50" required value="<?= persistData( 'state', $pass ) ?>">
		    				<span id="state_field_msg" class=" text-danger mt-1 fw-bold"></span>
		    			</div>
		    		</div>
		    		<div class="form-group col-md-6 mt-2">
		    			<label for="passport" class="fw-bold">Passport <span class="text-danger">*</span></label>
		    			<div>
		    				<input type="file" name="passport" id="passport" class="form-control" oninput="addAdminSubmitBtn()" required >
		    				<span id="passport_field_msg" class=" text-danger mt-1 fw-bold"></span>
		    			</div>
		    		</div>
		    		<div class="form-group col-md-6 mt-2">
		    			<label for="username" class="fw-bold">Username <span class="text-danger">*</span></label>
		    			<div>
		    				<input type="text" name="username" id="username" class="form-control" oninput="addAdminSubmitBtn()" maxlength="20" required value="<?= persistData( 'username', $pass ) ?>" >
		    				<span id="username_field_msg" class=" text-danger mt-1 fw-bold"></span>
		    			</div>
		    		</div>
		    		<div class="form-group col-md-6 mt-2">
		    			<label for="pword" class="fw-bold">Password <span class="text-danger">*</span></label>
		    			<div>
		    				<input type="password" name="pword" id="pword" class="form-control" maxlength="8" oninput="addAdminSubmitBtn()" required value="<?= persistData( 'pword', $pass ) ?>" >
		    				<span id="password_field_msg" class=" text-danger mt-1 fw-bold"></span>
		    			</div>
		    		</div>
		    		<div class="form-group col-md-6 mt-2">
		    			<label for="con_pword" class="fw-bold">Confirm Password <span class="text-danger">*</span></label>
		    			<div>
		    				<input type="password" name="con_pword" id="con_pword" class="form-control" oninput="addAdminSubmitBtn()" maxlength="8" required value="<?= persistData( 'con_pword', $pass ) ?>">
		    			</div>
		    		</div>
		    		<span>
							<label class="mt-2 fw-bold">
								<input type="checkbox" onclick="passwordType()" > Show Passwords
							</label>
						</span>
						<div class="text-center mt-3">
							<button class="btn btn-success fw-bold" disabled name="save_btn" id="save_btn" >Submit</button>
							<p>Already have an account? <a href="login" class="text-dark fw-bold">Sign in</a></p>
						</div>

		    	</div>
		    </form>
		    
		  </div>
		</div>
	</div>
</main>