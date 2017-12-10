<!DOCTYPE html>
<html>
<head>
	<title>Penjualan</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<?php 
				session_start(); 	
				if (empty($_SESSION['username'])) {
					header('location:login.php?validate');
				} 	

				include 'components/header.php';
				include 'components/menu.php';	
			?>	

			<?php  
				// pelanggan
				if (isset($_GET['pelanggan'])) {
					include 'module/pelanggan/list.php';
				} elseif (isset($_GET['addPelanggan'])) {
					include 'module/pelanggan/add.php';
				} elseif (isset($_GET['editPelanggan'])) {
					include 'module/pelanggan/edit.php';
				} 

				// pesanan
				 elseif (isset($_GET['pesanan'])) {
					include 'module/pesanan/list.php';
				} elseif (isset($_GET['addPesanan'])) {
					include 'module/pesanan/add.php';
				} elseif (isset($_GET['editPesanan'])) {
					include 'module/pesanan/edit.php';
				} 

				// barang
				 elseif (isset($_GET['barang'])) {
					include 'module/barang/list.php';
				} elseif (isset($_GET['addBarang'])) {
					include 'module/barang/add.php';
				} elseif (isset($_GET['editBarang'])) {
					include 'module/barang/edit.php';
				} 

				// kas masuk
				 elseif (isset($_GET['kasmasuk'])) {
					include 'module/kasmasuk/list.php';
				} elseif (isset($_GET['addKasmasuk'])) {
					include 'module/kasmasuk/add.php';
				} elseif (isset($_GET['editKasmasuk'])) {
					include 'module/kasmasuk/edit.php';
				} 

				// penagihan
				 elseif (isset($_GET['penagihan'])) {
					include 'module/penagihan/list.php';
				} 

				// piutang
				 elseif (isset($_GET['piutang'])) {
					include 'module/piutang/list.php';
				} 

				// dokumen
				 elseif (isset($_GET['dokumen'])) {
					include 'module/dokumen/list.php';
				} 

				// Auth
				  elseif (isset($_GET['act_logout'])) {
					include 'act_logout.php';
				} 

				else {
					include 'components/content.php';	
				}
			?>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<?php 
				include 'components/footer.php';	
			?>
		</div>
	</div>
</body>
</html>