<?php
	include_once 'inc/header.php';
	include 'inc/User.php';
?>

<?php 
	$user = new User(); 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
		$usrLogin = $user->userLogin($_POST);
	}
?>

		<div class="modal-content" style="padding: 30px;">
			<div class="card-header">
				<h2>User Login</h2>
			</div>


			<div class="media-body">
				<div style="max-width: 60%; margin: 0 auto;">
<?php 
	if (isset($userLogin)) {
		echo $usrLogin;
	}
 ?>

				<form action="" method="POST">
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="text" id="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">password</label>
						<input type="password" id="password" name="password" class="form-control">
					</div>
					<button type="submit" name="login" class="btn btn-success">Login</button>
				</form>
				</div>
			</div>
		</div>
		
<?php 
	include_once 'inc/footer.php';
 ?>