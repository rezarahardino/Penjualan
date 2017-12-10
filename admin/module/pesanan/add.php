<div class="col-md-9">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title"><i class="glyphicon glyphicon-plus"></i> Add Pesanan</div>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form" action="?savePesanan" method="post">
				<div class="form-group">
					<label for="pesanan" class="col-md-2 control-label">No Pesanan</label>
					<div class="col-md-10">
						<input type="text" name="pesanan" class="form-control" id="pesanan" placeholder="No Pesanan">
					</div>
				</div>
				<div class="form-group">
					<label for="identitas" class="col-md-2 control-label">No Identitas</label>
					<div class="col-md-10">
						<input type="text" name="identitas" class="form-control" id="identitas" placeholder="No Identitas Staff">
					</div>
				</div>
				<div class="form-group">
					<label for="barang" class="col-md-2 control-label">Nama Barang</label>
					<div class="col-md-10">
						<input type="text" name="barang" class="form-control" id="barang" placeholder="Nama Barang">
					</div>
				</div>
				<div class="form-group">
					<label for="jumlah" class="col-md-2 control-label">Jumlah Barang</label>
					<div class="col-md-10">
						<input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah Barang">
					</div>
				</div>
				<div class="form-group">
					<label for="tanggal" class="col-md-2 control-label">Tanggal Pesanan</label>
					<div class="col-md-10">
						<input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="dd/mm/yyyy">
					</div>
				</div>
				<div class="form-group">
					<label for="harga" class="col-md-2 control-label">Harga</label>
					<div class="col-md-10">
						<input type="text" name="harga" class="form-control" id="harga" placeholder="Harga">
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
