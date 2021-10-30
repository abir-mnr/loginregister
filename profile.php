 <?php
	include_once 'inc/header.php';

?>

		<div class="modal-content" style="padding: 30px;">
			<div class="card-header">
				<h2>User Profile <span class="float-right"><a class="btn btn-primary" href="index.php">Back</a></span></h2>
			</div>


			<div class="media-body">
				<div style="max-width: 60%; margin: 0 auto;">
				<form action="" method="POST">
					<div class="form-group">
						<label for="name">Your name</label>
						<input type="text" id="name" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" id="username" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="text" id="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="repass">Re-enter Password</label>
						<input type="password" id="repass" name="repass" class="form-control">
					</div>
					<button type="submit" name="update" class="btn btn-success">Update</button>
				</form>
				</div>
			</div>
		</div>
		
<?php 
	include_once 'inc/footer.php';
 ?>