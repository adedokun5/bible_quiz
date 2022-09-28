<main class="container">
	<div class="row my-5">
		<div class="card">
			<div class="card-header bg-white mt-3">
				<h3 class="card-title fw-bold">	Edit Question</h3>
	    	<h6 class="card-subtitle mb-2 text-muted lead">Please, all fields are required</h6>
	    	<?= $msg ?>	
			</div>
			
		  <div class="card-body">
				<form action="" method="POST">
					<div class="row my-4 ">
						<div class="form-group col-sm-6 mt-2">
							<label class="fw-bold" for="botb">
								Book of the Bible <span class="text-danger">*</span>
							</label>
							<div>
								<input type="text" name="botb" id="botb" placeholder="Book of the Bible" class="form-control" required maxlength="50" oninput="addQuestionBtn()" value="<?= $book ?>" >
							</div>
							<span id="botb_field_msg" class="text-danger form-text fw-bold"></span>
						</div>

						<div class="form-group col-sm-3 mt-2">
							<label class="fw-bold" for="chapter">
								Chapter <span class="text-danger">*</span>
							</label>
							<div>
								<input type="text" name="chapter" id="chapter" placeholder="Chapter" class="form-control" oninput="addQuestionBtn()" required maxlength="3" value="<?= $chapter ?>" >
							</div>
							<span id="chapter-field-msg" class="form-text text-danger fw-bold"></span>
						</div>

						<div class="form-group col-sm-3 mt-2">
							<label class="fw-bold" for="verse">
								Verse <span class="text-danger">*</span>
							</label>
							<div>
								<input type="text" name="verse" id="verse" placeholder="Verse" class="form-control" oninput="addQuestionBtn()" required maxlength="4" value="<?= $verse ?>" >
							</div>
							<span id="verse-field-msg" class="form-text text-danger fw-bold"></span>
						</div>

						<div class="form-group col-md-6 mt-2">
							<label class="fw-bold" for="version">
								Bible Version <span class="text-danger">*</span>
							</label>
							<div>
								<input type="text" name="version" id="version" placeholder="Bible Version" class="form-control" oninput="addQuestionBtn()" required maxlength="100" value="<?= $version ?>" >
							</div>
							<span id="version-field-msg" class="form-text text-danger fw-bold"></span>
						</div>

						<div class="col-md-6 mt-2">
							<label class="fw-bold" for="passage" >Passage <span class="text-danger">*</span></label>
							<textarea maxlength="1000" name="passage" id="passage" class="form-control" oninput="addQuestionBtn()" ><?= $passage ?>

							</textarea>
						</div>

						<div class="text-center mt-5">
							<button type="submit" name="save_ques" id="save_ques" disabled class="btn btn-success fw-bold" > Edit</button>
						</div>
					</div>
					
				</form>		    
		  </div>
		</div>
	</div>
	
</main>