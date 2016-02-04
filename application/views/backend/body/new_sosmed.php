<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title">New Social Media</h3>
		</div><!-- /.box-header -->
	<!-- form start -->
	<form role="form" method="post" action="<?php echo site_url('dashboard/add_sosmed'); ?>">
		<div class="box-body">
			<div class="form-group">
				<label>Icon</label>
				<select class="form-control" style="font-family: 'FontAwesome', Arial;" name="icon">
					<option disabled="" selected="">--Choose One--</option>
					<option value="fa fa-facebook">&#xf09a; &nbsp; fa fa-facebook</p></option>
					<option value="fa fa-twitter">&#xf099; &nbsp; fa fa-twitter</p></option>
					<option value="fa fa-pinterest">&#xf0d2; &nbsp; fa fa-pinterest</p></option>
					<option value="fa fa-instagram">&#xf16d; &nbsp; fa fa-instagram</p></option>
					<option value="fa fa-github">&#xf09b; &nbsp; fa fa-github</p></option>
					<option value="fa fa-google-plus">&#xf0d5; &nbsp; fa fa-google-plus</p></option>
					<option value="fa fa-youtube">&#xf167; &nbsp; fa fa-youtube</p></option>
					<option value="fa fa-stack-overflow">&#xf16c; &nbsp; fa fa-stack-overflow</p></option>
					<option value="fa fa-tumblr">&#xf173; &nbsp; fa fa-tumblr</p></option>
					<option value="fa fa-skype">&#xf17e; &nbsp; fa fa-skype</p></option>
					<option value="fa fa-linkedin">&#xf0e1; &nbsp; fa fa-linkedin</p></option>
					<option value="fa fa-soundcloud">&#xf1be; &nbsp; fa fa-soundcloud</p></option>
					<option value="fa fa-rss">&#xf09e; &nbsp; fa fa-rss</p></option>
					<option value="fa fa-envelope">&#xf0e0; &nbsp; fa fa-envelope</p></option>
				</select>
			</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input class="form-control" id="title" placeholder="Title" type="text" name="title">
			</div>
			<div class="form-group">
				<label for="url">URL</label>
				<input class="form-control" id="url" placeholder="https://" type="text" name="url">
			</div>
		</div><!-- /.box-body -->
		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Add</button>
		</div>
	</form>
	</div>
</section>