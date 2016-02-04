<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title">New User</h3>
		</div>
	<form action="<?php echo site_url('dashboard/add_user'); ?>" method="post">
		<div class="box-body">
			<div class="form-group">
				<label>Nama</label>
				<input class="form-control" type="text" name="nama" placeholder="Full Name" required>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input class="form-control" type="email" name="email" placeholder="Your Email" required>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" type="text" name="user" placeholder="Username" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="password" name="pass" placeholder="Password" required>
			</div>
			<div class="form-group">
				<label>Re-type Password</label>
				<input class="form-control" type="password" name="conF_pass" placeholder="Re-type Password" required>
			</div>
			<div class="form-group">
				<label>Status</label>
				<select class="form-control" name="status" required>
					<option selected disabled>--Choose One--</option>
					<option value="1">Admin</option>
					<option value="2">User</option>
				</select>
			</div>
		</div>
		<div class="box-footer">
			<button class="btn btn-primary pull-right">Add</button>
		</div>
	</form>
	</div>
</section>