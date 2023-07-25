	<?php 
	include '../../config/koneksi.php';

	echo "<br>";
	$id = $_GET['id'];
	$tbl = $_GET['tbl'];
	$whr = $_GET['whr'];
	$redir = "";

	if ($whr == 'id_kategori') {
		$redir = "data_kategori";
	}
	else if ($whr == 'id_barang') {
		$redir = "data_barang";
	}
	else if ($whr == 'id_kasir') {
		$redir = "data_kasir";
	}
	else if ($whr == 'id_suplier') {
		$redir = "data_supplier";
	}
	else if ($whr == 'id_masuk') {
		$redir = "data_barang_masuk";
	}
	else if ($whr == 'id_pelanggan') {
		$redir = "data_pelanggan";
	}
	else if ($whr == 'id_beli') {
		$redir = "data_pembelian";
	}

	$sql = "DELETE FROM $tbl WHERE $whr = '$id'";

	$del = mysqli_query($kon, $sql);

	//javascrip redirect
	if($del && mysqli_errno($kon) == 0 ){
		echo "<script>alert('Data Berhasil di Hapus ');
		window.location.href='../../read/".$redir.".php';</script>";
	}else{
		echo mysqli_errno($kon) . ": " . mysqli_error($kon) . "\n";
		
	}


 ?>