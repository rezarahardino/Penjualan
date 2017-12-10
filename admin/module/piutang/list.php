<div class="col-md-9">
	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title"><i class="glyphicon glyphicon-list"></i> List Piutang</div>
		</div>
		<div class="panel-body">
			<a href="?addPelanggan" class="btn btn-sm btn-primary f_list"><i class="glyphicon glyphicon-print"></i> Print Piutang</a>
			<form class="navbar-form navbar-right" method="post" action="?piutang">
        		<div class="form-group">
         			<input type="text" class="form-control input-sm" placeholder="Search ..." name="search">
        		</div>
        		<button type="submit" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i></button>
      		</form>

			<?php 
				if (isset($_GET['addPiutangSuccess'])) {
					echo "<div class='alert alert-success'>Success, Add Piutang</div>";
				} elseif (isset($_GET['addPiutangFail'])) {
					echo "<div class='alert alert-danger'>Failed, Add Piutang</div>";
				} 
			?>
				
			 <table  cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			 	<thead>
			 		<tr>
			 			<th>No</th>
			 			<th>No identitas (Staf Penjual)</th>
			 			<th>No Faktur</th>
			 			<th>No Piutang</th>
			 			<th>Tanggal Piutang</th>
			 			<th>Total Piutang</th>
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<tr>
			 			<td>1</td>
			 			<td>123456</td>
			 			<td>979274742</td>
			 			<td>395395344</td>
			 			<td>2017/11/12</td>
			 			<td>15000000</td>
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

