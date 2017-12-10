<div class="col-md-9">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title"><i class="glyphicon glyphicon-list"></i> List Pesanan</div>
		</div>
		<div class="panel-body">
			<a href="?addPesanan" class="btn btn-sm btn-primary f_list"><i class="glyphicon glyphicon-plus"></i> Add Pesanan</a>
			<form class="navbar-form navbar-right" method="post" action="?pesanan">
        		<div class="form-group">
         			<input type="text" class="form-control input-sm" placeholder="Search ..." name="search">
        		</div>
        		<button type="submit" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i></button>
      		</form>

			<?php 
				if (isset($_GET['addPesananSuccess'])) {
					echo "<div class='alert alert-success'>Success, Add Pesanan</div>";
				} elseif (isset($_GET['addPesananFail'])) {
					echo "<div class='alert alert-danger'>Failed, Add Pesanan</div>";
				} elseif (isset($_GET['editPesananSuccess'])) {
					echo "<div class='alert alert-success'>Success, Edit Pesanan</div>";
				} elseif (isset($_GET['editPesananFail'])) {
					echo "<div class='alert alert-danger'>Failed, Edit Pesanan</div>";
				} elseif (isset($_GET['deletePesananSuccess'])) {
					echo "<div class='alert alert-success'>Success, Delete Pesanan</div>";
				} elseif (isset($_GET['deletePesananFail'])) {
					echo "<div class='alert alert-danger'>Failed, Delete Pesanan</div>";
				}
			?>
				
			 <table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			 	<thead>
			 		<tr>
			 			<th>No</th>
			 			<th>No Pesanan</th>
			 			<th>No identitas</th>
			 			<th>Nama Barang</th>
			 			<th>Jumlah Barang</th>
			 			<th>Tanggal Pesanan</th>
			 			<th>Harga</th>
			 			<th>Action</th>
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<tr>
			 			<td>1</td>
			 			<td>123456</td>
			 			<td>92482842901</td>
			 			<td>Yamaha 250 R</td>
			 			<td>1</td>
			 			<td>2017/12/01</td>
			 			<td>15000000</td>
			 			<td>
			 				<a href="?editPesanan" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-edit"></i> Edit</a>
				 			<a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete
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

