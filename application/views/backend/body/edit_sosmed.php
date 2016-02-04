<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title">Edit Social Media</h3>
		</div><!-- /.box-header -->
	<!-- form start -->
	<form role="form" method="post" action="<?php echo site_url('dashboard/result_edit_sosmed'); ?>">
	<?php 
		foreach ($data_sosmed as $key) {
	 ?>
		<input type="hidden" name="id" value="<?php echo $key->id; ?>">
		<div class="box-body">
			<div class="form-group">
				<label>Icon</label>
				<select class="form-control" style="font-family: 'FontAwesome', Arial;" name="icon" required>
					<option disabled="" selected="">--Choose One--</option>
					<option value="fa fa-facebook" <?php echo ($key->icon == 'fa fa-facebook') ? "selected" : ""; ?>>&#xf09a; &nbsp; fa fa-facebook</p></option>
					<option value="fa fa-twitter" <?php echo ($key->icon == 'fa fa-twitter') ? "selected" : ""; ?>>&#xf099; &nbsp; fa fa-twitter</p></option>
					<option value="fa fa-pinterest" <?php echo ($key->icon == 'fa fa-pinterest') ? "selected" : ""; ?>>&#xf0d2; &nbsp; fa fa-pinterest</p></option>
					<option value="fa fa-instagram" <?php echo ($key->icon == 'fa fa-instagram') ? "selected" : ""; ?>>&#xf16d; &nbsp; fa fa-instagram</p></option>
					<option value="fa fa-github" <?php echo ($key->icon == 'fa fa-github') ? "selected" : ""; ?>>&#xf09b; &nbsp; fa fa-github</p></option>
					<option value="fa fa-google-plus" <?php echo ($key->icon == 'fa fa-google-plus') ? "selected" : ""; ?>>&#xf0d5; &nbsp; fa fa-google-plus</p></option>
					<option value="fa fa-youtube" <?php echo ($key->icon == 'fa fa-youtube') ? "selected" : ""; ?>>&#xf167; &nbsp; fa fa-youtube</p></option>
					<option value="fa fa-stack-overflow" <?php echo ($key->icon == 'fa fa-stack-overflow') ? "selected" : ""; ?>>&#xf16c; &nbsp; fa fa-stack-overflow</p></option>
					<option value="fa fa-tumblr" <?php echo ($key->icon == 'fa fa-tumblr') ? "selected" : ""; ?>>&#xf173; &nbsp; fa fa-tumblr</p></option>
					<option value="fa fa-skype" <?php echo ($key->icon == 'fa fa-skype') ? "selected" : ""; ?>>&#xf17e; &nbsp; fa fa-skype</p></option>
					<option value="fa fa-linkedin" <?php echo ($key->icon == 'fa fa-linkedin') ? "selected" : ""; ?>>&#xf0e1; &nbsp; fa fa-linkedin</p></option>
					<option value="fa fa-soundcloud" <?php echo ($key->icon == 'fa fa-soundcloud') ? "selected" : ""; ?>>&#xf1be; &nbsp; fa fa-soundcloud</p></option>
					<option value="fa fa-rss" <?php echo ($key->icon == 'fa fa-rss') ? "selected" : ""; ?>>&#xf09e; &nbsp; fa fa-rss</p></option>
					<option value="fa fa-envelope" <?php echo ($key->icon == 'fa fa-envelope') ? "selected" : ""; ?>>&#xf0e0; &nbsp; fa fa-envelope</p></option>
				</select>
			</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input class="form-control" id="title" placeholder="Title" type="text" name="title" value="<?php echo $key->title; ?>">
			</div>
			<div class="form-group">
				<label for="url">URL</label>
				<input class="form-control" id="url" placeholder="https://" type="text" name="url" value="<?php echo $key->url; ?>">
			</div>
		</div><!-- /.box-body -->
		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Edit</button>
		</div>
	<?php } ?>
	</form>
	</div>
</section>