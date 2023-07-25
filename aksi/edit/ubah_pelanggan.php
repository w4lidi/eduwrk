<?php 
	include "../../config/koneksi.php";
	$id_pelanggan= $_POST['id_pelanggan'];
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];


	
	

	$sql = "UPDATE pelanggan SET 
	id_pelanggan='$id_pelanggan',
	nama_pelanggan ='$nama_pelanggan',
	alamat = '$alamat',
	no_Hp = '$no_hp'
	 WHERE id_pelanggan = '$id_pelanggan'";

	$insert = mysqli_query($kon, $sql);

	

	if ($insert && (mysqli_errno($kon) == 0)) {
		echo "<script>alert('data berhasil di simpan');
				window.location.href='../../read/data_pelanggan.php';
				</script>";
	}else{
		echo "Error Code : ". mysqli_errno($kon) .PHP_EOL;
	echo "Messg : ".mysqli_error($kon).PHP_EOL;


	}
 ?>