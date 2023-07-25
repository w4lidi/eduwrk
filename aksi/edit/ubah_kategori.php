<?php 
	include "../../config/koneksi.php";
	$id_kategori= $_POST['id_kategori'];
	$nama_kategori = $_POST['nama_kategori'];
	$tbl = $_POST['tbl'];

	$sql = "UPDATE $tbl SET nama_kategori ='$nama_kategori' WHERE id_kategori = '$id_kategori'";

	$insert = mysqli_query($kon, $sql);

	 echo mysqli_errno($kon) .  ":" .mysqli_error($kon);

	if ($insert && mysqli_errno($kon) == 0) {
		echo "<script>alert('Data Berhasil di Simpan');
		window.location.href='../../read/data_kategori.php';
		</script>";
	}else{
		echo mysqli_errno($kon) .  " : " .mysqli_error($kon);
	}
 ?>