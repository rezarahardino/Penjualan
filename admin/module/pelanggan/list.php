<div class="col-md-9">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title"><i class="glyphicon glyphicon-list"></i> List Pelanggan</div>
		</div>
		<div class="panel-body">
			<a href="?addPelanggan" class="btn btn-sm btn-primary f_list"><i class="glyphicon glyphicon-plus"></i> Add Pelanggan</a>
			<form class="navbar-form navbar-right" method="post" action="?pelanggan">
				<div class="form-group">
         			<input type="text" class="form-control input-sm" placeholder="Search ..." name="search">
        		</div>
        		<button type="submit" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form>

			<?php 
				if (isset($_GET['addPelangganSuccess'])) {
					echo "<div class='alert alert-success'>Success, Add Pelanggan</div>";
				} elseif (isset($_GET['addPelangganFail'])) {
					echo "<div class='alert alert-danger'>Failed, Add Pelanggan</div>";
				} elseif (isset($_GET['editPelangganSuccess'])) {
					echo "<div class='alert alert-success'>Success, Edit Pelanggan</div>";
				} elseif (isset($_GET['editPelangganFail'])) {
					echo "<div class='alert alert-danger'>Failed, Edit Pelanggan</div>";
				} elseif (isset($_GET['deletePelangganSuccess'])) {
					echo "<div class='alert alert-success'>Success, Delete Pelanggan</div>";
				} elseif (isset($_GET['deletePelangganFail'])) {
					echo "<div class='alert alert-danger'>Failed, Delete Pelanggan</div>";
				}
			?>
				
			 <table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			 	<thead>
			 		<tr>
			 			<th>No</th>
			 			<th>Nama</th>
			 			<th>No Identitas (KTP)</th>
			 			<th>Alamat</th>
			 			<th>Action</th>
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<tr>
			 			<td>1</td>
			 			<td>Rully Eka Mulyana</td>
			 			<td>123456789012</td>
			 			<td>Bandung</td>
			 			<td>
			 				<a href="?editPelanggan" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-edit"></i> Edit</a>
				 			<a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>
			 			</td>
			 		</tr>
			 	</tbody>
			 </table>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable({
	    	"lengthChange": false,
	  		"searching": false
	  	});
	});
</script>
