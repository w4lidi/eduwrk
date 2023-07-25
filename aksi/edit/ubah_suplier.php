<?php 
	include "../../config/koneksi.php";
	$id_suplier= $_POST['id_suplier'];
	//$old_kategori= $_POST['old_kategori'];
	$nama_suplier = $_POST['nama_suplier'];
	$alamat = $_POST['alamat'];
	

	$sql = "UPDATE suplier SET 
	id_suplier='$id_suplier',
	nama_suplier ='$nama_suplier',
	alamat = '$alamat'
	 WHERE id_suplier = '$id_suplier'";

	$insert = mysqli_query($kon, $sql);

	 echo mysqli_errno($kon) .  ":" .mysqli_error($kon);

	if ($insert && (mysqli_errno($kon) == 0)) {
		echo "<script>alert('data berhasil di simpan');
				window.location.href='../../read/data_supplier.php';
				</script>";
	}else{
		echo "Error Code : ". mysqli_errno($kon) .PHP_EOL;
	echo "Messg : ".mysqli_error($kon).PHP_EOL;


	}
 ?>