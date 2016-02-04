<div class="box box-solid box-primary">
	<div class="box-header">
		<?php 
			foreach ($website->result() as $key) {
		 ?>
		<h3 class="box-title"><?php echo $title." of ".$key->website_name; ?></h3>
	</div>
	<form action="<?php echo site_url('dashboard/edit_detail'); ?>" method="post">
		<div class="box-body">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input class="form-control" placeholder="Name" name="web_name" type="text" value="<?php echo $key->website_name; ?>">
				</div>
				<br />
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<input class="form-control" placeholder="Email" name="web_email" type="email" value="<?php echo $key->website_email; ?>">
				</div>
				<br />
				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control" name="web_desc"><?php echo $key->website_description; ?></textarea>
				</div>
				<div class="form-group">
					<label>Icon</label>
					<p>
						<a href="javascript:void()"><img src="<?php echo base_url('res/dist/images/15-1.jpg'); ?>" width="100" height="100"></a>
						<input type="hidden" name="" accept="image/*">
					</p>
				</div>
		</div><!-- /.box-body -->
			<?php } ?>
		<div class="box-footer">
			<button type="submit" class="btn btn-primary pull-right">Edit</button>
		</div>
	</form>
</div>