<div class="col-md-9">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title"><i class="glyphicon glyphicon-list"></i> List Barang</div>
		</div>
		<div class="panel-body">
			<a href="?addBarang" class="btn btn-sm btn-primary f_list"><i class="glyphicon glyphicon-plus"></i> Add Barang</a>
			<form class="navbar-form navbar-right" method="post" action="?barang">
        		<div class="form-group">
         			<input type="text" class="form-control input-sm" placeholder="Search ..." name="search">
        		</div>
        		<button type="submit" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i></button>
      		</form>

			<?php 
				if (isset($_GET['addBarangSuccess'])) {
					echo "<div class='alert alert-success'>Success, Add Barang</div>";
				} elseif (isset($_GET['addBarangFail'])) {
					echo "<div class='alert alert-danger'>Failed, Add Barang</div>";
				} elseif (isset($_GET['editBarangSuccess'])) {
					echo "<div class='alert alert-success'>Success, Edit Barang</div>";
				} elseif (isset($_GET['editBarangFail'])) {
					echo "<div class='alert alert-danger'>Failed, Edit Barang</div>";
				} elseif (isset($_GET['deleteBarangSuccess'])) {
					echo "<div class='alert alert-success'>Success, Delete Barang</div>";
				} elseif (isset($_GET['deleteBarangFail'])) {
					echo "<div class='alert alert-danger'>Failed, Delete Barang</div>";
				}
			?>
				
			 <table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			 	<thead>
			 		<tr>
			 			<th>No</th>
			 			<th>Nama Barang</th>
			 			<th>Harga</th>
			 			<th>Action</th>
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<tr>
			 			<td>1</td>
			 			<td>Yamaha 250 R</td>
			 			<td>15000000</td>
			 			<td>
			 				<a href="?editBarang" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-edit"></i> Edit</a>
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

