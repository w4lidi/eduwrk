<?php 
	include "../../config/koneksi.php";
	$id_pelanggan = $_POST['id_pelanggan'];
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];

	


	$sql = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan,alamat,no_hp) VALUES 
	(0,'$nama_pelanggan','$alamat','$no_hp')";

	$insert = mysqli_query($kon, $sql);

	if ($insert && mysqli_errno($kon) == 0) {
		echo "<script>alert('Data Berhasil di Simpan');
				window.location.href='../../read/data_pelanggan.php';
				</script>";
	}else{
		echo mysqli_errno($kon) . ": " . mysqli_error($kon) . "\n";
	}
 ?>