<h3><?php echo $this->session->flashdata('cari'); ?></h3>
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
						foreach ($result as $asd) {
					 ?>
						<tr>
							<td><?php echo $asd->nama_kat; ?></td>
							<td><img src="<?php echo base_url($asd->path); ?>" alt="<?php echo $asd->image; ?>" width="100" height="100"></td>
							<td><?php echo $asd->judul; ?></td>
							<td><?php echo $asd->isi; ?></td>
							<td><?php echo $asd->posted_by; ?></td>
							<td><?php echo $asd->update_at; ?></td>
							<td width="175">
								<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#editContent"><i class="fa fa-edit"></i> Edit</a>&nbsp;
								<a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
							</td>
						</tr>
					<?php } ?>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</div>
</section>