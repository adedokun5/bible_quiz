<?php 
	if ( !( $page == 'login' ) ) 
	{
?>
	<footer class=" text-center">
		<div class="ms-md-5 col-md-6 d-md-flex justify-content-between">
			<div class="fw-bold d-block">
				<span class="h1 bg-success text-white rounded org-name p-4">
					<strong>Bible Quiz</strong>
				</span>
			</div>
			<div class="fw-bold d-block mt-5 mt-md-0 text-start">
				<h3 class="footer-list-title">Useful Links</h3>
				<h5>
					<a href="dashboard" class="footer-link"><i class="bi bi-arrow-right"></i> Dashboard</a>
				</h5>
				<h5>
					<a href="new_question" class="footer-link"><i class="bi bi-arrow-right"></i> Add Question</a>
				</h5>
				<h5>
					<a href="account_settings" class="footer-link"><i class="bi bi-arrow-right"></i> Settings</a>
				</h5>
				<h5>
					<a href="questions" class="footer-link"><i class="bi bi-arrow-right"></i> View Questions</a>
				</h5>
			</div>
		</div>
		<div class="copyright p-2">
			<p class="lead"> &copy;Copyright Bible Quiz <?= date('Y') ?>.All rights reserved</p>
		</div>
	</footer>
<?php
	}
?>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/myscript/main.js"></script>