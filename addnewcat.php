<?php 
	include 'adminlayout.php';
	
	if(isset($_POST['submit'])){
		$category = mysqli_real_escape_string($conn,$_POST['category']);
		$details = mysqli_real_escape_string($conn,$_POST['details']);
		$cat_exist = "SELECT cat_name FROM categories WHERE cat_name ='$category' LIMIT 1";
        $cat_exist = mysqli_query($conn,$cat_exist);
        //
        if(mysqli_num_rows  ($cat_exist)>=1){
            echo '<script> alert("The '.$category.'Category has already been existed") </script>';
        }
		elseif(empty($category) || empty($details) ){
			echo '<script> alert("Name and Details are required") </script>';
		}
		else{
			$sql = "INSERT INTO categories (cat_name,cat_details) VALUES ('$category','$details')";
			$sql = mysqli_query($conn,$sql);
			if($sql){
				echo '<script> alert("'.$category.'Category added Successfully") </script>';
			}
			else{
				echo '<script> alert("Something went wrong") </script>'.mysqli_error($conn);
			}
		}
	}
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
							<form method ="POST" action="">
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
