<?php 
	include "../../config/koneksi.php";
	$id_masuk= $_POST['id_masuk'];
	$id_suplier = $_POST['suplier'];
	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['id_barang'];
	
	$jumlah = $_POST['jumlah'];



	$sql = "UPDATE barang_masuk SET 
	id_barang = '$id_barang',
	id_suplier = '$id_suplier',
	jumlah = '$jumlah' 
	WHERE id_masuk = '$id_masuk'";

	$insert = mysqli_query($kon, $sql);

	echo "Kode error: ".mysqli_error($kon).PHP_EOL;

	if ($insert && (mysqli_errno($kon) == 0)) {
		echo "<script>alert('data berhasil di simpan');
				window.location.href='../../read/data_barang_masuk.php';
				</script>";
	}else{
		echo "Error Code : ". mysqli_errno($kon) .PHP_EOL;
	echo "Messg : ".mysqli_error($kon).PHP_EOL;


	}



 ?>