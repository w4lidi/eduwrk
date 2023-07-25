<?php 
	include '../utilitiy/global_var.php';
	$subTitle = "";

 ?>


	<?php 
	if ($_GET) {
		include '../config/koneksi.php';
		$id_kategori = $_GET['id_kategori'];
		$nama_kategori = $_GET['nama_kategori'];
		$btn_kirim = "<input type='submit' id='btn' name='ubah' value='Simpan Perubahan'>";
		$proses = "<form action='../aksi/edit/ubah_kategori.php' method='post'>";
		$titlehead = "Edit Kategori";
		$subTitle = $titlehead;
			}
	else{
		$id_kategori = "";
		$nama_kategori = "";
		$proses = "<form action='../aksi/save/simpan_kategori.php' method='post'>";
		$btn_kirim = "<input type='submit' id='btn' name='simpan' value='Simpan'>";
		$titlehead = "New Kategori";
		$subTitle = $titlehead;
	}

	 ?>


<!DOCTYPE html>
<html>
<head>
 	<title><?php echo $subTitle; ?> | <?php echo $title_page  ?></title>
 	<?php include '../utilitiy/tag_head.php'; ?>
 </head>
 <body>
 	<?php include '../utilitiy/nav.php'; ?>

	<h3><?php echo $titlehead; ?></h3>
	<?php 
		echo $proses ;
	 	echo "<input type='hidden'  value='kategori_barang'  name='tbl'>";
	 	echo "<input type='hidden'  value='".$id_kategori."'  name='id_kategori'>";
	 ?>
	<table border="1">
		<tr>
			<td><label for='nama_kategori'>Nama Kategori</label></td>
			<td>:</td>
			<td>
				<input type='text' id='nama_kategori' value= '<?php echo $nama_kategori; ?>' name='nama_kategori'>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center;">
				<?php echo $btn_kirim;?>
			</td>
		</tr>
</table>


</form>
</body>
</html>