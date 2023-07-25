<?php 
	include "../../config/koneksi.php";
	//$id_supplier = $_POST['id_supplier'];
	$nama_supplier = $_POST['nama_suplier'];
	$alamat = $_POST['alamat'];


	


	$sql = "INSERT INTO suplier (id_suplier, nama_suplier,alamat) VALUES 
	(0,'$nama_supplier','$alamat')";

	$insert = mysqli_query($kon, $sql);

	if ($insert && (mysqli_errno($kon) == 0)) {
		echo "<script>alert('data berhasil di simpan');
				window.location.href='../../read/data_suplier.php';
				</script>";
	}else{
		echo "Error Code : ". mysqli_errno($kon) .PHP_EOL;
	echo "Messg : ".mysqli_error($kon).PHP_EOL;


	}
 ?>