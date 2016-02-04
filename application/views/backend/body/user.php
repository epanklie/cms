<?php 
	if ($this->session->flashdata('del_user')) {
 ?>
<div class="callout callout-success lead" id="del_user"><?php echo $this->session->flashdata('del_user'); ?></div>
<?php } ?>
<?php if ($this->session->flashdata('edit_user')) {
?>
<div class="callout callout-success lead" id="edit_user"><?php echo $this->session->flashdata('edit_user'); ?></div>
<?php } ?>
<!-- <div class="box box-solid box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">User</h3>
	</div>
	<div class="box-body">
		<div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" name="username" id="user" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" id="pass" required>
		</div>
		<div class="form-group">
			<label>Level</label>
			<select class="form-control" name="level" id="level">
				<option value="1">User</option>
				<option value="0">Admin</option>
			</select>
		</div>
		<input type="submit" value="Simpan" class="btn btn-primary" id="btnSave">
	</div>
</div> -->

<div class="box box-solid box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">User List</h3>
	</div>
	<div class="box-body">
		<table class="table table-bordered">
			<tr>
				<th>Full Name</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
				<th>Update at</th>
				<th>Modify</th>
			</tr>
			<?php 
				foreach ($userdata->result() as $asd) {
			 ?>
			<tr>
				<td><?php echo $asd->nama; ?></td>
				<td><?php echo $asd->username; ?></td>
				<td><?php echo $asd->password; ?></td>
				<td><?php echo $asd->level; ?></td>
				<td><?php echo $asd->update_at; ?></td>
				<td>
					<a href="#" class="btn btn-primary" data-toggle="modal" data-target="<?php echo "#edit_user_".$asd->id; ?>"><i class="fa fa-edit"></i> Edit</a>
					&nbsp;
					<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash"></i> Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="box-footer clearfix">
		<ul class="pagination pagination-sm no-margin pull-left">
			<a href="<?php echo site_url('dashboard/new_user'); ?>" class="btn btn-block btn-primary">Add New</a>
		</ul>
	</div>
</div>

<!-- Modal Hapus -->
<div class="modal" id="delete_user" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Delete?</h4>
			</div>
			<div class="modal-body">
				<h3>Are you sure want to delete this Account?</h3>
			</div>
			<div class="modal-footer">
				<form action="<?php echo site_url('dashboard/deleteUser/id/'.$asd->id); ?>">	
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
					<button type="submit" class="btn btn-primary">Yes</button>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal Edit -->
<?php foreach ($userdata->result() as $asd) {
?>
<div class="modal fade" id="<?php echo "edit_user_".$asd->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Edit</h4>
			</div>
			<form action="<?php echo site_url('dashboard/editUser/id/'.$asd->id); ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $asd->id; ?>">
					</div>
					<div class="form-group">
						<label>Nama :</label>
						<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $asd->nama; ?>" required>
					</div>
					<div class="form-group">
						<label>Email :</label>
						<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $asd->email; ?>" required>
					</div>
					<div class="form-group">
						<label>Username :</label>
						<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $asd->username; ?>" required>
					</div>
					<div class="form-group">
						<label>Password :</label>
						<input type="password" class="form-control" name="password" placeholder="Password" required>
					</div>
					<div class="form-group">
						<label>Status :</label>
						<select class="form-control" name="level" required>
							<option value="<?php echo $asd->level; ?>">
								<?php 
								if ($asd->level == '1') {
									echo "Admin";
								} 
								else{
									echo "User";
								}
								?>
							</option>
							<?php 
								if ($asd->level == '1') {
									echo "<option value='2'>User</option>";
								}
								else{
									echo "<option value='1'>Admin</option>";
								}
							 ?>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary pull-right">Edit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php } ?>

<script type="text/javascript">
	$('document').ready(function() {
		$('#del_user').fadeOut(3000);
		$('#edit_user').fadeOut(3000);
	});
</script>