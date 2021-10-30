<?php
	include_once 'inc/header.php';
    include 'lib/User.php';
    $user = new User();
?>

		<div class="modal-content" style="padding: 30px;">
			<div class="card-header">
				<h2>User List <span class="float-right"><strong>Welcome!</strong></span></h2>
			</div>

			<div class="modal-body">
				<table class="table table-striped">
					<th width="20%">Serial</th>
					<th width="20%">Name</th>
					<th width="20%">Username</th>
					<th width="20%">Email Address</th>
					<th width="20%">Action</th>

					<tr>
						<td>01</td>
						<td>Abir</td>
						<td>mnrabir</td>
						<td>mnrabir@gmail.com</td>
						<td><a class="btn btn-primary" href="profile.php?id=1">View</a></td>
					</tr>
				</table>
			</div>
		</div>
		
<?php 
	include_once 'inc/footer.php';
 ?>