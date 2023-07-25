<?php 
	include "../../config/koneksi.php";
	$id_kasir= $_POST['id_kasir'];
	$nama_kasir = $_POST['nama_kasir'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	

	$sql = "UPDATE kasir SET 
	id_kasir='$id_kasir',
	nama_kasir ='$nama_kasir',
	alamat = '$alamat',
	no_Hp = '$no_hp'
	 WHERE id_kasir = '$id_kasir'";

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