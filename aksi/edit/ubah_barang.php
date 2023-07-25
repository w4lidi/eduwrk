<?php 
	include "../../config/koneksi.php";
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$exp = $_POST['exp'];
	$kategori = $_POST['kategori_barang'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];


	$sql = "UPDATE barang SET 
	id_kategori = '$kategori',
	nama_barang = '$nama_barang',
	stok = '$stok',
	tgl_exp = '$exp',
	harga = '$harga' 
	WHERE id_barang = '$id_barang'";

	$insert = mysqli_query($kon, $sql);



	if ($insert && (mysqli_errno($kon) == 0) ) {
		echo "<script>alert('data berhasil di simpan');
				window.location.href='../../read/data_barang.php';
				</script>";
	}else{
		echo "Error Code : ". mysqli_errno($kon) .PHP_EOL;
	echo "Messg : ".mysqli_error($kon).PHP_EOL;

	}



 ?>