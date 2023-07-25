<?php 
	include "../../config/koneksi.php";
	$id_barang = $_POST['id_barang'];
	$suplier = $_POST['suplier'];
	$jumlah = $_POST['jumlah'];



	$sql = "INSERT INTO barang_masuk (id_masuk, id_barang, id_suplier, tgl_masuk,jumlah)
			VALUES(0,'$id_barang','$suplier',current_time(),'$jumlah')";

	$insert = mysqli_query($kon, $sql);

	if ($insert && (mysqli_errno($kon) == 0)) {
		echo "<script>alert('data berhasil di simpan');
				window.location.href='../../read/data_barang_masuk.php';
				</script>";
	}else{
		echo "Error Code : ". mysqli_errno($kon) .PHP_EOL;
	echo "Messg : ".mysqli_error($kon).PHP_EOL;


	}



 ?>