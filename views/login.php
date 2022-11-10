<main class="container-fluid">
	<div class="row my-5 ">
		<section class="col-sm-8 col-md-5 m-auto">
			<div class="text-center login-form-title">
				<h1 class="fw-bold display-4">Admin Login</h1>
				<?= $msg ?>
			</div>
			<form method="POST" class="login-form" >
				<div class="form-group">
					<label for="username" class="fw-bold lead" >Username:</label>
					<div>
						<input type="text" name="username" id="username" required maxlength="20" class="form-control" value="<?= persistData_2( 'username' ) ?>">
					</div>	
				</div>
				<div class="form-group mt-2">
					<label for="pword" class="fw-bold lead" >Password:</label>
					<div>
						<input type="Password" name="pword" id="pword" required maxlength="8" class="form-control">
					</div>
					<span>
						<label class="mt-2 fw-bold">
							<input type="checkbox" onclick="passwordType()" > Show Password
						</label>
					</span>	
				</div>

				<div class="text-center mt-2">
					<button type="submit" name="login_btn" id="login_btn" class="btn btn-success fw-bold">Login</button>
				</div>
			</form>
		</section>
	</div>
</main>