<?php
	include_once 'inc/header.php';
	include 'lib/User.php';

?>
<?php 
	$user = new User(); 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
		$usrRegi = $user->userRegistration($_POST);
	}
?>


		<div class="modal-content" style="padding: 30px;">
			<div class="card-header">
				<h2>User Registration</h2>
			</div>


			<div class="media-body">
				<div style="max-width: 60%; margin: 0 auto;">

<?php 
	if (isset($usrRegi)) {
		echo $usrRegi;
	}
 ?>

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
					<button type="submit" name="register" class="btn btn-success">Register</button>
				</form>
				</div>
			</div>
		</div>
		
<?php 
	include_once 'inc/footer.php';
 ?>