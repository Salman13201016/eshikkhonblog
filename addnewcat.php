<?php 
	include 'adminlayout.php';
	
?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Create New Cartegory</h3>
					<div class="row">

						<!-- INPUTS -->
						<div class="panel">
							<form method ="POST" action="?">
								<div class="panel-heading">
									<h3 class="panel-title">Add Category</h3>
								</div>
								<div class="panel-body">

									<div class="col-md-4 col-md-offset-3">
										<div class="form-group">
											<label for="category"  class="control-label">Category</label>
											<input id="category" name="category" type="text" class="form-control is-invalid" placeholder="Category Name">
										</div>

										<div class="form-group">
											<label for="details"  class="control-label">Description</label>
											<textarea class="form-control" id="details" name="details" placeholder="Write Description of the Category" rows="4"></textarea>
										</div>

										<div class="form-group">
											<input type="submit" name="submit" class="btn btn-success" value="Add New Category">
										</div>
										
									</div>
								</div>
							</form>
						</div>
						<!-- END INPUTS -->	

					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	 <script type="application/x-javascript">

tinymce.init({selector:'#details'});

</script>

</body>

</html>
