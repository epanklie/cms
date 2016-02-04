<?php 
if ($this->session->flashdata('action_sosmed')){ 
 ?>
<div class="callout callout-success lead" id="action_sosmed"><?php echo $this->session->flashdata('action_sosmed'); ?></div>
<?php } ?>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">List Social Media</h3>
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
							<th width="30">No</th>
							<th>Title</th>
							<th>URL</th>
							<th>Icon</th>
							<th>Action</th>
						</tr>
						<?php 
							$no = 0;
							foreach ($sosmed->result() as $key) {
								$no++;
						 ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td><?php echo $key->title; ?></td>
							<td><a href="<?php echo $key->url; ?>"><?php echo $key->url; ?></a></td>
							<td><span class="<?php echo $key->icon; ?>"></span></td>
							<td width="175">
								<a href="<?php echo site_url('dashboard/edit_sosmed/id/'.$key->id); ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>&nbsp;
								<a href="<?php echo site_url('dashboard/delete_sosmed/id/'.$key->id); ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
							</td>
						</tr>
						<?php } ?>
					</table>
				</div><!-- /.box-body -->
				<div class="box-footer clearfix">
					<ul class="pagination pagination-sm no-margin pull-left">
						<a href="<?php echo site_url('dashboard/new_sosmed'); ?>" class="btn btn-block btn-primary">Add New</a>
					</ul>
				</div>
			</div><!-- /.box -->
		</div>
	</div>
</section>

<script type="text/javascript">
	$('document').ready(function() {
		$('#action_sosmed ').fadeOut(3000);
	});
</script>