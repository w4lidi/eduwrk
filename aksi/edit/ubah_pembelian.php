<?php 
	include "../../config/koneksi.php";
	$id_beli= $_POST['id_beli'];
	$id_kasir = $_POST['nama_kasir'];
	$id_barang = $_POST['nama_barang'];
	$id_pelanggan = $_POST['nama_pelanggan'];
	$total_harga = $_POST['total_harga'];
	$jumlah_barang = $_POST['jumlah_barang'];


	$sql = "UPDATE pembelian SET 
	id_barang = '$id_barang',
	id_kasir = '$id_kasir',
	id_pelanggan = '$id_pelanggan',
	jumlah_barang = '$jumlah_barang', 
	total_harga = '$total_harga'
	WHERE id_beli = '$id_beli'";

	$insert = mysqli_query($kon, $sql);

	if ($insert && (mysqli_errno($kon) == 0)) {
		echo "<script>alert('data berhasil di simpan');
				window.location.href='../../read/data_pembelian.php';
				</script>";
	}else{
		echo "Error Code : ". mysqli_errno($kon) .PHP_EOL;
	echo "Messg : ".mysqli_error($kon).PHP_EOL;


	}



 ?>