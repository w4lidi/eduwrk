<?php 
	include "../../config/koneksi.php";
	$id_kasir = $_POST['id_kasir'];
	$nama_kasir = $_POST['nama_kasir'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];

	


	$sql = "INSERT INTO kasir (id_kasir, nama_kasir,alamat,no_hp) VALUES 
	(0,'$nama_kasir','$alamat','$no_hp')";

	$insert = mysqli_query($kon, $sql);

	if ($insert && (mysqli_errno($kon) == 0)) {
		echo "<script>alert('data berhasil di simpan');
				window.location.href='../../read/data_kasir.php';
				</script>";
	}else{
		echo "Error Code : ". mysqli_errno($kon) .PHP_EOL;
	echo "Messg : ".mysqli_error($kon).PHP_EOL;


	}
 ?>