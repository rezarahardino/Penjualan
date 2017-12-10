<div class="col-md-9">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title"><i class="glyphicon glyphicon-list"></i> List Kas Masuk</div>
		</div>
		<div class="panel-body">
			<a href="?addKasmasuk" class="btn btn-sm btn-primary f_list"><i class="glyphicon glyphicon-plus"></i> Add Kas Masuk</a>
			<form class="navbar-form navbar-right" method="post" action="?kasmasuk">
        		<div class="form-group">
         			<input type="text" class="form-control input-sm" placeholder="Search ..." name="search">
        		</div>
        		<button type="submit" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i></button>
      		</form>

			<?php 
				if (isset($_GET['addKasmasukSuccess'])) {
					echo "<div class='alert alert-success'>Success, Add Kas Masuk</div>";
				} elseif (isset($_GET['addKasmasukFail'])) {
					echo "<div class='alert alert-danger'>Failed, Add Kas Masuk</div>";
				} elseif (isset($_GET['editKasmasukSuccess'])) {
					echo "<div class='alert alert-success'>Success, Edit Kas Masuk</div>";
				} elseif (isset($_GET['editKasmasukFail'])) {
					echo "<div class='alert alert-danger'>Failed, Edit Kas Masuk</div>";
				} elseif (isset($_GET['deleteKasmasukSuccess'])) {
					echo "<div class='alert alert-success'>Success, Delete Kas Masuk</div>";
				} elseif (isset($_GET['deleteKasmasukFail'])) {
					echo "<div class='alert alert-danger'>Failed, Delete Kas Masuk</div>";
				}
			?>
				
			 <table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			 	<thead>
			 		<tr>
			 			<th>No</th>
			 			<th>No identitas (Staf Penjual)</th>
			 			<th>No Tagihan</th>
			 			<th>No Transfer</th>
			 			<th>Tanggal Transfer</th>
			 			<th>Total Tagihan</th>
			 			<th>Action</th>
			 		</tr>
			 	</thead>
			 	<tbody>
			 			<td>1</td>
			 			<td>123456</td>
			 			<td>979274742</td>
			 			<td>395395344</td>
			 			<td>2017/11/12</td>
			 			<td>15000000</td>
			 			<td>
			 				<a href="?editKasmasuk" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-edit"></i> Edit</a>
				 			<a href="#" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete
				 		</td>
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
