<?php 
if ($this->session->flashdata('ses_content')){ 
 ?>
<div class="callout callout-success lead" id="ses_content"><?php echo $this->session->flashdata('ses_content'); ?></div>
<?php } ?>
<?php 
if ($this->session->flashdata('del_content')){ 
 ?>
<div class="callout callout-success lead" id="del_content"><?php echo $this->session->flashdata('del_content'); ?></div>
<?php } ?>
<?php if ($this->session->flashdata('edit_content')) {
?>
<div class="callout callout-success lead" id="edit_content"><?php echo $this->session->flashdata('edit_content'); ?></div>
<?php } ?>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">List Content</h3>
					<div class="box-tools">
						<form method="get" action="<?php echo site_url('dashboard/search_content'); ?>">
							<div class="input-group">
								<input name="q" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search" type="text">
								<div class="input-group-btn">
									<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div><!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered">
						<tr>
							<th>Kategory</th>
							<th>Image</th>
							<th>Judul</th>
							<th>Isi</th>
							<th>Posted</th>
							<th>Update at</th>
							<th>Action</th>
						</tr>
					<?php 
						foreach ($content as $asd) {
					 ?>
						<tr>
							<td><?php echo $asd->nama_kat; ?></td>
							<td><img src="<?php echo base_url($asd->path); ?>" alt="<?php echo $asd->image; ?>" width="100" height="100"></td>
							<td><?php echo $asd->judul; ?></td>
							<td><?php echo word_limiter(html_entity_decode($asd->isi), 40); ?></td>
							<td><?php echo $asd->posted_by; ?></td>
							<td><?php echo $asd->update_at; ?></td>
							<td width="175">
								<a href="#" class="btn btn-warning" data-toggle="modal" data-target="<?php echo "#editContent_" . $asd->id; ?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;
								<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete_content"><i class="fa fa-trash"></i> Delete</a>
							</td>
						</tr>
					<?php } ?>
					</table>
				</div><!-- /.box-body -->
				<div class="box-footer clearfix">
					<ul class="pagination pagination-sm no-margin pull-left">
						<a href="<?php echo site_url('dashboard/new_content'); ?>" class="btn btn-block btn-primary">Add New Content</a>
					</ul>
					<?php echo $paging; ?>
				</div>
			</div><!-- /.box -->
		</div>
	</div>
</section>


<!-- Modal Edit -->
<?php foreach ($content as $asd) {
?>
<div class="modal fade" id="<?php echo "editContent_".$asd->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Edit</h4>
			</div>
			<form action="<?php echo site_url('dashboard/editContent/id/'.$asd->id); ?>" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
					<input type="hidden" name="id" value="<?php echo $asd->id; ?>">
						<select class="form-control" name="kategory" required>
							<option disabled selected>--Pilih Kategory--</option>
							<?php 
                            	foreach ($data as $key) {
	                         ?>
		                	<option value="<?php echo $key->id; ?>"><?php echo $key->nama; ?></option>
	                        <?php } ?>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="judul" placeholder="Judul" value="<?php echo $asd->judul; ?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="isi" placeholder="Isi"><?php echo $asd->isi; ?></textarea>
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

<!-- Modal Hapus -->
<div class="modal" id="delete_content" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Delete?</h4>
			</div>
			<div class="modal-body">
				<h3>Are you sure want to delete this Content?</h3>
			</div>
			<div class="modal-footer">
				<form action="<?php echo site_url('dashboard/delete_content/id/'.$asd->id); ?>">	
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
					<button type="submit" class="btn btn-primary">Yes</button>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
	$('document').ready(function() {
		$('#edit_content ').fadeOut(3000);
		$('#del_content ').fadeOut(3000);
		$('#ses_content ').fadeOut(3000);
	});
</script>