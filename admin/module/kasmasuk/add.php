<div class="col-md-9">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title"><i class="glyphicon glyphicon-plus"></i> Add Kas Masuk</div>
		</div>
		<div class="panel-body">
			<form class="form-horizontal" role="form" action="?saveKasmasuk" method="post">
				<div class="form-group">
					<label for="identitas" class="col-md-2 control-label">No Identitas (Staff)</label>
					<div class="col-md-10">
						<input type="text" name="identitas" class="form-control" id="identitas" placeholder="No Identitas Staff">
					</div>
				</div>
				<div class="form-group">
					<label for="tagihan" class="col-md-2 control-label">No Tagihan</label>
					<div class="col-md-10">
						<input type="text" name="tagihan" class="form-control" id="tagihan" placeholder="No Tagihan">
					</div>
				</div>
				<div class="form-group">
					<label for="transfer" class="col-md-2 control-label">No Transfer</label>
					<div class="col-md-10">
						<input type="text" name="transfer" class="form-control" id="transfer" placeholder="No Transfer">
					</div>
				</div>
				<div class="form-group">
					<label for="tanggal" class="col-md-2 control-label">Tanggal Transfer</label>
					<div class="col-md-10">
						<input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="mm/dd/yyyy">
					</div>
				</div>
				<div class="form-group">
					<label for="total" class="col-md-2 control-label">Total Tagihan</label>
					<div class="col-md-10">
						<input type="text" name="total" class="form-control" id="total" placeholder="Total Tagihan">
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
