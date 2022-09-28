<main class="container-fluid">
	<div class="row my-5">
		<div class="card col-md-10 m-auto">

			<div class="card-header bg-white">
				<h3 class="card-title fw-bold">	Profile </h3>
			</div>
			
		  <div class="card-body btn-light mb-3 rounded">
	    	<div class="row">
					<div class="d-sm-flex justify-content-between d-md-block col-md-5">
						<div class="mb-md-5">
							<h5 class="text-capitalize"><strong> <i>Admin Name:</i> <?=$fullname ?></strong>.</h5>
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