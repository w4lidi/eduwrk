<?php 
	include "../../config/koneksi.php";
	$nama_kategori = $_POST['nama_kategori'];

	$sql = "INSERT INTO kategori_barang (id_kategori, nama_kategori) VALUES 
	(0,'$nama_kategori')";

	$insert = mysqli_query($kon, $sql);

	if ($insert && (mysqli_errno($kon) == 0)) {
		echo "<script>alert('data berhasil di simpan');
				window.location.href='../../read/data_kategori.php';
				</script>";
	}else{
		echo "Error Code : ". mysqli_errno($kon) .PHP_EOL;
	echo "Messg : ".mysqli_error($kon).PHP_EOL;


	}
 ?>