<h2>Ini Tulisan yg ada di halaman about</h2>
<div class="box box-solid box-primary">
	<div class="box-header">
		<?php 
			foreach ($website->result() as $key) {
		 ?>
		<h3 class="box-title"><?php echo $title." of ".$key->website_name; ?></h3>
	</div>
	<form action="<?php echo site_url('dashboard/edit_about'); ?>" method="post">
		<div class="box-body">
				<div class="form-group">
					<textarea class="form-control" id="editor1" name="about"><?php echo $key->page_about; ?></textarea>
				</div>
		</div><!-- /.box-body -->
			<?php } ?>
		<div class="box-footer">
			<button type="submit" class="btn btn-primary pull-right">Edit</button>
		</div>
	</form>
</div>