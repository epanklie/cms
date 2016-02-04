<?php 
	if ($this->session->flashdata('del_contact')) {
 ?>
<div class="callout callout-success lead"><?php echo $this->session->flashdata('del_contact'); ?></div>
<?php } ?>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">List Contact</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered">
						<tr>
							<th>Nama</th>
							<th>Email</th>
							<th>Subject</th>
							<th>Pesan</th>
							<th>Action</th>
						</tr>
					<?php 
						foreach ($contact as $asd) {
					 ?>
						<tr>
							<td><?php echo $asd->nama; ?></td>
							<td><?php echo $asd->email; ?></td>
							<td><?php echo $asd->subject; ?></td>
							<td><?php echo $asd->pesan; ?></td>
							<td width="50">
								<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete_contact"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php } ?>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</div>
</section>

<!-- Modal Hapus -->
<div class="modal" id="delete_contact" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Delete?</h4>
			</div>
			<div class="modal-body">
				<h3>Are you sure want to delete this Message?</h3>
			</div>
			<div class="modal-footer">
				<form action="<?php echo site_url('dashboard/delete_contact/id/'.$asd->id); ?>">	
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">No</button>
					<button type="submit" class="btn btn-primary">Yes</button>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->