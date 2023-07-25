<?php 
	include "../../config/koneksi.php";
	$id_barang = $_POST['nama_barang'];
	$id_pelanggan = $_POST['nama_pelanggan'];
	$id_kasir = $_POST['nama_kasir'];
	$jumlah_barang = $_POST['jumlah_barang'];
	$total_harga = $_POST['total_harga'];



	$sql = "INSERT INTO 
			pembelian (id_beli, id_barang, id_pelanggan, id_kasir, tgl_beli,jumlah_barang, total_harga)
			VALUES    (0,       '$id_barang','$id_pelanggan','$id_kasir',current_time(),'$jumlah_barang','$total_harga')";

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