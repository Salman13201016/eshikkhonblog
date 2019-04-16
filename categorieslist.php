<?php include "adminlayout.php"?>
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Categories List</h3>
					<div class="row">

						<!-- INPUTS -->
						<div class="panel">
							<form>
								<div class="panel-heading">
									<h3 class="panel-title">Category Details</h3>
								</div>
								<div class="panel-body">

									<div class="col-md-12 table-responsive">

										<table class="table table-striped">
											<thead>
												<tr>
													<th>Name</th>
													<th>Details</th>
													<th>Action</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<?php 
														$sql = "SELECT * FROM categories";
														$sql = mysqli_query($conn,$sql);
														if(mysqli_num_rows($sql)>=1){
															while($row=mysqli_fetch_assoc($sql)){
																echo "<td>". $row['cat_name']."</td>";
																echo "<td>". $row['cat_details']."</td>";
																echo "<td>
																	<a class='btn btn-success' href='#'><i class='fa fa-edit'></i> </a> 
																	<a class='btn btn-danger delete' href='#'><i class='fa fa-trash'></i> </a>
																</td>";
															}
														}
													?>
												</tr>
											</tbody>
										</table>
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
	<!-- Javascript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
	<script src="js/klorofil-common.js"></script>
</body>

</html>
