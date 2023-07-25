<?php 
	include '../utilitiy/global_var.php';
	$subTitle = "";

 ?>


	<?php 
	if ($_GET) {
		include '../config/koneksi.php';
		$id_kasir = $_GET['id_kasir'];
		$nama_kasir = $_GET['nama_kasir'];
		$alamat = $_GET['alamat'];
		$no_hp = $_GET['no_hp'];
		$btn_kirim = "<input type='submit' id='btn' name='ubah' value='Simpan Perubahan'>";
		$proses = "<form action='../aksi/edit/ubah_kasir.php' method='post'>";
		$titlehead = "Edit Kasir";
		$subTitle = $titlehead;
			}
	else{
		$id_kasir = "";
		$nama_kasir = "";$alamat = "";$no_hp = "";
		$proses = "<form action='../aksi/save/simpan_kasir.php' method='post'>";
		$btn_kirim = "<input type='submit' id='btn' name='simpan' value='Simpan'>";
		$titlehead = "New Kasir";
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
	 	echo "<input type='hidden'  value='".$id_kasir."'  name='id_kasir'>";
	 ?>
	<table border="1">
			<td><label for='nama_kasir'>Nama Kasir</label></td>
			<td>:</td>
			<td>
				<input type='text' id='nama_kasir' value= '<?php echo $nama_kasir; ?>' name='nama_kasir'>
			</td>
		</tr>
		<tr>
			<td><label for='alamat'>Alamat</label></td>
			<td>:</td>
			<td>
				<input type='text' id='alamat' value= '<?php echo $alamat; ?>' name='alamat'>
			</td>
		</tr>
		<tr>
			<td>
				<label for='no_hp'>No. Hp</label></td>
			<td>:</td>
			<td>
				 <input type='number' id='no_hp' value= '<?php echo $no_hp; ?>' name='no_hp'>
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