<div class="col-md-9">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title"><i class="glyphicon glyphicon-plus"></i> Add Pelanggan</div>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form" action="?savePelanggan" method="post">
				<div class="form-group">
					<label for="nama" class="col-md-2 control-label">Nama Pelanggan</label>
					<div class="col-md-10">
						<input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Pelanggan">
					</div>
				</div>
				<div class="form-group">
					<label for="identitas" class="col-md-2 control-label">No Identitas (KTP)</label>
					<div class="col-md-10">
						<input type="text" name="identitas" class="form-control" id="identitas" placeholder="No Identitas">
					</div>
				</div>
				<div class="form-group">
					<label for="alamat" class="col-md-2 control-label">Alamat</label>
					<div class="col-md-10">
						<textarea class="form-control" rows="5" id="alamat" name="alamat" placeholder="Alamat"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
