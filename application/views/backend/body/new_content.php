<section class="content">
	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title">New Social Media</h3>
		</div><!-- /.box-header -->
	<!-- form start -->
	<form role="form" method="post" action="<?php echo site_url('dashboard/add_content'); ?>" enctype="multipart/form-data">
		<div class="box-body">
			<div class="form-group">
				<label>Title</label>
				<input class="form-control" placeholder="Title" type="text" name="judul" required>
			</div>
			<div class="form-group">
				<label>Kategory</label>
				<select class="form-control" name="kategory" required>
				<?php 
					foreach ($kategory as $key) {
				?>	
					<option value="<?php echo $key->id; ?>"><?php echo $key->nama; ?></option>
				<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label>Tag</label>
				<select class="form-control select2" multiple="multiple" data-placeholder="Select a Tag" name="tag[]" required>
                      <?php 
                      	foreach ($tag->result() as $key) {
                       ?>
                      <option value="<?= $key->tag_seo ?>"><?php echo $key->tag_title ?></option>
                      <?php } ?>
                </select>
			</div>
			<div class="form-group">
				<label>Cover Post</label>
				<input class="form-control" type="file" name="userfile" required>
			</div>
			<div class="form-group">
          		<label>Write Something</label>
                <textarea name="isi" id="editor1" placeholder="Isi" required></textarea>
			</div>
		</div><!-- /.box-body -->
		<div class="box-footer">
			<button type="submit" class="btn btn-primary">Add</button>
		</div>
	</form>
	</div>
</section>