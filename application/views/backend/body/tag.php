<?php 
	if ($this->session->flashdata('del_tag')) {
 ?>
<div class="callout callout-success lead"><?php echo $this->session->flashdata('del_tag'); ?></div>
<?php } ?>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">List Tag</h3>
				</div><!-- /.box-header -->
				<div class="box-body">
					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Title</th>
							<th>SEO</th>
							<th>Action</th>
						</tr>
					<?php 
						$no = 0;
						foreach ($tag->result() as $key) {
							$no++;
					 ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $key->tag_title; ?></td>
							<td><?php echo $key->tag_seo; ?></td>
							<td width="100">
								<a href="#" class="btn btn-warning"><span class="fa fa-edit"></span></a>
								<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete_contact"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
					<?php } ?>
					</table>
				</div><!-- /.box-body -->
				<div class="box-footer">
					<a href="#" class="btn btn-primary"><i class="fa fa-plus"></i></a>
				</div>
			</div><!-- /.box -->
		</div>
	</div>
</section>